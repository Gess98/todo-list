<?php
use Exception as GlobalException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function send_mail(array $mail_settings, array $to, string $subject, string $body, array $attachments = []) {
    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                           //Send using SMTP
        $mail->Host = $mail_settings['host'];      //Set the SMTP server to send through
        $mail->SMTPAuth = $mail_settings['auth'];  //Enable SMTP authentication
        $mail->Username = $mail_settings['username'];  //SMTP username
        $mail->Password = $mail_settings['password'];  //SMTP password
        $mail->SMTPSecure = $mail_settings['secure'];  //Enable implicit TLS encryption
        $mail->Port = $mail_settings['port'];          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = $mail_settings['charset'];
    
        $mail->setFrom($mail_settings['from_email'], $mail_settings['from_name']);
        foreach ($to as $email) {
            $mail->addAddress($email);
        }

        if($attachments){
            foreach ($attachments as $attachment) {
                $mail->addAttachment($attachment);
            }
        }

        $mail->isHTML($mail_settings['is_html']);
        $mail->Subject = $subject;
        $mail->Body = $body;
        return $mail->send();
    
    }catch(Exception $e){
        return false;
    }
}
?>