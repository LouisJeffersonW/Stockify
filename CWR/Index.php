<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>CWR</h1>
        </div>
        <div class="login-container">
            <h2><b>LOG IN</b></h2>
            <form action="login.php" method="post">
                <div class="form-group">
                   <b> <label for="username">Username:</label></b>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <b><label for="password">Password:</label></b>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p class="signup-text">Belum punya akun? <a href="register.php">Signup di sini</a></p>
        </div>
    </div>
</body>
</html>
