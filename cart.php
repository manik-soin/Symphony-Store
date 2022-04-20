<?php
session_start();
$User=$_GET['UserId'];
$musicId=(int)($_GET['MusicId']);
$quantity=(int)($_GET['quantity']);

$_SESSION['CartCounter']=(int)($_SESSION['CartCounter'])+$quantity;
$DBconnection=mysqli_connect("sophia.cs.hku.hk","msoin","Kinam108","msoin")
            or die("Database connection failure!".mysqli_connect_error());

$query="SELECT * FROM Cart WHERE UserId='$User' AND MusicId='$musicId'";
$result=mysqli_query($DBconnection, $query) or die("<div>MySQL Query Error!!".mysqli_error($DBconnection)."</div><br>");
	
if(mysqli_num_rows($result)>=1){
	$row=mysqli_fetch_array($result);
	$newQuery=$quantity+(int)($row['Quantity']);
	$sql_query="UPDATE Cart SET Quantity='$newQuery' WHERE UserId='$User' AND MusicId='$musicId'";
	if (mysqli_query($DBconnection, $sql_query)==false) {
            echo "<div>Error update!!<br>".mysqli_error($DBconnection)."</div><br>";
    }
}

else{  
    if($_GET['quantity'] && $_GET['MusicId'] && $_GET['MusicId']) {     
	$sql_query="INSERT INTO Cart (MusicId,UserId,Quantity) VALUES ('$musicId','$User','$quantity')";
	          
	if (mysqli_query($DBconnection, $sql_query)==false) {
	    echo "<div>SQL Error<br>".mysqli_error($DBconnection)."</div><br>";
	}
}
}
?>
<!DOCTYPE html>

<html>
  
<head>
    <title>Cart
    </title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="global.css">
     <script src='searchBar.js'></script>
</head>
  
<body>
    <header>
        <div class="searchForm">
          
                <input type="search" name="search" id="searchBar" placeholder="Keyword(s)">
                <button class="headerButton" id="searchButton">Search</button>

                <div id="headerButtons">
                    <?php
                        include("headButts.php")
                    ?>
         
            </div>
 
        </div>
    </header>
    <h1>My Shopping Cart</h1>

    <?php
   include("cartCalc.php")
    ?>
    <button class="bttn" id="createButton" style="margin: auto;"><a href="index.php">BACK</a></button>
    <button class="bttn" id="createButton" style="margin: auto;"><a href=<?php echo '"'."checkout.php?totp=".$grandtotal.'"';?>>CHECKOUT</a></button>

    <h1 id="searchHeader"></h1>
    <div id="output"></div>

   
    </body>
    </html>

