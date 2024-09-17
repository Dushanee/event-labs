<?php
    include '../config/connection.php';

    $query_1="SELECT * FROM 'sp_faq'";
    $result_1=mysqli_query($conn, $query_1);
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
    </div><br />
    <div class="salutation">
        <h1 class="salute">Frequently Asked Questions</h1>
    </div> 
    <div class="faq">
        <div class="dropdown">
            
            <button class="dropbtn">
                How do I receive payments for the services I provide?
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropbtn_answer">Yes, you can request a refund if you need to cancel your booking. The refund policy may vary depending on the service provider and the terms and conditions of your booking. Please refer to the cancellation and refund policy stated on the service provider's profile or contact our customer support team for assistance.</div>
            <br />
            <button class="dropbtn">
                What is the process for getting paid for a particular booking?
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropbtn_answer">Yes, you can request a refund if you need to cancel your booking. The refund policy may vary depending on the service provider and the terms and conditions of your booking. Please refer to the cancellation and refund policy stated on the service provider's profile or contact our customer support team for assistance.</div>
            <br />
            <button class="dropbtn">
                How can I update my service offerings or pricing on the platform?
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropbtn_answer">Yes, you can request a refund if you need to cancel your booking. The refund policy may vary depending on the service provider and the terms and conditions of your booking. Please refer to the cancellation and refund policy stated on the service provider's profile or contact our customer support team for assistance.</div>
            <br />
            <button class="dropbtn">
                What happens if a buyer cancels their booking after I have already received payment?
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropbtn_answer">Yes, you can request a refund if you need to cancel your booking. The refund policy may vary depending on the service provider and the terms and conditions of your booking. Please refer to the cancellation and refund policy stated on the service provider's profile or contact our customer support team for assistance.</div>
            <br />
            <button class="dropbtn">
                Can I communicate directly with the buyer after I receive a booking request?
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropbtn_answer">Yes, you can request a refund if you need to cancel your booking. The refund policy may vary depending on the service provider and the terms and conditions of your booking. Please refer to the cancellation and refund policy stated on the service provider's profile or contact our customer support team for assistance.</div>
            <br />
            <button class="dropbtn">
                How can I view my reviews and ratings from past customers?
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropbtn_answer">Yes, you can request a refund if you need to cancel your booking. The refund policy may vary depending on the service provider and the terms and conditions of your booking. Please refer to the cancellation and refund policy stated on the service provider's profile or contact our customer support team for assistance.</div>
            <br />
            <button class="dropbtn">
                What happens if there is a dispute with a buyer over payment or services provided?
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropbtn_answer">Yes, you can request a refund if you need to cancel your booking. The refund policy may vary depending on the service provider and the terms and conditions of your booking. Please refer to the cancellation and refund policy stated on the service provider's profile or contact our customer support team for assistance.</div>
        </div>
    </div><br />

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

    <div class="salutation">
        <h1 class="salute">Didn't find any answer? Contact us.</h1>
    </div>

    <div class="contact_form">
    <form action="../src/submit-article.php" class="submit-article" method="POST">
                    <div class="flex">
                    <label for="email" class="form">Title</label>
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