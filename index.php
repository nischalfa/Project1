<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuitarStore</title>
    <link rel="stylesheet" href="Css/index.css">
</head>
<body>
   <header>
      <h1>Guitar Store</h1>
</header>
  <div class="nav">
    <ul>
      <li> <a href="/Project1/Product.php">Product</a></li>
      <li><a href="/Project1/AboutUs.php">AboutUs</a></li>
      
      <?php if(isset($_SESSION['user_id'])){ ?>
        <a href="./Action/Log_out.php">Logout</a>
        <?php }else{ ?>
          
          <li><a href="/Project1/LogIn.php">LogIn</a></li>  
          <li><a href="/Project1/Signup.php">SignUp</a></li>
          <?php } ?>
</ul>
    </div>
        <div class="a">
           <b>Features Product</b>
</div>
<br>
<div>
<div class="Group">
  <img src="pic/Guitargroup.png" alt="GuitarGroup">
</div>
    <main>
      <div class="guitar">
          <img src="pic/Guitar.jpg" alt="Guitar">
          <h2>Acoustic Guitar</h2>
        </div>

      <div class="guitar">
        <!-- <a href="/Project1/Product.php"> -->
       <img src="pic/Electronics.jpg" alt="Guitar2">
        <h2>Electric Guitar</h2>
      </div>

      <div class="guitar">
        <img src="pic/bass.jpg" alt="Guitar3">
        <h2>Bass Guitar</h2>
      </div>
        <div class="Ukelele">
        <img src="pic/Ukelele.jpg" alt="Ukelele">
        <h2>Ukelele Guitar</h2>
      </div>
         <div class="box">
          <b>Top Catgories</b>
          <br>
          <div class="Item">
            <img src="pic/Item.jpg" alt="Item">
            <img src="pic/Item2.jpg" alt="Item2">       
      </div>
      </div>  

</body>
</html>