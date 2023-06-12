<?php
    require 'head.php';
    require 'config.php';
?>
<link rel="stylesheet" href="css/cart.css">
<!-- icons---- -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
<!-- ------- -->
<?php
    $uname = $_SESSION["usename"];
    $sql = "SELECT * FROM cart WHERE c_name = '$uname'";
    $result = $conn->query($sql);
?>
<body>
    <div class="section-p1" id="cart">
        <table width="100%">
            <thead>
                <tr>
                    <td>books</td>
                    <th>product</th>
                    <td>price</td>
                    <td>quantity</td>
                    <td>total</td>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $ftiotal = 0; 
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $id = $row["cartID"];
                            $price = $row["price"];
                            $quantity = $row["Quantity"];
                            $total = $price * $quantity;
                            $ftiotal = $total+$ftiotal;



                ?>
                            <form method="post" action="updatecart.php">
                            <input type="hidden" name="book_id" value="<?php echo $row["BID"];?>">
                            <tr>
                                <td><img src="<?php echo $row["image"]; ?>"></td>
                                <td><?php echo $row["book_name"]; ?></td>
                                <td class="price"><?php echo $price; ?></td>
                                <td><input type="number" name="quantity" value="<?php echo $quantity; ?>" min="1" class="quantity-input" onchange="calculate(this)"></td>

                                <td class="total">Rs.<?php echo $total; ?></td>
                                <input type="hidden" name="total" value="<?php echo $total; ?>">

                                <td><input type="submit" value="update" ><td>
                                <td><a href="delet.php?id=<?php echo $id; ?>"><i class="uil uil-trash-alt delett"></i></a></td>
                                
                            </tr>
                            </form>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="subtotal">
        <h3>cart totals</h3>
        <div>
            <form action="final_cart.php" method="post" >
                <table>
                    <tr>
                        <td>cart sub total</td>
                        <td id="cart-subtotal">Rs.<?php echo $ftiotal; ?></td>
                    </tr>
                    <tr>
                        <td>shipping</td>
                        <td>free</td>
                    </tr>
                    <tr>
                        <td><strong>total</strong></td>
                        <td><strong id="cart-total">Rs.<?php echo $ftiotal; ?></strong></td>
                        <input type="hidden" name="ftotal" value="<?php echo $ftiotal; ?>">
                    </tr>
                </table>
                <button class="normal">Checkout</button>
            </form>
        </div>
    </div>
</body>

<script>
    function calculate(input) {
        var row = input.parentNode.parentNode;
        var price = parseFloat(row.querySelector(".price").innerHTML);
        var quantity = parseInt(input.value);
        var total = price * quantity;

        row.querySelector(".total").innerHTML = 'Rs.' + total.toFixed(2);
        updateCartTotal();
    }

    function updateCartTotal() {
        var cartSubtotal = 0;
        var cartItems = document.querySelectorAll("#cart tbody tr");

        cartItems.forEach(function(item) {
            var total = parseFloat(item.querySelector(".total").innerHTML.replace('Rs.', ''));
            cartSubtotal += total;
        });

        document.getElementById("cart-subtotal").innerHTML = 'Rs.' + cartSubtotal.toFixed(2);
        document.getElementById("cart-total").innerHTML = 'Rs.' + cartSubtotal.toFixed(2);
    }
</script>

<?php
    require 'foot.php';
?>
