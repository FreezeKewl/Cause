<?php  
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n Email Address: $email \n Phone $phone \n Message $message";
$recipient = "phezz3000@yahoo.com";
$subject = "Contact info for Water.org";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='file:///C:/Users/phezz/water_mobile/Contact.html' style='text-decoration:none;color:#ff0099;'>Return Home</a>";
?>