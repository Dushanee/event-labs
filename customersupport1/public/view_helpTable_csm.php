<?php
    require '../config/connection.php';

    $query="SELECT * FROM help";
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
                <th>Help ID</th>
                <th>Help Topic</th>
                <th>Help Topic Description</th>
                <th>Help Description</th>
                <th id="to_insert_btns"></th>
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['help_id']; ?></td>
                <td><?php echo $row['help_name']; ?></td>
                <td><?php echo $row['help_name_description']; ?></td>
                <td><?php echo $row['help_description'] ?></td>
                <td id="btn-cage">
                    <a href="./view_single_help.php" class="table_btn">View</a>
                    <a href="./view_single_help.php" class="table_btn">Edit</a>
                    <a onclick="return confirm('Confirm deletion');" href="delete.php" class="table_btn" id="delete_btn">Delete</a>
                </td>
            </tr>
            <?php   
                }
            ?>
        </table>
    </div>
</body>
</html>