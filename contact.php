<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'miriamdominguez.e@gmail.com'; // Replace with your email address
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
