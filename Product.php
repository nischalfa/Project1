<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuitarStore</title>
    <link rel="stylesheet" href="Css/Product.css">
    <script src="Search.js" defer></script>
    <script src="https://kit.fontawesome.com/8c954f3ba6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="/Project1/Index.php">Home</a></li>
            <li><a href="/Project1/AboutUs.php">AboutUs</a></li>
            <li><input type="text" placeholder="Search Here"></li>
        </ul>
    </div>
    <main>
        <h1>Product-List</h1> 
        <div class="guitar-grid">
            <div class="guitar-card">
                <img src="pic/bass.jpg" alt="Guitar3">
                <div class="guitar-info">
                    <h3>Bass guitar</h3>
                    <p>NRS 4000 
                     <br>
                      Model 1
                        <br>
                        Lorem, ipsum.
                    </p>
                    <button>AddToCart</button>
                    
                </div>
            </div>
            <div class="guitar-card">
                <img src="pic/Guitar.jpg" alt="Guitar">
                <div class="guitar-info">
                    <h3>Accostic Guitar</h3>
                    <p>NRS 1500</p>
                    <br>
                      Model 2
                        <br>
                        Lorem, ipsum.
                    </p>
                    <button>AddToCart</button>
                </div>
            </div>
        </div>
        <div class="guitar-grid">
            <div class="guitar-card">
                <img src="pic/Electronics.jpg" alt="Guitar2">
                <div class="guitar-info">
                    <h3>Electric Guitar</h3>
                    <p>NRS 3000</p>
                    <br>
                      Model 1
                        <br>
                        Lorem, ipsum.
                    </p>
                    <button>AddToCart</button>
                </div>
            </div>
            <div class="guitar-card">
                <img src="pic/Ukelele.jpg" alt="Ukelele">
                <div class="guitar-info">
                    <h3>Ukelele</h3>
                    <p>NRS 2800</p>
                    <br>
                      Model 1
                        <br>
                        Lorem, ipsum.
                    </p>
                    <button>AddToCart</button>
                    
                </div>
            </div>
        </div>
        <div class="guitar-grid">
            <div class="guitar-card">
                <img src="pic/Item.jpg" alt="Item">
                <div class="guitar-info">
                    <h3>Blue Guitar</h3>
                    <p>NRS 1500</p><br>
                      Model 1
                        <br>
                        Lorem, ipsum.
                    </p>
                     <button>AddToCart</button>
                </div>
            </div>
            <div class="guitar-card">
                <img src="pic/Item2.jpg" alt="Item2">  
                <div class="guitar-info">
                    <h3>White Guitar</h3>
                    <p>NRS 2500</p>
                    <br>
                      Model 1
                        <br>
                        Lorem, ipsum.
                    <button>AddToCart</button>
                </div>
            </div>
        </div>
</main>
       <div class="added-products">
        <i class="fas fa-times"></i>
    </div>
    <div class="shopping-cart">
        <span class="items">0</span>
        <i class="fas fa-shopping-cart"></i>
    </div>
    <div class="Products">
         <script src="Function/Cart.js"></script>
       </div>  
</body>
</html>
