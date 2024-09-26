<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="form-popup show-popup">
        <div class="form-box signup">
            <h2>SIGNUP</h2>
            <form action="check_REGISTOR.php" method="POST">
                <div class="input-field">
                    <input type="text" name="txt-name" required placeholder=" " />
                    <span class="placeholder">Enter your Name</span>
                </div>
                <div class="input-field">
                    <input type="email" name="txt-email" required placeholder=" " />
                    <span class="placeholder">Enter your Email</span>
                </div>
                <div class="input-field">
                    <input type="tel" name="txt-phone" required placeholder=" " />
                    <span class="placeholder">Enter your Phone No</span>
                </div>
                <div class="input-field">
                    <input type="password" name="txt-password" required placeholder=" " />
                    <span class="placeholder">Create Password</span>
                </div>
                <div class="input-field">
                    <input type="password" name="txt-Copassword" required placeholder=" " />
                    <span class="placeholder">Confirm Password</span>
                </div>
                <button type="submit" name="submit">Sign Up</button>
                <div class="bottom-link">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
