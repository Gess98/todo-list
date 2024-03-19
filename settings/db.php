<?php
require_once('connect.php');

// Получение всех записей из одной таблицы
function taskAll($table) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

// Добавление записи в таблицу

function addTask($table,$params) {
    global $pdo;
    $keys = '';
    $values = '';

    foreach ($params as $key => $value) {
        $keys .= "$key";
        $values .= "'"."$value"."'";
    }

    $sql = "INSERT INTO $table ($keys) VALUES ($values)";
    $query = $pdo->prepare($sql);
    $query->execute();
}


// Удаление строки из таблицы

function deleteTusk($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id=" . $id;
    $query = $pdo->prepare($sql);
    $query->execute();
}
?>