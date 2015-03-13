<?php
$to = 'cs2107.nus@gmail.com';
$subject = 'A0121410H_ZHU_CHUNQI';
$message = 'Hi, I am sending this mail for CS2107';

$headers = array();
$headers[] = 'From: alice1532509@gmail.com';
$headers[] = 'Date: 1 Jan 1990';
$headers[] = 'X-Mailer: Mac OS XIII Mail 3.2.1';

if(mail($to, $subject, $message, implode("\r\n", $headers))) echo("Email Sent.");
else echo("Sending Failed.");
?>