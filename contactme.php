<?php
//get data from from
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$to = "manjitpatel@gamil.com";

$subject = "mail from manjit patel website";
$txt = "Name = ". $name . "\r\n Email =" . $email . "\r\n subject =" . $subject ."\r\n Message =" . $message;


$headers = "From: manjitpa@manjitpatel.tech". "\r\n".
"CC: somebodyelse@exampl.com";
if($emai!=NULL){
mail($to,$subjec,$txt,$headers);
}

//redirect
header("#");

?>