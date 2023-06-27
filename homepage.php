<?php
    require 'config.php';
    session_start();

    // Check if a search query is submitted
    if (isset($_GET['search_query'])) {
        $searchQuery = $_GET['search_query'];
        // Sanitize the search query
        $searchQuery = mysqli_real_escape_string($conn, $searchQuery);

        // Your SQL query to retrieve the searched books
        $sql = "SELECT * FROM book WHERE title LIKE '%$searchQuery%'";
        $result = mysqli_query($conn, $sql);

        // Check if the query executed successfully
        if ($result) {
            // Fetch the results
            $searchedBooks = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            // Query execution failed
            echo "Error: " . mysqli_error($conn);
            exit();
        }
    }

    $sql = "SELECT * FROM book";
    $result = mysqli_query($conn, $sql);

    // Check if the query executed successfully
    if ($result) {
        // Fetch all books
        $allBooks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        // Query execution failed
        echo "Error: " . mysqli_error($conn);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Bookshelf Boutique</title>
    <link rel="stylesheet" href="css/homepage.css">
    <script src="js/homepage.js" defer></script>

    <!--icon pack installation-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!---->
</head>

<body>

    <!--Header start-->
    <header>
        <a href="main.html"><img class="logo"  src="image/logo.png"></a>

        <div class="group">
            <ul class="navi">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="ridma/about.php">About</a></li>
                <!-- <li><a href="books.html">Books</a></li> -->
                <!-- <li><a href="ridma/contact.php">Contact</a></li> -->
            </ul>

            <div class="search">
                <span class="icon">
                    <!-- <ion-icon name="search-outline" class="searchbtn"></ion-icon> -->
                    <ion-icon name="close-outline" class="closebtn"></ion-icon>
                    <a href="cart.php"><ion-icon name="cart-outline" class="cartbtn"></ion-icon></a>
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
                                if($_SESSION["usename"]=="ayomal11@gmail.com"){
                                echo '<a class="cta" href="Admin/admin.php"><button class="headbuttons">view Admin</button></a>';
                                }
                                else{
                                    echo '<a class="cta" href="ridma/profile.php"><button class="headbuttons">view profile</button></a>';
                                }
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
        </div>
    </header>
    <!--Header end-->

    <!--body start-->
    <div class="main">
    <div class="headbanner">
            <img src="image/homepagebanner.png" alt="homepagebanner" style="width:100%;">
            <div class="centered">
                <h1>Find Your Next Book</h1>
                <p>Discover your next great book! Get personalized recommendations and see what's trending. A home for book lovers, app for the book nerds, and a store that helps you find anything and everything related to books.</p>
                
            </div>
        </div> 

        <div class="productscontainer">
            <div class="proheader">
                <h1 id="proheader">Books</h1>
            </div>
            <div class="searchbar">
                    <form action="homepage.php" method="GET" class="searchform">
                        <input type="text" name="search_query" class="searchinput" placeholder="Search books...">
                        <button type="submit" class="searchbtn"></button>
                    </form>
                </div>
                        </br></br></br>
            <div class="products">
                <?php if (isset($searchedBooks) && !empty($searchedBooks)): ?>
                    <?php foreach ($searchedBooks as $book): ?>
                        <form action="add_cart.php" method = "post">
                        <input type="hidden" name="book_id" value="<?php echo $book["BID"];?>">

                        <div class="product">

                            <div class="image">
                                <img src="<?php echo $book["image"]; ?>">
                                <input type="hidden" name="image" value="<?php echo $book["image"];?>">
                            </div>

                            <div class="bookinfo">
                                <h3><?php echo $book['title']; ?></h3>
                                <input type="hidden" name="book_name" value="<?php echo $book["title"];?>">

                                <p><?php echo $book['Author']; ?></p>

                                <p class="price"><?php echo "Rs." . $book['price']; ?></p>
                                <input type="hidden" name="book_price" value="<?php echo $book["price"];?>">
                                <input type="hidden" name ="quentity" value = "1" min = "1">
                            </div>
                            <div class="overlay">
                            <a href="cart.html"><button class="addtocart">Add to Cart</button></a>
                            </form>
                        </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?php foreach ($allBooks as $book): ?>
                        <form action="add_cart.php" method="post">
                        <input type="hidden" name="book_id" value="<?php echo $book["BID"];?>">
                        <div class="product">
                            
                            <div class="image">
                                <img src="<?php echo $book["image"]; ?>">
                                <input type="hidden" name="image" value="<?php echo $book["image"];?>">
                            </div>

                            <div class="bookinfo">
                                <h3><?php echo $book['title']; ?></h3>
                                <input type="hidden" name="book_name" value="<?php echo $book["title"];?>">

                                <p><?php echo $book['Author']; ?></p>
                                <p class="price"><?php echo "Rs." . $book['price']; ?></p>
                                <input type="hidden" name="book_price" value="<?php echo $book["price"];?>">
                                <input type="hidden" name ="quentity" value = "1" min = "1">
                               
                            </div>
                            <div class="overlay">
                            <a href="cart.html"><button class="addtocart">Add to Cart</button></a>
                            
                        </div>
                        </form>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
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
                    <li><a href="ridma/about.php">About</a></li>
                    <li><a href="ridma/FAQ.html">FAQ</a></li>
                    <li><a href="ridma/privacy.php">Privacy Policy</a></li>
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
