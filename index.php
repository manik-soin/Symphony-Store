<?php
session_start();
ob_start();
include("cartcount.php");
?>

<!DOCTYPE html>
  
<html>

  
<head>
    <title>Symphony Store</title>
  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
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
                        include("headButts.php");
                    ?>
         
            </div>
        </div>
    </header>
    <main>
    <aside id="leftCol">
        <h1 id= "CatHead">Category</h1>
        <?php
            include("catHeader.php");
        ?>

    </aside>
    <div id="rightCol">
    <a href="index.php" class="navLink">Home</a>
    <h1 id="searchHeader">All Music</h1>
    <div id="output">
        <?php
        
   include("displayMusic.php");
        ?>


    </div>
</div>
</main>

    
</body>
</html>