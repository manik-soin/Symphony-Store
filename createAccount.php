<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CREATE ACCOUNT
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
    <h2>Create new account</h2>
 	<form id="createForm" action="create.php" method='post'>
            <div>
            <label for="name">Username:</label>
            <input id="name" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="name" placeholder="Desired Username" 
                   type="text" required="required" />
            </div><br>
            <div>
            <label for="password">Password:</label>
            <input id="password" placeholder="Desired Password" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" name="password" 
                   type="password" required="required" />
            </div><br>
            <input type="submit" value="CONFIRM" />
        </form>
	<button id="backButton" class="bttn" ><a href="Login.php">BACK</a></button>
    <h1 id="searchHeader"></h1>
<div id="output"></div>
</body>
  
</html>