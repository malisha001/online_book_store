<?php
    require '../config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Bookshelf Boutique</title>
    <link rel="stylesheet" href="astyle.css">
    <script src="ascript.js" defer></script>

    <!--icon pack installation-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!---->
</head>

<body>

    <!--Header start-->
    <header>
        <a href="main.html"><img class="logo"  src="content/logo.png"></a>

        <div class="group">
            <ul class="navi">
                <li><a href="../homepage.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="books.html">Books</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

            <div class="search">
                <span class="icon">
                    <ion-icon name="search-outline" class="searchbtn"></ion-icon>
                    <ion-icon name="close-outline" class="closebtn"></ion-icon>
                    <a href="cart.html"><ion-icon name="cart-outline" class="cartbtn"></ion-icon></a>
                    <ion-icon name="person-outline" class="userbtn" onclick="toggleMenu()"></ion-icon>
                </span>

                <div class="usermenu" id="submenu">
                    <div class="submenu">
                        <div class="userinfo">
                        <?php 
                                if(isset($_SESSION["usename"])){
                                    echo'<h4>'.'Hello '.$_SESSION["usename"].'</h4>';
                                }
                                else{
                                    echo "<h4>Welcome, guest</h4>";
                                }
                            ?>
                        </div>
                        <hr>

                        <div>
                        <?php
                            if(isset($_SESSION["usename"])){
                                echo '<a class="cta" href="logout.php"><button class="headbuttons">Log Out</button></a>';
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
        <div class="searchbar">
            <input type="search" placeholder="Search">
        </div>
    </header>

    <!--Header end-->
    <!--body start-->

    <div class="admincontainer">
        <div class="adminheader">
            <h1>Admin Dashboard</h1>
        </div>

        <div class="adminnav">
            <ul class="adminnav">
                <li><a href="admin.html">Dashboard</a></li>
                <li><a href="pages/adminbooks/index.php">Books</a></li>
                <li><a href="pages/adminorders/index.php">Orders</a></li>
                <li><a href="pages/adminusers/index.php">Users</a></li>
                <li><a href="pages/adminreviews/index.html">Reviews</a></li>
            </ul>
        </div>
    </div>

    <!--body end-->
    <!--Footer start-->

    <footer>
        <div class="container">
            <div class="aboutus">
                <h2>About Us</h2>
                <p>Welcome to our Online Bookstore, your destination for an expansive collection of books across various genres. Discover captivating reads, explore new authors, and indulge in the joy of reading. Join our community of book enthusiasts and embark on a literary adventure with us.</p>
                <ul class="social">
                    <li><a href="https://facebook.com" class="facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="https://twitter.com" class="twitter"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="https://instagram.com" class="instagram"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="https://linkedin.com" class="linkedin"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                </ul>
            </div>
            <div class="quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="help.html">Help</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="myacc">
                <h2>My Account</h2>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="orderhistory.html">Order History</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>© 2023 The Bookshelf Boutique. All Rights Reserved.</p>
    </div>
    <!--Footer end-->

</body>
</html>