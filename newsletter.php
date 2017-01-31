<?php 
$email = $_POST['email'];
$formcontent=" $email has Subscribed for the newsletter";
$recipient = "darsh.selarka@somaiya.edu";
$subject = "NewsLetter Subscription";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for subscribing to the talkspaced newsletter";
?>