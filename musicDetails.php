<?php
session_start();
ob_start();
$USER_ID=$_SESSION['DefaultUserId'];
if (isset($_SESSION['UserId'])==true) {
    $USER_ID=$_SESSION['UserId'];}
?>

<!DOCTYPE html>
  
<html>
  
<head>
    <title>Symphony Store</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="global.css">
     <script src='searchBar.js'></script>
</head>
  
<body>
    <header>
        <div class="searchForm">
          
                <input id="searchBar" name="search" type="search"  placeholder="Keyword(s)">
                <button class="headerButton" id="searchButton">Search</button>
                
                <div id="headerButtons">
                    <?php
                       include("headButts.php");
                    ?>
         
            </div> 
        </div>
    </header>
    <main>
    
    <div>
        <a href="index.php" class="navLink">Home</a>
     <?php
        $MUSIC_ID=$_GET['musicId'];
        echo " > <a href=".'"musicDetails.php?id='.$MUSIC_ID.'"'."class=".'"navLink"'.">".$MUSIC_ID."</a>";
        echo "<h1 id=".'"searchHeader"'."> ".$MUSIC_ID."</h1>";
        ?>
    
    <div id="output">
          <?php
          include("musicData.php");
        ?>

    </div>
</div>
</main>

    
</body>
</html>

