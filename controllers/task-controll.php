<?php 
require_once("../todo list/settings/db.php");
// Вывод всех записей из одной таблицы
$tasks = taskAll('tasks');

// Добавление записи
$task = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = htmlspecialchars(trim($_POST['task']));
    $params = [
        "task" => $_POST['task']
    ];
    addTask('tasks',$params);
    header("location:" . "index.php");
}else{
    $task = '';
}

// Удалеие записи

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    deleteTusk('tasks', $id);
    header("location:" . "index.php");
}
?>