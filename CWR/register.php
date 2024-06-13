<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register.css">
</head>
<body class="register-page">
    <div class="container">
        <div class="header">
            <h1>CWR</h1>
        </div>
        <div class="register-container">
            <h2>Register</h2>
            <form action="register_process.php" method="post">
                <div class="form-group">
                    <b><label for="username">Username:</label></b>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <b><label for="email">Email:</label></b>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <b><label for="password">Password:</label></b>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <b><label for="confirm-password">Confirm Password:</label></b>
                    <input type="password" id="confirm-password" name="confirm_password" required>
                </div>
                <button type="submit">Register</button>
            </form>
            <p class="signup-text">Sudah punya akun? <a href="index.php">Log in</a></p>
        </div>
    </div>
</body>
</html>
