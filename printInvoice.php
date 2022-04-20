<?php 

	echo"<span class=".'"composer"'.">Full Name: ".$fullName."</span>";
	echo"&nbsp;&nbsp;&nbsp;&nbsp; <span class=".'"composer"'.">Company: ".$companyName."</span><br>";
	echo"<span class=".'"composer"'.">Address Line 1: ".$addLine1."</span><br>";
	echo"<span class=".'"composer"'.">Address Line 2: ".$addLine2."</span><br>";
	echo"<span class=".'"composer"'.">City: ".$city."</span>";
	echo"&nbsp;&nbsp;&nbsp;<span class=".'"composer"'.">Region: ".$Region."</span>";
	echo"&nbsp;&nbsp;&nbsp;<span class=".'"composer"'.">Country: ".$country."</span><br>";
	echo"<span class=".'"composer"'.">Postcode: ".$postal."</span><br>";

 	$q2="SELECT Quantity,MusicId FROM Cart WHERE UserId='$USER_ID'";
    $r2=mysqli_query($DBconnection, $q2) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
	
	if(mysqli_num_rows($r2)>=1){
		while($val=mysqli_fetch_array($r2)){
			$mid=$val['MusicId'];
			$q3="SELECT MusicName, Price FROM MUSIC WHERE MusicId='$mid'";
			$r3=mysqli_query($DBconnection, $q3) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");

			if(mysqli_num_rows($r3)>=1){
				$val3=mysqli_fetch_array($r3);
				echo"<div>".$val['Quantity']." x ".$val3['MusicName']." HK$ ".$val3['Price']."</div><br>";
				
			}
		}
	}

	echo"<span class=".'"composer"'.$order."</span><br><br>";

	?>