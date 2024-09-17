<?php
    include '../config/connection.php';
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/help.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/help_center.css"> -->
    <title>Document</title>
</head>
<body>
    <div class="top">
        Navbar
    </div>
	
	<div class="help_picture">
        <img src="./images/party.svg" alt="cover">
    </div>
	
	<div class="salutation">
        <h1 class="salute">How can we help you?</h1>
    </div>
	
	<div class="help_cards">
        <div class="card_couple">
            <div class="hcard1">
                <div class="icon">
                    <i class='bx bxs-cog'></i>
                </div>
                <div class="discription">
                    <div class="topic">
                        <h4 class="help_topic">Getting Started</h4>
                    </div>
                    <div class="topic_discription">
                        <a class="topic_discr" href="#">Get started fast with EventsLab and user account setup instructions.</a>
                    </div>
                </div>
            </div>
            <div class="hcard2">
                <div class="icon">
                    <i class='bx bxs-group'></i>
                </div>
                <div class="discription">
                    <div class="topic">
                        <h4 class="help_topic">User Account</h4>
                    </div>
                    <div class="topic_discription">
                        <a class="topic_discr" href="#">Managing user account privileges and updating information.</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_couple">
            <div class="hcard1">
                <div class="icon">
                    <i class='bx bx-code' ></i>
                </div>
                <div class="discription">
                    <div class="topic">
                        <h4 class="help_topic">Customization Options</h4>
                    </div>
                    <div class="topic_discription">
                        <a class="topic_discr" href="#">Get customized our services to make your event unique.</a>
                    </div>
                </div>
            </div>
            <div class="hcard2">
                <div class="icon">
                    <i class='bx bxs-credit-card' ></i>
                </div>
                <div class="discription">
                    <div class="topic">
                        <h4 class="help_topic">Payment Gateways</h4>
                    </div>
                    <div class="topic_discription">
                        <a class="topic_discr" href="#">Learn how our payment gateways work, and how to ensure security and hassle-freeness for your transactions.</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_couple">
            <div class="hcard1">
                <div class="icon">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="discription">
                    <div class="topic">
                        <h4 class="help_topic">Security Options</h4>
                    </div>
                    <div class="topic_discription">
                        <a class="topic_discr" href="#">Discover our top security measures and best practices to keep your account safe.</a>
                    </div>
                </div>
            </div>
            <div class="hcard2">
                <div class="icon">
                    <i class='bx bxs-gift'></i>
                </div>
                <div class="discription">
                    <div class="topic">
                        <h4 class="help_topic">System Features</h4>
                    </div>
                    <div class="topic_discription">
                        <a class="topic_discr" href="#">Get to know the essential features we provide to achieve your goals.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="salutation">
        <h1 class="salute">Frequently Asked Questions</h1>
    </div> 
	
    <div class="faq">
        <div class="dropdown">
        <?php
            $query = "SELECT * FROM cust_faq";
            $result = mysqli_query($conn, $query);

            if($result==true) {
                while($row = mysqli_fetch_assoc($result)) {
                    $faq_id=$row['faq_id'];
                    $payment_method=$row['payment_method'];
                    $refund_process=$row['refund_process'];
                    $booking_confirmation=$row['booking_confirmation'];
                    $sp_cancel_event=$row['sp_cancel_event'];
                    $sp_direct_contact=$row['sp_direct_contact'];
                    $booking_changing_after_payment=$row['booking_changing_after_payment'];
                    $ability_to_see_ratings=$row['ability_to_see_ratings'];
                    $leaving_feedback=$row['leaving_feedback'];
                    }
                }

                ?>   
                   
            <button class="dropbtn">
                How can I make payments for the services I booked on EventsLab?
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropbtn_answer"><?php echo $row['payment_method']; ?></div>
            <br />
            <button class="dropbtn">
                Can I get a refund if I need to cancel my booking? If yes, what is the process?
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropbtn_answer"><?php echo $row['refund_process']; ?></div>
            <br />
            <button class="dropbtn">
                How do I know that my payment has been received and my booking has been confirmed?
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropbtn_answer"><?php echo $row['booking_confirmation']; ?></div>
            <br />
            <button class="dropbtn">
                What happens if the service providers cancels on the day of the event?
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropbtn_answer"><?php echo $row['sp_cancel_event']; ?></div>
            <br />
            <button class="dropbtn">
                How can I contact the service provider directly if I have any specific requests or questions?
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropbtn_answer"><?php echo $row['sp_direct_contact']; ?></div>
            <br />
            <button class="dropbtn">
                Can I make changes to my booking after I have already made the payment?
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropbtn_answer"><?php echo $row['booking_changing_after_payment']; ?></div>
            <br />
            <button class="dropbtn">
                Will I be able to see the service provider's reviews and ratings before making a booking?
                <i class=bx bx-chevron-down></i>
            </button>
            <div class="dropbtn_answer"><?php echo $row['ability_to_see_ratings']; ?></div>
            <br />
            <button class="dropbtn">
                How can I leave feedback or a review after my event is over?
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropbtn_answer"></div>
        </div>
              
    </div><br />
        
        
    <div class="salutation">
        <h1 class="salute">Didn't find any answer? Contact us.</h1>
    </div>
    <script>
            const dropbtn = document.querySelectorAll('.dropbtn');

            dropbtn.forEach(function(button) {
                button.addEventListener('click', function() {
                    const dropbtn_answer = this.nextElementSibling;
                    if(dropbtn_answer.style.display === 'block') {
                        dropbtn_answer.style.display = 'none';
                    } else{
                        dropbtn_answer.style.display = 'block';
                    }
                });
            });	
        </script>

    <div class="contact_form">

    <form action="../src/submit-article.php" class="submit-article" method="POST">
                    <div class="flex">
                    <label for="email" class="form">Email</label>
                    <input type="text" class="insert" name="cust_email" required>
                    </div><br />
                    <div class="flex">
                    <label for="forum_subject" class="form">Subject</label>
                    <input id="tags" type="text" class="insert" name="forum_subject"></textarea>
                    </div><br />
                    <div class="flex">
                    <label for="forum_message" class="form">Message</label>
                    <textarea id="content" name="forum_message" required></textarea>
                    </div><br />
                    <div class="flex">

                    <!-- <input type="submit" class="button" value="SUBMIT"> -->
                    </div><br /><br />
                    <!-- <input type="checkbox" class="mark">Save and submit to publish<br /><br /> -->
                    <div class="two-buttons">
                    <div class="newArticle">
                        <button class="button" type="submit" name="submit" value="Submit">Send</button>
                        
                    </div>
                    </div>
                </form>
    </div>

    <div class="footer">
        put footer seperately.
    </div>

</body>
</html>