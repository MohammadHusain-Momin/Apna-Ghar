<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-popup">
        <div class="form-box login">
            <h2>LOGIN</h2>
            <form action="check_login.php" method="POST">
                <div class="input-field">
                    <input type="email" name="txt-email" required placeholder=" " />
                    <span class="placeholder">Email</span>
                </div>
                <div class="input-field">
                    <input type="password" name="txt-password" required placeholder=" " />
                    <span class="placeholder">Password</span>
                </div>
                <button type="submit" name="submit">Log In</button> 
                <div class="bottom-link">
                    Don't have an account? <a href="register.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
