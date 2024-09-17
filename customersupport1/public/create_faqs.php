<?php
    require '../config/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_FAQs</title>
    <link rel="stylesheet" href="../public/css/update_help_center.css">
</head>
<body>
    <form method="POST" action="../src/create_faqs.php" class="help_center">
        <br />
        <div class="form_topic">
            <h3 class="create_form_topic">Enter a New Customer FAQ</h3>
        </div><br />
        <div class="message_cage">
            <?php if(isset($_GET['message_faq'])) { ?>
                <div class="message"><?php echo $_GET['message_faq']; ?></div>
            <?php } ?>
        </div><br />
        <!-- <div class="form_group">
            <label for="help_name">Name of the Help Card</label><br />
            <input type="text" class="form_input" name="help_name" required>
        </div><br /> -->
        <div class="form_group">
            <label for="faq_name">Question</label><br />
            <input type="text" class="form_input" name="faq_name" required>
        </div><br />
        <div class="form_group">
            <label for="faq_answer">Answer</label><br />
            <textarea type="text" class="form_input_textarea" name="faq_answer" required></textarea>
        </div><br />
        <div class="btn">
            <button name="submit" type="submit" class="submit_btn">Create</button>
        </div>
           

    </form>
</body>
</html>