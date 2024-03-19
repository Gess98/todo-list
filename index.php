<?php 
    require_once('settings/db.php');
    require_once('controllers/task-controll.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
    require_once('include/header.php')
?>
<!-- Конец header -->

    <main>
        <section class="container add-section">
            <div class="container-fluid">
                <div class="add-form">
                    <form action="index.php" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Задача</span>
                            <input type="text" class="form-control" name="task" value="<?=$task;?>" placeholder="Текст задачи" aria-label="Текст задачи" aria-describedby="basic-addon1">
                            <input class="btn btn-outline-secondary" type="submit" name="add-task" value="Добавить задачу">
                        </div>
                    </form>
                </div>
            </div>
        </section> <!-- Конец add-section-->

        <section class="container main-section">
            <div class="container-fluid">
                <div class="tasks">
                <?php foreach ($tasks as $key => $task): ?>
                    <div class="task">
                        <p hidden><?php echo $task['id']; ?></p>
                        <p><?php echo $key + 1; ?></p>
                        <p><?php echo $task['task']; ?></p>
                        <div class="tasks-info">
                            <span><?php echo $task['created']; ?></span>
                            <a class="done" href="index.php?id=<?php echo $task['id']; ?>">Выполнено</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section> <!-- Конец main-section -->
    </main>

<?php 
    require_once('include/footer.php')
?>
<!-- Конец footer -->

    <script src="https://kit.fontawesome.com/a9b92623fb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>