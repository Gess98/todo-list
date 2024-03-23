<?php
    require_once '../vendor/autoload.php';
    require_once 'functions.php';
    require_once "../settings/db.php";
    $user ='';
    $email='';
    $message ='';
    $error = '';

    $mail_settings =
    [
        'host' => 'smtp.gmail.com',
        'auth' => true,
        'port' => 465,
        'secure' => 'ssl',
        'username' => 'email.sokolov@gmail.com',
        'password' => 'password_SMTP',
        'charset' => 'UTF-8',
        'from_email' => 'email.sokolov@gmail.com',
        'from_name' => '',
        'is_html' => true
    ];

    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $user = htmlspecialchars(trim($_POST['user-name']));
        $email = htmlspecialchars(trim($_POST['user-email']));
        $message = htmlspecialchars(trim($_POST['user-msg']));

        if ($user != '' and $email != '' and $message != '') {
            $mail_settings['from_name'] = $user;
            $body = $message ."<br/>"."Имя пользователя: ". $user ."<br/>"."Email пользователя: ". $email;

            send_mail($mail_settings,['your.email@gmail.com'],'Письмо с сайта', $body);
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