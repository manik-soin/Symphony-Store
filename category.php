<?php
session_start();
ob_start();
?>
<!DOCTYPE html> 
<html> 
<head>
    <title>Categorize Symphonies</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
     <link rel="stylesheet" href="global.css">
     <script src='searchBar.js'></script>
</head>
  
<body>
    <header>
        <div class="searchForm">
          
                <input type="search" name="search" id="searchBar" placeholder="Keyword(s)">
                <button class="headerButton" id="searchButton">Search!</button>

                <div id="headerButtons">
                    <?php
                        include("headButts.php");
                    ?>
         
            </div>
    
        </div>
    </header>
    <main>
    <aside id="leftCol">
        <h1 id= "CatHead">Categorize Symphonies</h1>
        <?php
            include("findCat.php")
        ?>
        

    

    </aside>
    <div id="rightCol">
    <a href="index.php" class="navLink">Home</a>
    
    
    <div id="output">
        <?php
            
            include("catOutput.php");
            
        ?>


    </div>
</div>
</main>

    
</body>
</html>