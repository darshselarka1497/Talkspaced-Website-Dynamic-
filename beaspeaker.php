<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message=$_POST['message'];
$formcontent=" Name :- $name \n Email :- $email \n Subject :- $subject \n Message :- $message";
$recipient = "darsh.selarka@somaiya.edu";
$subject = "Be A Speaker Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for subscribing to the talkspaced newsletter";
?>