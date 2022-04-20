<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
  
<html>


<head>
    <title>LOGIN
    </title>
   	<meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <script src='searchBar.js'></script>  
    <script src='invalidMsg.js'></script>
    <link rel="stylesheet" href="global.css">
</head>
  
<body>
	<h1>Symphony Store</h1>

    <header>
        <div class="searchForm">
          
                <input type="search" name="search" id="searchBar" placeholder="Keyword(s)">
                <button class="headerButton" id="searchButton">Search</button>
                <div id="headerButtons">
                <?php
                        include("headButts.php");
                 ?>
            </div>
       </div>
    </header>
 	<form id="LoginForm" method='post' action="verifyLogin.php" >
            <div id="username">
            <label for="name">Username:</label>
            <input id="name" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="name" 
                   type="text" required="required" />
            </div>
            <br>

            <div>
            <label for="password">Password:</label>
            <input id="password" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="password" 
                   type="password" required="required" />
            </div><br>

            <input type="submit" value="SUBMIT" />
        </form>
	<button id="createButton" class="bttn" ><a href="createAccount.php">CREATE</a></button>
    <h1 id="searchHeader"></h1>
<div id="output"></div>
</body>
  
</html>