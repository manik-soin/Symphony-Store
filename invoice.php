<?php
session_start();
include("invoicePost.php");
?>

<!DOCTYPE html>
  
<html>


<head>
    <title>Invoice
    </title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="global.css">
    
</head>
<body>
	<h1>Invoice Page</h1>
	<?php 

	include("printInvoice.php");

	?>
	<p class="thankMsg">Thank you for shopping with Symphony Store. Your Sypmphonies would be delivered within 7 working days.</div><br>
	 <button id="createButton" href="index.php"><a href="index.php">OK</a></button>
	 <script src="invoiceCreatebutton.js">
	 	
	 </script>
</body>
</html>