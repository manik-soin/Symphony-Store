 <?php
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
				echo "<br><br><div>Total Price: HKD$ ".$_GET['totp']."</div><br>";
				echo"<input id=".'"order"'."name=".'"order"'."type=".'"hidden"'."value=".'"'."<br>Total Price: HKD$ ".$_GET['totp'].'"'."/>";

			}


            ?>
