<?php
    require_once "../../htdocs/todo list/settings/db.php";
    $user ='';
    $email='';
    $message ='';
    $error = '';

    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $user = htmlspecialchars(trim($_POST['user-name']));
        $email = htmlspecialchars(trim($_POST['user-email']));
        $message = htmlspecialchars(trim($_POST['user-msg']));

        if ($user != '' and $email != '' and $message != '') {
            $post = [
                'name' => $user,
                'email' => $email,
                'message' => $message
            ];

            addTask('support', $post);
        }else{
            $error = "Вы заполнили не все поля";
        }

    }else{
        $user ='';
        $email='';
        $message ='';
        $error = '';
    }
?>