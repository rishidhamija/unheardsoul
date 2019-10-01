<?php
$to = "rishidhamija@outlook.com";
$subject = "Poetry submission";
$txt = "Name :".$_POST['firstname']. " ". $_POST['lastname'].
       "<br> Country :".$_POST['country'].
       "<br> Message : ".$_POST['subject'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$ml = mail($to,$subject,$txt,$headers);
if($ml)
echo "<script>alert('Your Mail Has Been Submited')</script>";
echo "<script>window.location.href = 'ContactUs.html';</script>";
?> 