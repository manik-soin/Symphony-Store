<?php
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
	or die("Database Connection Error!".mysqli_connect_error());
	$password=$_POST['password'];
	$username=$_POST['name'];

	$query="SELECT * FROM Login WHERE UserId='$username'";
	$result=mysqli_query($DBconnection, $query) or die("<div>SQL MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");

	if(mysqli_num_rows($result)<=0){
		$query2="INSERT INTO Login (UserId, PW) VALUES('$username','$password')";
		if(mysqli_query($DBconnection,$query2)==false){
			echo "<div>MySQL Error!<br>".mysqli_error($DBconnection)."</div><br>";
			header('Refresh: 3;url=Login.php');
		}
		else{
		header('Refresh: 3;url=Login.php');
		echo "<h1>Account successfully created! Welcome to Symphony family!</h1>";
		}
	}
	else{
		header('Refresh: 3;url=index.php');
		echo "<h1>Account already exists</h1>";
	}
	mysqli_free_result($result);
mysqli_close($DBconnection); 
?>