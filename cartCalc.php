 <?php
    $grandtotal=0;
    if($_GET['UserId']){
        $User=$_GET['UserId'];
    }
    else{
        $User=$_SESSION['DefaultUserId'];
        if (isset($_SESSION['UserId'])==true) {
            $User=$_SESSION['UserId'];}
    }
    $query2="SELECT * FROM Cart WHERE UserId='$User'";
    $result2=mysqli_query($DBconnection, $query2) or die("<div>MySQL MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
    if(mysqli_num_rows($result2)>=1){
     	while($row=mysqli_fetch_array($result2)){
     		$mid=$row['MusicId'];
            
     		$query3="SELECT MusicName, Price FROM MUSIC WHERE MusicId='$mid'";
            $result3=mysqli_query($DBconnection, $query3) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
         	if(mysqli_num_rows($result3)>=1){
         		$m=mysqli_fetch_array($result3);
         		echo"<br><span class=".'"composer"'.">".$m['MusicName']."</span><br>";
         		$grandtotal=$grandtotal+((int)($m['Price'])*(int)($row['Quantity']));


     	      }
            echo "<span class=".'"composer"'.">Quantity: ".$row['Quantity']."</span><br><br>";
            echo "<button id=".'"'.'"'.$mid.">DELETE</button>";
        }
     	
     }

     echo"<br><span class=".'"Composer"'.">Total Price: $ ".$grandtotal."</span><br>";


    ?>