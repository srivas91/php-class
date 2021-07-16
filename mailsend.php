<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";
function sendemail($user,$email)
{
$mail = new PHPMailer(true);
try{
    $mail->SMTPDebug=2;
    $mail->isSMTP();  // SMTP-Simple Mail Transfer Protocol
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'srini.pit21@gmail.com'; //gmail username
    $mail->Password = 'srini_123';  //gmail password
    $mail->Port = 465;
    $mail->SMTPSecure ='ssl';

    
    $mail->setFrom("srini.pit21@gmail.com","Srinivasan");
    $mail->addAddress($email,$user);  //to-email id
    $mail->addReplyTo("srini.pit21@gmail.com");
    
    $mail->isHTML(true);
    
    $mail->Subject = "Covid Alert";
    $mail->Body = "<i><b>Stay Safe</b></i>";
    
        $mail->send();
        echo "Mail has been sent successfully";
    } catch (Exception $e) {
        echo "Mail could not be sent.Error: " . $mail->ErrorInfo;
    }

}