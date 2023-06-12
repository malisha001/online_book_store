<?php
require 'head.php';
?>
    <link rel="stylesheet" href="css/payment.css">

<body>
    <div>
    <p class="select">Select Payment Method</p>
</div>

<div class="element-with-background" style="background: <?php echo $backgroundValue; ?>;">
<p class="recmethod">Recomended methods</p>

<div class="square"></div><br><br><br>
<div class="square2"></div>
<div>
<a href="main.html"><img class="cardicon" src="image/card.jpeg"></a>
<p type="radio"class="card">Credit/Debit Cards</p>
</div>

<div>
<a href="main.html"><img class="cashicon" src="image/cash.png"></a>
<p type="radio" class="cash">Cash On Delivery</p>
</div>

<div class="vertiline"></div>

<div>
    <p class="addcrd">Add Card</p>
</div>

<div class="container">
    <div class="credit-card-form">
      <form>
        <label for="card-holder-name">Card Holder's Name</label>
        <input type="text" id="card-holder-name" name="card-holder-name" required>

        <label for="card-number">Credit Card Number</label>
        <input type="text" id="card-number" name="card-number" required>

        <label for="expiry-date">Expiry Date</label>
        <input type="month" id="expiry-date" name="expiry-date" min="2023-06" required>

        <label for="cvc-number">CVC Number</label>
        <input type="text" id="cvc-number" name="cvc-number" required>

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

  <p class="sub">Subtotal</p>
  <div class="horizontal-line"></div><br>

  <p class="tot">Total Amount</p>
  <div class="horizline"></div>
</div>
</body>
<?php
require 'foot.php'
?>