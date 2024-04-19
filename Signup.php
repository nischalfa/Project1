
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <h2>Guitar Store</h2>
    <link rel="stylesheet" href="Css/Signup.css">
</head>
<div class="nav">
    <ul>
      <li> <a href="/Project1/Index.php">Home</a></li>
      <li><a href="/Project1/Product.php">Product</a></li>
      <li><a href="/Project1/AboutUs.php">AboutUs</a></li>
</ul>
    </div>
    <br>
<body>
      <form action="./Action/Sign_up.php" id="signup-form" method="post">
        
      <h1>SignUp</h1>
            <label for="Full_Name">FullName:</label>
            <input type="text" name="Full_Name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="confirmPassword" required><br><br>
 </label><br><br>
            <button type="submit">Create</button><br><br>
            <p>Already have an account? <a href="Login.php">Login here</a></p>
  </form>
</body>