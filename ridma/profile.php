<?php
require 'head.php';

?>
<?php 
    // include 'php/User.php';
    // $user = getUserById($_SESSION['usename'], $conn);


 ?>
    <script src="js/homepage.js" defer></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-350 p-3 text-center">
    		<img src="upload/profile.png"
    		     class="img-fluid rounded-circle">
             
            <h3 class="display-4 "><?php echo $_SESSION["usename"]; ?></h3>
            <a href="edituserprofile.php" class="btn btn-primary">
            	Edit Profile
            </a>
             <!-- <a href="#" class="btn btn-warning">
                Logout
            </a> -->
		  </div>

      <div class="shadow w-350 p-4 text-center align-items-center" style="margin-left: 10px;">

          <a href="orderDetails.php" class="btn btn-primary">Order Details</a>
          <a href="../cart.php" class="btn btn-primary">Cart Details</a>
        
        
    		
		  </div>

      

    </div>

    

</body>

<?php
require 'foot.php'
?>


</html>

