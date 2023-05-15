<link rel="stylesheet" type="text/css " href="<?php echo BASEURL ?>/public/css/customer_view.css">
<link rel="stylesheet" type="text/css " href="<?php echo BASEURL ?>/public/css/customer_view.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>


    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="<?php echo BASEURL ?>/images/logo1.png" alt="logo">
                    <h2>Events
                        <span class="logo-colour">Lab</span>
                    </h2>
                </div>
                <div class="close" id="close-btn"><span class="material-symbols-rounded">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="<?php echo BASEURL ?>/adminFunction/admin"><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/customer" ><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Customers</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/service"><span class="material-symbols-rounded">
                        storefront
                    </span>
                    <h3>Service Providers</h3>
                </a>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/orders"><span class="material-symbols-rounded">
                        order_approve
                    </span>
                    <h3>Orders</h3>
                </a>
                <a href="" class="active"><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Verify Users</h3>
                    <span class="message-count">31</span>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Messages</h3>
                    <span class="message-count">31</span>
                </a>


                <a href="<?php echo BASEURL ?>/adminFunction/packages"><span class="material-symbols-rounded">
                        inventory_2
                    </span>
                    <h3>Packages</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        payments
                    </span>
                    <h3>Payments</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        summarize
                    </span>
                    <h3>Reports</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>


                <a href="<?php echo BASEURL ?>/welcome/signout"><span class="material-symbols-rounded">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
        </aside>

        <!-- ------- end of side bar ----- -->
          <div class="left-container">

<main>
    <div class="recent-order">
<div class="view-form-col-50 ">
            <h1>Service Provider Details</h1>

    

            <!-- -------orders table----- -->



            <div class="view-form">
                <form action="<?php echo BASEURL ?>/user/editSp" method="post">
                    <?php
                    while ($row = $data['result']->fetch_assoc()) {
                        $spId = $row['sp_id'];
                        $spEmail = $row['sp_email'];

                        echo "<label >Supplier ID</label>";
                        echo "<input type='text'  name='sp_id' value='$row[sp_id]' readonly>";

                        echo "<label >Name</label>";
                        echo "<input type='text'  name='sp_name' value='$row[sp_name]'>";

                        echo "<label >Email Address</label>";
                        echo "<input type='text'  name='sp_email' value='$row[sp_email]'>";
                        echo "<br>";
                        echo "<br>";
                        echo "<label >Business Document</label>";
                        
                        echo "<a href=" . BASEURL . "/public/" . $row["document"] . " class ='button-update'> View Document </a> ";


                    echo "<br>";

                        echo "<label>Verification Status</label>";
                        echo " <select name='status'>";
                        echo "<option  value='0'" . ($row['status'] == 0 ? "selected='selected'" : "") . ">Not verified</option>";
                        echo "<option  value='1'" . ($row['status'] == 1 ? "selected='selected'" : "") . ">Verified</option>";
                        echo "</select>";

                        // echo " <a href=" . BASEURL . "/user/sendmail/" . $row["cust_email"]  . "> Send mail </a> ";
                        // echo"<label >Birthday</label>";
                        // echo"<input type='date'  name='birthday' value=' $row[birthday] '>";
                    };
                    echo "<button class='button-update'  onclick=\"return confirm('Are you sure you want to update this user?' )\">Update</button></a>";
                    ?>

                    <br>
                    <div class="col">
                        <br>
                        <!-- <button type="submit" class="login-btn btn-primary btn">Update</button> -->
                    </div>
                </form>


                <br>

                <?php
                while ($row = $data['result']->fetch_assoc()) {
                    echo " <a href=" . BASEURL . "/user/sendmail/" . $row["cust_email"]  . "> Send mail </a> ";
                }
                ?>


            </div>


            <div class="col">
                <br>
                <a href="<?php echo BASEURL ?>/user/verify">
                    <button type="submit" class="login-btn btn-primary btn">Back</button></a>
            </div>


        </main>


            </div>
    





        <div class="right-container">
 
       
        <div class="view-form-col-50 ">
        <div class="view-form">

        <form  action="<?php echo BASEURL ?>/user/customMail" method="post">
        <h1>Send Email</h1>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Sent to :</label>
                </div>
                <div class="col-75"><?php
                echo "<input type='text' name='cust_email' value='$spEmail'>";
                echo "<input type='hidden' name='id' value='$spId'>";
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Subject</label>
                </div>
                <div class="col-75">
                    <input type="text" id="subject" name="subject" placeholder="Email Subject">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Body</label>
                </div>
                <div class="col-75">
                    <textarea id="lname" name="body" placeholder="email body goes here" rows="10"></textarea>
                </div>
            </div>

         

            <br>
            <div class="row">
            <button class="button-update" type="submit" value="Send Mail" onclick="return confirm('Are you sure you want to send the email')">Send Mail</button>

            </div>
        </form>
    </div>     </div> </div> 



</body>

</html>