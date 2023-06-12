<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Title of the page-->
    <title>Document</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/navbar style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--JS-->
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <div class="logodiv">
                <a href="main.html" aria-label="logo">
                    <img class="logo" src="image/logo.png" alt="The Bookshelf Boutique">
                </a>
            </div>

            <div class="navdiv">
                <nav>
                    <ul class="navlinks">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
            </div>

            <div class="searchbar">
                <form action="/action_page.php"> <!--book search php-->
                    <input type="search" placeholder="Search Books" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div class="headerbtn">
                <?php
                    if(isset($_SESSION["usename"])){
                        echo '<a class="cta" href="sign_up.html">'.$_SESSION["usename"].'</a>';
                        echo '<a class="cta" href="logout.php"><button class="headbuttons">Log out</button></a>';
                    }
                    else{
                        echo '<a class="cta" href="sign_up.html"><button class="headbuttons">Sign Up</button></a>';
                        echo '<a class="cta" href="sign_in.html"><button class="headbuttons">Login</button></a>';
                    }
                ?>
            </div>
        </header>
   </div>
</body>
</html>