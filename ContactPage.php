<?php

if (isset($_POST['submit'])) {
$nameofartist= $_POST['name of artist'];
$email= $_POST['email'];
$reason= $_POST['reason'];



$mailTo="candace.lebby@gmail.com";
$headers= "From: ".$emailFrom;
$txt = "You have recieved an email from ".$email.".\n\n".$
mail();

}


