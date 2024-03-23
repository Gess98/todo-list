<?php
    require_once('../controllers/contacts-form.php');
    require_once "../settings/path.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
    require_once('../include/header.php');
?>
<!-- Конец header -->

    <main>
        <div class="container">
            <div class="container-fluid">
                <?=$error?>
                <form action="contact.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="user-name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Адрес электронной почты</label>
                        <input type="email" class="form-control" name="user-email" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Сообщение</label>
                        <textarea class="form-control" name="user-msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-outline-secondary" type="submit" name="add-task" value="Отправить">
                    </div>
                </form>
            </div>
        </div>
    </main> <!-- Конец main-section -->

<?php 
    require_once('../include/footer.php');
?>
<!-- Конец footer -->

    <script src="https://kit.fontawesome.com/a9b92623fb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>