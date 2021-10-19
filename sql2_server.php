<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=address_book;port=3306;
    charset=utf8','c0118306','password');

$data = $pdo->query('SELECT * FROM addresses') -> fetchAll();
echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>