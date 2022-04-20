<?php
session_start();
$defaultUser=$_SESSION['DefaultUserId'];
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
	or die("Database Connection Error!".mysqli_connect_error());
	$password=$_POST['password'];
	$username=$_POST['name'];	
	$query="SELECT * FROM Login WHERE UserId='$username' AND PW='$password'";
	$result=mysqli_query($DBconnection, $query) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
	
	if(mysqli_num_rows($result)>=1){
		$sql_query="UPDATE Cart SET UserId='$username' WHERE UserId='$defaultUser'";
		$_SESSION['UserId']=$username;
	if (mysqli_query($DBconnection, $sql_query)==false) {
            echo "<div>Error Insert!<br>".mysqli_error($DBconnection)."</div><br>";
        }
		header('location:index.php');
	}
	else{
		header('Refresh: 3;url=Login.php');
		echo "<h1>Login not valid! please try again.</h1>";
	}
mysqli_free_result($result);
mysqli_close($DBconnection); 
?>