        <?php
        
            $query2="SELECT * FROM MUSIC";
            $result=mysqli_query($DBconnection, $query2) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
            if(mysqli_num_rows($result)>=1){
                while($row=mysqli_fetch_array($result)){
                    echo "<span class=".'"container"'."><a class=".'"title"'." href=".'"musicDetails.php?musicId='.$row['MusicName'].'"'.">".$row['MusicName']."</a>";
                    echo"<div class=".'"img_container"'."><img class=".'"musician"'."src=".'"Materials/img_' . $row['MusicId'] . '.jpg"'." alt= ".'"Musician Image"'."></div>";
                    if($row['NewArrival']==true){
                        echo "<span class=".'"NewArrival"'.">NEW ARRIVAL !</span><br>";
                    }
                    echo "<span class=".'"composer"'.">Composer: ".$row['Composer']."</span><br>";
                    echo "<span class=".'"price"'.">Price: $ ".$row['Price']."</span></span>";               
                }
                
            }
            else{
                echo "<div>Symphony not found! :(</div><br>";
            }
        ?>
