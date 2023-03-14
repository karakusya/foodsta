<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];

	$to = "katty67kuc@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Почта: $email /n	;
	mail($to, $subject, $msg, "From: $to ");

?>

