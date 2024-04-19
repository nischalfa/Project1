<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="Css/LogIn.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="Action/LogIn_action.php" method="post">
             <!-- <form id="loginForm" action="./actions/login_action.php" method="POST"> -->
    <?php
    
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            echo"<p style='color:red;'>$error</p>"; 
        }
?>     
            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
				<label>Don't have an account?</label><a href="Signup.php"> Sign up here</a>
				
            </div>
        </form>
    </div>
</body>
</html>
