<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/head.css">
    <script src="js/headFoot.js" defer></script>

    <!--icon pack installation-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!---->

</head>
<body>
        <header>
        <a href="main.html"><img class="logo"  src="image/logo.png"></a>

        <div class="group">
            <ul class="navi">
                <li><a href="../index.html">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="books.html">Books</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <div class="search">
                <span class="icon">
                    <ion-icon name="close-outline" class="closebtn"></ion-icon>
                    <a href="../index.html"><ion-icon name="cart-outline" class="cartbtn"></ion-icon></a>
                    <ion-icon name="person-outline" class="userbtn" onclick="toggleMenu()"></ion-icon>
                    <!-- <ion-icon name="person-outline" class="userbtn" onclick="toggleMenu()"></ion-icon> -->
                </span>

                <div class="usermenu" id="submenu">
                    <div class="submenu">
                        <div class="userinfo">
                        <?php 
                                if(isset($_SESSION["usename"])){
                                    echo'<h4>'.'hellow '.$_SESSION["usename"].'</h4>';
                                }
                                else{
                                    echo "<h4> welcome,guset</h4>";
                                }
                            ?>
                        </div>
                        <hr>

                        <div>
                        <?php
                            if(isset($_SESSION["usename"])){
                                echo '<a class="cta" href="logoutt.php"><button class="headbuttons">log out</button></a>';
                            }
                            else{
                                echo '<a class="cta" href="sign_in.php"><button class="headbuttons">Sign In</button></a>';
                                echo '<a class="cta" href="sign_up.php"><button class="headbuttons">Sign Up</button></a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <ion-icon name="menu-outline" class="menubtn"></ion-icon>
        </div>

    </header>

</body>
</html>