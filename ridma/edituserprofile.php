<?php 


include 'php/User.php';
include "connection.php";

?>

<?php
require 'head.php';

$user = getUserById($_SESSION["usename"], $connection);

?>
    <link rel="stylesheet" href="css/userprofile.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>


<div class="d-flex justify-content-center align-items-center vh-100">
    
    <form class="shadow w-450 p-3" 
          action="php/edit.php" 
          method="post"
          enctype="multipart/form-data">

        <h4 class="display-4  fs-1">Edit Profile</h4><br>
        <!-- error -->
        <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        
        <!-- success -->
        <?php if(isset($_GET['success'])){ ?>
        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" 
               class="form-control"
               name="fname"
               value="<?php echo $user['first_name']?>">
      </div>

      <div class="mb-3">
        <label class="form-label">User name</label>
        <input type="text" 
               class="form-control"
               name="uname"
               value="<?php echo $user['email']?>">
      </div>

      <!--<div class="mb-3">
        <label class="form-label">Profile Picture</label>
        <input type="file" 
               class="form-control"
               name="pp">
        <img src="upload/<?=$user['pp']?>"
             class="rounded-circle"
             style="width: 70px">
        <input type="text"
               hidden="hidden" 
               name="old_pp"
               value="<?=$user['pp']?>" >
      </div>-->
      
      <button type="submit" class="btn btn-primary">Update</button>
      <br><br>
      <a href="deleteProfile.php" class="btn btn-danger">Delete</a>
      <a href="profile.php" class="link-secondary">Home</a>
    </form>
</div>

      

</body>
<?php
require 'foot.php'
?>
