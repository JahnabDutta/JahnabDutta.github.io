<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "dutta.4@iitj.ac.in";
    $headers = "From: ".$mail;
    $text = "Email received from ".$name."\n\n".$message;

    mail($mailTo,$subject,$text,$headers);
    header("Location: index.php?mailsent");

}