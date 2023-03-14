<?php
use PHPMailer\src\PHPMailer;
use PHPMailer\src\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


// Отримання даних форми
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];

// Створення екземпляру PHPMailer
$mail = new PHPMailer(true);

try {
  // Налаштування серверу SMTP
  $mail->SMTPDebug = 2; // Змініть на 2 для відображення детальної інформації відладки
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'xoxo.kusya@gmail.com'; // Введіть ваш email
  $mail->Password = 'Vb1234er.'; // Введіть ваш пароль
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  // Налаштування електронного листа
  $mail->setFrom('xoxo.kusya@gmail.com', 'Відправник'); // Введіть ваш email та ім'я відправника
  $mail->addAddress('katty67kuc@example.com', 'Отримувач'); // Введіть email та ім'я отримувача
  $mail->addReplyTo($email, $name);
  $mail->isHTML(true);
  $mail->Subject = 'Нова заявка з сайту';
  $mail->Body = '<p>Ім\'я: ' . $name . '</p><p>Телефон: ' . $tel . '</p><p>Email: ' . $email . '</p>';

  // Відправка електронного листа
  $mail->send();
  $response_array['status'] = 'success';
} catch (Exception $e) {
  $response_array['status'] = 'error';
  $response_array['error'] = $mail->ErrorInfo;
}

// Повернення результату
header('Content-type: application/json');
echo json_encode($response_array);