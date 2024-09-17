<?php
    require '../config/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_help_cards</title>
    <link rel="stylesheet" href="../public/css/update_help_center.css">
</head>
<body>
    <form method="POST" action="../src/create_help_cards.php" class="help_center">
        <br />
    <div class="form_topic">
            <h3 class="create_form_topic">Create a New Help Card</h3>
        </div><br />
        <div class="message_cage">
            <?php if(isset($_GET['message'])) { ?>
                <div class="message"><?php echo $_GET['message']; ?></div>
            <?php } ?>
        </div><br />
        <div class="form_group">
            <label for="help_name">Name of the Help Card</label><br />
            <input type="text" class="form_input" name="help_name" required>
        </div><br />
        <div class="form_group">
            <label for="help_name_description">Help Card Name Description</label><br />
            <input type="text" class="form_input" name="help_name_description" required>
        </div><br />
        <div class="form_group">
            <label for="help_description">Help Description</label><br />
            <textarea type="text" class="form_input_textarea" name="help_description" required></textarea>
        </div><br />
        <div class="btn">
            <button name="submit" type="submit" class="submit_btn">Create</button>
        </div>
           

    </form>
</body>
</html>