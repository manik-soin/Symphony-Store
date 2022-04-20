<?php
session_start();
$USER_ID=$_SESSION['DefaultUserId'];
if (isset($_SESSION['UserId'])==true) {
    $USER_ID=$_SESSION['UserId'];}
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
	or die("Database connection failure!".mysqli_connect_error());

if (isset($_SESSION['UserId'])==false) {
	echo"<div id=".'"checkoutNoLogin"'."><div><h2>I'm a new customer</h2><span>Please Checkout Below or</span></div><div><h2>I'm already a customer</h2><br><a href=".'"Login.php"'.">Sign In</a></div></div>";

	echo"<h2>Create Account:</h2>";
	echo"<div><label for=".'"name"'.">Username: </label><input oninvalid=".'"InvalidMsg(this);"'."oninput=".'"InvalidMsg(this);"'."id=".'"name"'. " name=".'"name"'. " placeholder=".'"Desired Username"'." type=".'"text"'." required=".'"required"'." /><span style=".'"color: red;"'." id = ".'"invalidInput"'."></span></div><br>";
	echo "<div><label for=".'"password"'.">Password: </label><input oninvalid=".'"InvalidMsg(this);"'."oninput=".'"InvalidMsg(this);"'."id=".'"password"'." placeholder=".'"Desired Password"'." name=".'"password"'. " type=".'"password"'." required=".'"required"'." /> </div><br>";
	echo "<button id=".'"createAccount"'.">CONFIRM</button>";	
	}

?>