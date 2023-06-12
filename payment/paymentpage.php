<?php
    require '../config.php';
    session_start();
?>
<?php
    $uname = $_SESSION["usename"];
    $sql = "SELECT * FROM final_cart WHERE c_name = '$uname'";
    $totals = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Bookshelf Boutique</title>
    <link rel="stylesheet" href="pstyle.css">
    <script src="pscript.js" defer></script>

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
                    <a href="../cart.php"><ion-icon name="cart-outline" class="cartbtn"></ion-icon></a>
                    <ion-icon name="person-outline" class="userbtn" onclick="toggleMenu()"></ion-icon>
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
                                echo '<a class="cta" href="logout.php"><button class="headbuttons">log out</button></a>';
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

    <div class="paymentcontainer">
        <div class="paymentpagebanner">
            <div class="paymentform">
                <form action="insert_payment.php" method="post">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">billing address</h3>
            
                            <div class="inputBox">
                                <span>email :</span>
                                <h3><?php echo $_SESSION["usename"] ?></h3>
                            </div>
                            <div class="inputBox">
                                <span>address :</span>
                                <input type="text" placeholder="street line 01" name="strln1">
                                <input type="text" placeholder="street line 02" name="strln2">
                            </div>

            
                        </div>
            
                        <div class="col">
                            <h3 class="title">payment</h3>
                            
                            <div class="inputBox">
                                <span>Total Amount :</span>
                                <?php $row = mysqli_fetch_assoc($totals) ?>
                                <h3 name="total">RS. <?php echo $row["final_payment"];?></h3>
                                <input type="hidden" name="T_payment" value="<?php echo $row["final_payment"];?>">
                            </div>

                            <div class="inputBox">
                                <span>cards accepted :</span>
                                <img src="content/card_img.png" alt="card-logos">
                            </div>
                            <div class="inputBox">
                                <span>name on card :</span>
                                <input type="text" placeholder="mr. john deo" name="cardholder_name">
                            </div>
                            <div class="inputBox">
                                <span>credit card number :</span>
                                <input type="number" placeholder="1111-2222-3333-4444" name="card_number">
                            </div>
                            <div class="inputBox">
                                <span for="months">exp month :</span>
                                <select id="months" name="months">
                                    <option value="january">january</option>
                                    <option value="february">february</option>
                                    <option value="march">march</option>
                                    <option value="april">april</option>
                                    <option value="may">may</option>
                                    <option value="june">june</option>
                                    <option value="july">july</option>
                                    <option value="august">august</option>
                                    <option value="september">september</option>
                                    <option value="october">october</option>
                                    <option value="november">november</option>
                                    <option value="december">december</option>
                                </select>
                            </div>
            
                            <div class="flex">
                                <div class="inputBox">
                                    <span>exp year :</span>
                                    <input type="number" min="2023" placeholder="2023" name="year">
                                </div>
                                <div class="inputBox">
                                    <span>CVV :</span>
                                    <input type="text" placeholder="123" name="cvv">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="proceed to checkout" class="submit-btn">
                </form>
            </div>
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