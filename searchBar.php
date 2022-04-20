<?php   
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
        or die("Database connection failure!".mysqli_connect_error());
   
if(empty($_GET)==false){

    $search = $_GET[ "search_term" ]; 
    $query = 'SELECT * FROM MUSIC WHERE MATCH( MusicName, Composer ) AGAINST( ".*' .$search. '.*" IN BOOLEAN MODE ); ';   
}

else{

    $query="SELECT * FROM MUSIC";
}

$result=mysqli_query($DBconnection, $query) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>"); 
     
$output = array();   
   
if(mysqli_num_rows($result)>=1) {   

    while($row=mysqli_fetch_array($result)){ 
        $output[] = array("MusicId"=>$row[ "MusicId" ],"MusicName"=>$row[ "MusicName" ],"Category"=>$row[ "Category" ],"Composer"=>$row[ "Composer" ],"Description" => $row[ "Description" ], "Price" => $row[ "Price" ],"Published"=>$row[ "Published" ],"NewArrival"=>$row[ "NewArrival" ],);   
    }   
}   
  
echo( json_encode( $output ) );  
mysqli_free_result($result);
mysqli_close($DBconnection); 
   
?>