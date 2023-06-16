<?php
ini_set("SMTP","mail.texturemagazine.ca");
ini_set("smtp_port", "25");
ini_set("sendmail_from","jesse@texturemagazine.ca");

$to ="marki.sveen@gmail.com";
$from = "jesse@texturemagazine.ca";
$subject ="this is test mail";
$message = "<a href=''>this is the message</a>";
$message = wordwrap($message, 70, '\r\n');
//$headers = "Content-type: text/html;charset-iso-8859-1\r\nFrom:$from\r\nCc:dd@email.com\r\n";


$send = mail($to,$subject,$message); //$headers - header is not required, but need for images and cc and bcc
echo $send;

//cannot do authentication

?>