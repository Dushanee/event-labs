<?php
    require '../config/connection.php';

    $query="SELECT * FROM customer_FAQ";
    $result=mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Help Cards</title>
    <link rel="stylesheet" href="./css/update_help_center.css">
</head>
<body>
    <div class="update_section">
        <table class="help_center">

            <tr>
            <br />
        <div class="form_topic">
            <h3 class="create_form_topic">View Help Cards</h3>
        </div><br />
                <th>FAQ ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th id="to_insert_btns"></th>
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['faq_id']; ?></td>
                <td><?php echo $row['faq_name']; ?></td>
                <td><?php echo $row['faq_answer']; ?></td>
                <td id="btn-cage">
                    <a href="./view_single_cust_faq.php" class="table_btn">View</a>
                    <a href="./view_single_cust_faq.php" class="table_btn">Edit</a>
                    <a onclick="return confirm('Confirm deletion');" href="../src/delete.php" class="table_btn" id="delete_btn">Delete</a>
                </td>
            </tr>
            <?php   
                }
            ?>
        </table>
    </div>
</body>
</html>