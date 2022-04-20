<?php    
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
        or die("Database connection failure!".mysqli_connect_error());
    $input= $_GET[ "input" ]; 
    $query = "SELECT * FROM Login WHERE UserId='$input'";   
  
$result=mysqli_query($DBconnection, $query) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>"); 
   
$output = array();   
   
if(mysqli_num_rows($result)>=1) {   

    $output[] = array("out"=>"Username Duplicated");   
       
}
else{
    $output[] = array("out"=>" ");
    
}   
  
echo( json_encode( $output ) );  
mysqli_free_result($result);
mysqli_close($DBconnection); 
   
?>