<?php
$to = "matshwikatlego@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['email'];

    mail($to, $subject, $message);
?>