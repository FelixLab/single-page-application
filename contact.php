<?php
$to      = 'emaile-esempio@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['mesasge'];
$headers = 'From: '. $_POST['emaild'] . "\r\n" .
    'Reply-To: ' . $_POST['emaild'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>