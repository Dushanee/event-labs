<?php
    require '../config/connection.php';

    $query="SELECT * FROM shopping_cart";
    $result=mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add to Cart</title>
        <link rel="stylesheet" href="./css/addtocart.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div style="height: 150px; background-color: pink;">For the top</div>
        <div class="cart-page">
            <table class="discr">
                <tr>
                    <th>Service</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <?php while($row=mysqli_fetch_assoc($result)) { ?>
                <tr>

                    <td>
                        <div class="cart-info">
                            <div class="image">
                                <img src=<?php echo $row['service_image']; ?> />
                        </div>
                            <div class="orderDetails">
                                <h3><?php echo $row['service_name']; ?></h3>
                                <small>Price: <?php echo $row['service_price']; ?></small><br />
                                <a onclick="return confirm('Confirm deletion');" href="delete.php" class="table_btn" id="delete_btn">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><?php echo $row['quantity']; ?></td>
                    <!-- <td>$50.00</td> -->
                </tr>
                <?php } ?>
            </table>
            <div class="total-price">
                <table class="calc">
                    <?php while($row=mysqli_fetch_assoc($result)) {
                        $subtotal = $row['service_price'] * $row['quantity'];
                        $total += $subtotal;
                        
                        $update_query="UPDATE shopping_cart SET subtotal=$subtotal, total=$total WHERE service_id=".$row['service_id'];
                        mysqli_query($conn, $update_query);
                    ?>
                    <tr>
                        <td>Subtotal</td>
                        <td><?php echo $row['subtotal']; ?></td>
                    </tr>
                    <!-- <tr>
                        <td>Tax</td>
                        <td>$35.00</td>
                    </tr> -->
                    <tr>
                        <td>Total</td>
                        <td><?php echo $row['total']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="buttons">
                <button type="button" onclick="header('./checkout.php')" style="width: 400px;">Continue to checkout</button>
            </div>
            <div class="orderInfo">
                <h3>Order Information</h3>
                <hr style="max-width: 47.5%; margin-left: 0;"/>
                <p class="cancelPolicy">Cancellation Policy</p><br />
                <a href="#" class="cancelPolicy" style="color: #4C4B84; text-decoration: none;">This is our example return policy which is everything
                    you need to know about our returns.
                </a>
                <hr style="max-width: 47.5%; margin-left: 0;"/>
                <a class="cancelPolicy" href="#" style="color: #4C4B84; text-decoration: none;">Other Options</a>
                <hr style="max-width: 47.5%; margin-left: 0;"/>
            </div>
        </div>
    </body>
</html>