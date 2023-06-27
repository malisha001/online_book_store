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
                    <span class="title">Registration</span>

                    <form action="sign_up_connect.php" method="post">
                        <div class="input-field">
                            <input id="fname" type="text" placeholder="Enter your name" name="fname" required>
                            <i class="uil uil-user"></i>
                            
                        </div>
                        <p id="error"></p>
                        <div class="input-field">
                            <input id="email" type="text" placeholder="Enter your email" name="mail" required pattern="[a-z0-9._%+-]+@[a-z0.9.-]+\.[a-z]([^\s]){2,}$">
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <p id="error1"></p>
                        <div class="input-field">
                            <input id="num" type="text" placeholder="Enter your phone number" name="pnumber" required pattern="[0-9]{10}$">
                            <i class="uil uil-phone"></i>
                        </div>
                        <p id="error2"></p>
                        <div class="input-field">
                            <input id="pswd" type="password" placeholder="Enter your password" name="pswd" required>
                            <i class="uil uil-padlock icon"></i>
                            
                        </div>
                        <p id="error3"></p>
                        <div class="input-field">
                            <input id="cpwd" type="password" placeholder="confirm password" name="cpasswd" required>
                            <i class="uil uil-padlock icon"></i>
                            
                        </div>
                        <p id="error4"></p>
                        <!-- <div class="forgot">
                            <a href="#" class="text">Forgot password?</a>
                        </div> -->
                        <div class="input-field button">
                            <input id="btn1" type="submit" value="register now">
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">member?
                            <a href="sign_in.php" class="text signup-text">sign in now</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/sign_up.js"></script>
<?php 
    include_once 'foot.php';
?>
