<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$subject= $_POST['subject'];
$text= $_POST['text'];

$to = "parguzatt@mail.com";
$subject = "Mail From Yosub's portfolio";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\n Subject =" . $subject. "\r\n Text =" . $text;
$headers = "From: noreply@Yosub's Portfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
