<?php
          $DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
    or die("Database connection failure!".mysqli_connect_error());
    
        
            $query2="SELECT * FROM MUSIC WHERE MusicName = '$MUSIC_ID'";
            $result=mysqli_query($DBconnection, $query2) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");

            if(mysqli_num_rows($result)>=1){
                $row=mysqli_fetch_array($result);
                    echo "<span class=".'"Mcontainer"'.">";
                    echo"<div class=".'"Mimg_container"'."><img class=".'"musician"'."src=".'"Materials/img_' . $row['MusicId'] . '.jpg"'." alt= ".'"Musician Image"'."></div>";
                    echo "<audio autoplay controls><source src=".'"Materials/m'. $row['MusicId'] . '.mp3"'."type=".'"audio/ogg"'."><source src=".'"Materials/m'. $row['MusicId'] . '.mp3"'."type=".'"audio/mpeg"'.">Your browser does not support the audio element</audio><br>";
                    if($row['NewArrival']){
                        echo "<span class=".'"NewArrival"'.">NEW ARRIVAL !</span><br>";
                    }
                    echo "<span class=".'"composer"'.">Composer: ".$row['Composer']."</span><br>";
                    echo "<span class=".'"composer"'.">Published: ".$row['Published']."</span><br>";
                    echo "<span class=".'"composer"'.">Category: ".$row['Category']."</span><br>";
                    echo "<span class=".'"composer"'.">Description: ".$row['Description']."</span><br>";
                    echo "<span class=".'"price"'.">Price: $ ".$row['Price']."</span><br>";
                    echo "<form id=".'"cart_form"'." action=".'"cart.php"'." method='get'> <input id=".'"UserId"'." name=".'"UserId"'." 
                   type=".'"hidden"'. "value=".'"'. $USER_ID.'"'."/><input id=".'"MusicId"'." name=".'"MusicId"'."type=".'"hidden"'. "value=". $row['MusicId']."/>";
                    echo "<label for=".'"quantity"'.">Order: </label><input type=".'"number"'."id=".'"quantity"'."name=".'"quantity"'."value=".'"1"'.">";
                    echo "<input type=".'"submit"'." value=".'"Add to Cart"'." /></form>";

                }
                
            
            else{
                echo "<div>No Music Data Found</div><br>";
            }
        ?>