<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=address_book;port=3306;
    charset=utf8','c0118306','password');


$newdata = json_decode(file_get_contents('php://input'),true);
if($newdata["post"] == "add"){
    $stmt = $pdo -> prepare('INSERT INTO addresses (name,address,phone,email) VALUES (?,?,?,?);');
    $stmt -> execute(
        array($newdata['name'],
        $newdata['address'],
        $newdata['phone'],
        $newdata['email']));
    }

if($_GET["post"] == "get"){
    $data = $pdo->query('SELECT * FROM addresses') -> fetchAll();
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
}
?>