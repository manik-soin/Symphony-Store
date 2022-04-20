<?php
session_start();
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
	or die("Database connection failure!".mysqli_connect_error());
	$username=$_POST['name'];
	$defaultUser=$_SESSION['DefaultUserId'];
	
	$sql_query="DELETE FROM Login WHERE UserId='$defaultUser'";
            
    if (mysqli_query($DBconnection, $sql_query)==false) {
            echo "<div>SQL Error<br>".mysqli_error($DBconnection)."</div><br>";
    }

		if (isset($_COOKIE[session_name()])==true) {
		setcookie(session_name(),'',time()-3600, '/');
		}	
		session_unset();
		session_destroy();
		header('Refresh: 3;url=index.php');
		echo "<h2>Logging out</h2>";
?>