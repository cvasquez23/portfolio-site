<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //submit form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from = 'From: Portfolio Site';
    $to = 'chris@chrisvasquez.dev';
    $subject = 'Message from chrisvasquez.dev';
    $body = '';

    $body .= 'From: ' . $name . "\r\n";
    $body .= 'Email: ' . $email . "\r\n";
    $body .= 'Message: ' . $message . "\r\n";

    mail($to, $subject, $body, $from);
    header('Location: https://test.chrisvasquez.dev/thanks.php');

    $message_sent = true;
  }
}
?>
