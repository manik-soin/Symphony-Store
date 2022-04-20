<?php

if(isset($_SESSION['CartCounter'])==false)
    {
      $_SESSION['CartCounter']=0;
    }

$_SESSION['DefaultUserId']=session_id();

$defaultUser=$_SESSION['DefaultUserId'];
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
            or die("Database connection failure!".mysqli_connect_error());
            $q1="SELECT * FROM Login WHERE UserId='$defaultUser'";
    $query_result=mysqli_query($DBconnection, $q1) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
    
    if(mysqli_num_rows($query_result)<=0){
        
            $sql_query="INSERT INTO Login (UserId,PW) VALUES ('$defaultUser','defaultpass')";
            
          if (!mysqli_query($DBconnection, $sql_query)) {
            echo "<div>SQL Error<br>".mysqli_error($DBconnection)."</div><br>";
        }
    }

?>