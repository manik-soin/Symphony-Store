<?php
session_start();
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
            or die("Database connection failure!".mysqli_connect_error());
        
            $query="SELECT DISTINCT Category FROM MUSIC";
            $result=mysqli_query($DBconnection, $query) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
            if(mysqli_num_rows($result)>=1){
                while($row=mysqli_fetch_array($result)){
                    echo "<a href=".'"category.php?id='.$row['Category'].'"'." class='catLinks'>".$row['Category']."  </a>";
                }
                
            }
            else{
                echo "<div>No Categories Found</div><br>";
            }
?>