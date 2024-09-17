<?php

require '../config/connection.php';

session_start();

?>

<!doctype html>
<html>
    <head>
        <title>Add or update Privacy Policy</title>
        <link rel="stylesheet" href="./css/privacypolicy.css">
    </head>
    <body>
        <div class="cage">
            <div class="add-cage">
                <form method = "POST" action="../src/add_policy.php">
                    <label for="title">Policy Title:</label>
                    <input type="text" name="title" id="title" required><br />

                    <label for="description">Policy Description:</label>
                    <textarea name="description" id="description" required></textarea><br />

                    <button type="submit" name="submit">Add Policy</button>
                </form>
            </div><br />
            <div class="add-cage">
                <form method = "POST" action="../src/search_policy.php">
                    <label for="search_term">Search Term:</label>
                    <input type="text" name="search_term" id="search_term" required>

                    <button type="submit" name="submit">Search Term</button>
                </form>
            </div><br />
            <!-- <div class="add-cage">
                <form method = "POST" action="../src/update_policy.php">
                    <label for="policy_id">Policy ID:</label>
                    <input type="text" name="policy_id" id="policy_id" required><br />

                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" required><br />

                    <label for="description">Description:</label>
                    <textarea name="description" id="description" required></textarea><br />

                    <button type="submit" name="submit">Update Policy</button>
                </form>
            </div><br /> -->
            <div class="add-cage">
                <form method="POST" action="../src/delete_policy.php">
                    <label for="policy_id">Policy ID:</label>
                    <input type="text" name="policy_id" id="policy_id" required><br />

                    <button type="submit">Delete Policy</button>
                </form>
            </div>
        </div>
    </body>
</html>