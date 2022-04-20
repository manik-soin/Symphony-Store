<?php

$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
	or die("Database connection failure!".mysqli_connect_error());


$USER_ID=$_SESSION['DefaultUserId'];
if (isset($_SESSION['UserId'])==true) {
    $USER_ID=$_SESSION['UserId'];}
$fullName=$_POST['fullName'];
$companyName=$_POST['companyName'];
$addLine1=$_POST['addLine1'];
$addLine2=$_POST['addLine2'];
$city=$_POST['city'];
$Region=$_POST['region'];
$country=$_POST['country'];
$postal=$_POST['postal'];
$order=$_POST['order'];

if(!($addLine2)){
	$addLine2=" NA";
}
if(!($companyName)){
	$companyName=" NA";
}
if(!($Region)){
	$Region=" NA";
}

?>