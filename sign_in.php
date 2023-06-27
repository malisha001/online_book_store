<?php 
    include_once 'head.php';
?>
<link rel="stylesheet" href="css/sign in.css">
<!-- icons---- -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
<!-- ------- -->
<body>
    <div class="mainpart">
        <div class="containerss">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>

                    <form action="sign_in_connect.php" method="post">
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" name="uid">
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <p id="error5"></p>
                        <div class="input-field">
                            <input type="password" placeholder="Enter your password" name="pwd1">
                            <i class="uil uil-padlock icon"></i>
                            
                        </div>
                        <p id="error6" ></p>
                        <!-- <div class="forgot">
                            <a href="#" class="text">Forgot password?</a>
                        </div> -->
                        <div class="input-field button">
                            <input type="submit" value="login now">
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="sign_up.php" class="text signup-text">signup now</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/sign_in.js"></script>
<?php 
    include_once 'foot.php';
?>