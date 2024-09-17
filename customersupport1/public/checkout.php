<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="./css/addtocart.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <div style="color: pink; height: 150px;">For the top</div>
        <div class="live-chat">
            <button type="submit" class="liveChat" href="./chat.php">Live Chat</button>
        </div>
        <div class="checkout-fillings">
            <h2>CHECKOUT</h2>
        </div>
        <div class="checkout-contents">
            <div class="checkout-cage">
              <div class="border-div">
                <div class="heading-cage">
                    <h3 class="data-heading">1. PERSONAL DETAILS</h3>
                </div>
                <div class="data-cage">
                    <div class="label-cage">
                        <p><b>Name: </b></p>
                        <p><b>Address: </b></p>
                        <p><b>City: </b></p>
                        <p><b>Telephone: </b></p>
                        <p><b>Email: </b></p>
                    </div>
                    <div class="Answer-cage">
                        <p>Arosha Madhuwantha</p>
                        <p>Kundasale</p>
                        <p>Kandy</p>
                        <p>075-8907794</p>
                        <p>aroshainkandy@gmail.com</p>
                    </div>
                </div>
              </div>
               <div class="border-div"  style="margin-top: 2%;">
                <div class="heading-cage">
                    <h3 class="data-heading">2. BANK DETAILS</h3>
                </div>
                <div class="tocenter">
                <div class="form">
                    <form action="#paymentValidationpage">
                        <div class="labelbank">
                        <label for="cards">Please select your card:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="cards" id="cards">
                            <option value="visa">Visa</option>
                            <option value="master">Master</option>
                        </select>
                        </div>
                        <br />
                        <div class="for-rows">
                            <div class="cardnumber"><label for="card-number">Card Number</label></div>
                            <input type="text" id="card-number" name="card-number"></input><br />
                            <label for="card-holder">Card Holder's Name</label>
                            <input type="text" id="card-holder" name="card-holder"></input>
                        </div><br />
                        <div class="for-cols">
                            <div class="forcol-1">
                                <label for="expiry-date">Expiry date</label><br />
                                <input type="text" id="expiry-date" name="expiry-date"></input>
                            </div>
                            <div class="forcol-2">
                                <label for="cvv">CVV</label><br />
                                <input type="text" id="cvv" name="cvv"></input>
                            </div>
                        </div><br />
                        <div class="decision-buttons">
                            <button type="submit" class="cancel" href="./addtocart.php" style="width: 600px; margin-left: 0px;">CANCEL</button>
                            <button type= "submit" class="checkout" href="#payment-validation" style="width: 600px; margin-left: 0px;">CHECKOUT</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
          </div>
            <div class="summary-cage">
              <div class="border-div">
                <div class="cart-cage">
                    <div class="heading-cage" style="background-color: var(--opacityReduced);">
                        <h3 class="data-heading">IN YOUR CART</h3>
                        <a class="edit" href="./addtocart.php">Edit</a>
                    </div>
                    <div class="cart-data-cage">
                        <div class="cart-label-cage">
                            <p>Subtotal</p><br />
                            <p>Service Charges</p><br />
                            <p><b>Total</b></p>
                        </div>
                        <div class="cart-answer-cage">
                            <div class="numbers">
                            <p>Rs. 50,000.00</p><br />
                            <p>Rs. 0.00</p><br />
                            <p style="color: red"><b>Rs. 50,000.00</b></p>
                            </div>
                        </div>
                    </div>
                    <hr style="width: 70%; align: center; color: lightgray;" />
                </div>
                <div class="confirmed-data-cage">
                    <div class="confirmed-data-heading">
                        <h4 style="margin-left: 2%;">YOURS ON SAT, MARCH 4, 2023</h4>
                    </div>
                    <div class="confirmed-data">
                        <div class="confirmed-img-cage" style="margin-left: 2%">
                            <img class="confirmed-img" src="./images/weddingHall.jpg" />
                        </div>
                        <div class="confirmed-description">
                            <p class="service-name"><b>Hall Paradise - Araliya Guest House</b></p>
                            <p class="service-description">Volumed for 100 guests.<br />Free Parking<br />Free Wi-Fi<br />278/A, Colombo St, Kandy</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </body>
</html>