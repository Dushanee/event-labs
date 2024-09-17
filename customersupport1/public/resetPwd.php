<!doctype html>
<html>
    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" href="../public/css/loginFront.css">
    </head>
    <body>
        <div class="reset-field">
            <div class="reset-card">
                <div class="reset-title">
                    <h2 class="Password Reset">Reset Password</h2>
                </div><br />
                <div class="reset-cage">
                    <label for="email" class="reset-label">Email</label>
                    <input type="text" class="reset-input" placeholder="Enter your email"><br /><br />
                    <label for="new_pwd" class="reset-label">New Password</label>
                    <input type="password" class="reset-input" placeholder="Enter your new password"><br /><br />
                    <label for="re_pwd" class="reset-label">Confirm New Password</label>
                    <input type="password" class="reset-input" placeholder="Re-enter your new password"><br /><br />
                    <form action="../src/resetpwd.php" class="reset-button">
                        <input type="submit" class="resetpwdbutton" value="Reset Password">
                    </form>
                </div><br /><br />
                <div class="reset-backlink">
                    <a href="../public/loginFront.php" class="go-back">Go back to Login</a>
                </div>
            </div>
        </div>
    </body>
</html>