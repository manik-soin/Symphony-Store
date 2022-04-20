<?php
include("checkoutChoice.php");
?>




<!DOCTYPE html>
  
<html>


<head>
    <title>Checkout
    </title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="global.css">
    <script src='checkoutValidate.js'>
		</script>
    
</head>
  
<body>

	<form id="Delivery_form" action="invoice.php" method='post'>
            <div>
            <label for="fullName">Full Name</label>
            <input id="fullName" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="fullName" 
                   type="text" placeholder="Required" required="required" />
            </div><br>
            <div>
            <label for="companyName">Company Name</label>
            <input id="companyName" name="companyName" 
                   type="text" />
            </div><br>
            <div>
            <label for="addLine1">Address Line 1</label>
            <input id="addLine1" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="addLine1" 
                   type="text" placeholder="Required" required="required" />
            </div><br>
            <div>
            <label for="addLine2">Address Line 2</label>
            <input id="addLine2" name="addLine2" 
                   type="text" />
            </div><br>
            <div>
            <label for="city">City</label>
            <input id="city" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="city" 
                   type="text" placeholder="Required" required="required" />
            </div><br>
            <div>
            <label for="region">Region/State/District</label>
            <input id="region" name="region" 
                   type="text" />
            </div><br>
            <div>
            <label for="country">Country</label>
            <input id="country" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="country" 
                   type="text" placeholder="Required" required="required" />
            </div><br>
            <div>
            <label for="postal">Postcode/Zip Code</label>
            <input id="postal" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="postal" 
                   type="text" placeholder="Required" required="required" />
            </div><br>
            <div>Your order: ( <a href="cart.php" class="navLink">change</a> )</div><br>
            <h4 style="margin-left: 35px;">Free Standard Shipping</h4>
            <?php
           include("checkoutTotal.php");

            ?>
 
            <input type="submit" value="CONFIRM" />
        </form>
    
</body></html>

