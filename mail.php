<?php
if ( ($_POST['name']!="") && ($_POST['email']!="")){
$name = $_POST['name'];
$phonenumber = $_POST['phone_number'];
// $companyname = $_POST['companyname'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = "Ken@kenjacksoninsurance.com";
$subject = "kenjacksoninsurance Contact Form";
$fromname = 'Ken@kenjacksoninsurance.com';
$message = "<p>New Email is Received: </p>  
<p>First Name : $name.</p> 
<p>Email : $email.</p> 
<p>Phone Number : $phonenumber.</p> 
<p>Message: $message.</p>"; 


 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$fromname.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers);
if($sent){
 echo "<span style='color:green; font-weight:normal;'>
 Thank you for contacting us, we will get back to you shortly.
 </span>";
}
else{
 echo "<span style='color:red; font-weight:normal;'>
 Sorry! Your form submission is failed.
 </span>";
 }
}
?>