<?php
                        session_start();

                        if (isset($_SESSION['UserId'])==true) {
                            echo "<button><a href=".'"Logout.php"'.">Logout</a></button>";
                            echo "<button id=".'"cartButton"'." class=".'"topBarButton"'."><a href=".'"cart.php"'.">Cart</a></button><span>".$_SESSION['CartCounter']."</span>";
                            
                        }else{
                            echo "<button id=".'"loginButton"'." class=".'"topBarButton"'."><a href=".'"Login.php"'.">Sign in</a></button>";
                            echo "<button id=".'"registerButton"'." class=".'"topBarButton"'." ><a href=".'"createAccount.php"'.">Register</a></button>";
                            echo "<button id=".'"cartButton"'." class=".'"topBarButton"'."><a href=".'"cart.php"'.">Cart</a></button><span>".$_SESSION['CartCounter']."</span>";

                        }
?>