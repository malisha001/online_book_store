<?php
require 'head.php'
?>
    <link rel="stylesheet" href="css/editinfo.css">

<body>
   <div class="full_container"> 
   <div class="midbanner">
    <img src="image/book copy.jpg" alt="banner" style="width:100%">  
<div class="line-breaks">
<div class="form_container">
  <div class="vertical-line"></div></div>
</div >
       
        <div class="line-breaks"></div></div></div>

        <div>
            <p class="editinfo">-Edit info-</p>
        </div>

        
        <form class="form">

                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" required>

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" required><br><br>

                <label for="display-name">Display Name:</label>
                <input type="text" id="display-name" name="display-name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

  <div class="horizline"></div>

        <div>
            <p class="pchange">-Password Change-</p>
        </div>

        <div class="pword"><label for="current-password">Current Password:</label><br>
        <input type="password" id="current-password" name="current-password" required><br><br>

        <label for="new-password">New Password:</label><br>
        <input type="password" id="new-password" name="new-password" required><br><br>

        <label for="confirm-new-password">Confirm New Password:</label><br>
        <input type="password" id="confirm-new-password" name="confirm-new-password" required><br>

 
    <div class="button-container"><input type="submit" value="Confirm"><tab>
    <input  type="reset" value="Reset"></div>
</div>
  
</form>
</div>
</div>
<div class="midbanner" >
    <div class="dash_container">
    <div class="board"><p href="#" class="linkno-underline" onclick="myFunction()">Dashboard</p></div>
        
        <div class="ordr"><p1 href="#" class="linkno-underline" onclick="myFunction()">Orders</p2></div>
       
        <div class="pre"><p3 href="#" class="linkno-underline" onclick="myFunction()">Pre Orders</p3></div>
       
        <div class="whis"><p4 href="#" class="linkno-underline" onclick="myFunction()">Wishlist</p4></div>
        
        <div class="address1"><p5 href="#" class="linkno-underline" onclick="myFunction()">Addresses</p5></div>
    </div>
</div>
</div></div>
</body>
<?php
require 'foot.php'
?>