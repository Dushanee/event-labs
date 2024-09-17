<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>EventsLab Shopping Cart</title>
<link rel='stylesheet' href='css/style.css' type='text/css'/>
<script type="text/javascript" src="front.js" defer></script>
<link rel="stylesheet" href="./css/front.css">
<link rel="stylesheet" href="./css/footer.css">
</head>
<body>
<div id="navBar">
    <div class="navigator_background"></div>
    <div class="wrapper">

       <a class="aboutus p" id="a" href="../html/front.html" >Home</a>
       <a class="blog p" id="a" href="../html/second.html" >Blog</a>
       <a class="customerSpt p" id="a" href="../FrontUi/customerSupport2/front/loginFront.php">Customer Support</a>
       <!-- <a class="customerSpt p" id="a" href="../FrontUi/customersupport1/public/index.php">Customer Support</a> -->
       <!-- <a class="login p" id="a" href="../FrontUi/selectLogintype.html">Log In</a> -->
       <a class="login p" id="a" href="../html/reg_as.html">Log In</a>
       <a class="signup p" id="a" href="../html/selectUserType.html">Sign Up</a>
    </div>

   <!-- <div class="dropdown">
      <button class="dropbtn">
        <img src="images1/pull_down_2.ico">
      </button>
      <div class="dropdownContent">
         <a href="#">About Us</a>
         <a href="#">Blog</a>
         <a href="#">Customer Support</a>
         <a href="#">Log In</a>
         <a href="#">Sign Up</a>
      </div> 
   </div>
     -->
    <div>

        <img class="eventslab" src="images/logo.png" >
    </div>
   </div>
<div class="cart_included_cage">

<div class="page-name-h2">
	<h2 class="page_name">Your Event Cart</h2>   
</div>

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr class="cart_table_headings">
<td></td>
<td>SERVICE NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>SERVICES TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>

<div class="bottom-action-div">
	<div class="policy-div">
		<p class="cancelPolicy">Cancellation Policy</p><br />
        <a href="#" class="cancelPolicy" style="color: rgb(240, 79, 79); text-decoration: none;">This is our return policy which is everything you need to know about our returns.</a>
    	<hr style="max-width: 100%; margin-left: 0;"/>
        <a class="cancelPolicy" href="#" style="color: #4C4B84; text-decoration: none;">Other Options</a>
        <!--<hr style="max-width: 100%; margin-left: 0;"/>-->
	</div>
	<div class="policy-div2">
		<label for="" class="cart-action-button">
			<a class="cart-action-label-anchor" href="#">Continue Shopping</a>
		</label>
		<label for="" class="cart-action-button">
			<a class="cart-action-label-anchor" href="#">Continue to Checkout</a>
		</label>
	</div>
</div>


</div>
<div>

        <!-- <img class="eventslab" src="images/logo.png" > -->
    </div>
   </div>


      

   <div class="footer">
        <div class="footer_sub_div">
            <div class="footer_left_div_sub">
                <div class="left_div_img"><img src="./images/logo.png" alt="EventsLab logo" class="logo"></div>
                <div class="left_div_para">Make your dream event come true</div>
            </div>
        </div>
        <div class="footer_sub_div">
            <div class="mid_div_title"><b>Contact Us</b></div><br />
            <div class="mid_div_contents">
                <div class="mid_div_sub">
                    <img src="./images/footer_ringer_volume_32px.png" alt="phone" class="mid_div_img">
                    <p>+94 33 234 1249</p>
                </div>
                <div class="mid_div_sub">
                    <img src="./images/footer_secured_letter_32px.png" alt="mail" class="mid_div_img">
                    <p>eventslab@gmail.com</p>
                </div>
                <div class="mid_div_sub">
                    <img src="./images/footer_location_32px.png" alt="location" class="mid_div_img">
                    <p>UCSC Building Complex, Reid Avenue, Colombo 07</p>
                </div>
            </div>
        </div>
        <div class="footer_sub_div">
            <div class="right_div_title"><b>Follow us on social media</b></div>
            <div class="icon_cage_footer">
                <div class="right_div_icons">
                    <img src="./images/social media/icons8_facebook_32px.png" alt="facebook" class="right_div_img">
                    <img src="./images/social media/icons8_Instagram_32px.png" alt="instagram" class="right_div_img">
                    <img src="./images/social media/icons8_linkedin_circled_32px.png" alt="linkedin" class="right_div_img">
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_div">
        <p>copyrights reserved</p>
    </div>
    </div>

</body>
</html>