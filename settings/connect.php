<?php
$dbname = "todolist";
$host = "MariaDB-11.2";
$user = 'root';
$password = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password, $options);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных");
}

?>