<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer/php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('en', 'phpmailer/language/')
    $mail->IsHTML(true);

    $mail->setFrom('katty67kuc@gmail.com');
    $mail->addAddress('katty67kuc@gmail.com');
    $mail->Subject = 'Order form info';

    $body = '<h1>This is order form </h1>';

    if(trim(!empty($_POST['name']))){
        $body.=<p><strong>Name:</strong> $_POST['name'].</p>
    }

    if(trim(!empty($_POST['tel']))){
        $body.=<p><strong>Tel:</strong> $_POST['Tel'].</p>
    }

    if(trim(!empty($_POST['email']))){
        $body.=<p><strong>email:</strong> $_POST['email'].</p>
    }


    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Error';
        }else {
            $message = 'Your data is sent'
        }


    $response = ['message' => $message]

    header('Content-type: application/json')
    echo json_encode($response);
?>