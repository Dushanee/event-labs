<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help_form</title>
    <link rel="stylesheet" type="text/css" href="./css/help.css">
</head>
<body>

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
</body>
</html>