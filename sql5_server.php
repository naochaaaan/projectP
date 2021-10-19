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
if($newdata["post"] =="search"){
    $key = $newdata["word"];
    $search = $pdo -> query("SELECT * FROM addresses WHERE name LIKE '".$key."%';") -> fetchAll();
    echo json_encode($search,JSON_UNESCAPED_UNICODE);
}

if($newdata["post"] =="update"){
    $stmt = $pdo -> prepare('UPDATE addresses SET name = ?, address = ?, phone = ?, email = ? WHERE id = ?;');
    $stmt -> execute(
        array($newdata['name'],
        $newdata['address'],
        $newdata['phone'],
        $newdata['email'],
        $newdata['id']));
    }

if($_GET["post"] == "get"){
    $data = $pdo->query('SELECT * FROM addresses') -> fetchAll();
    echo json_encode($data,JSON_UNESCAPED_UNICODE); 
}
?>