<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar Shop Wishlist</title>
    <link rel="stylesheet" href="Css/wishlist.css">
  </head>
  <body>
    <div class="container">
      <h1>Guitar Shop Wishlist</h1>
      <ul class="wishlist" id="wishlist">
        <!-- Wishlist items will be added dynamically here -->
      </ul>
      <form class="add-item-form" id="add-item-form">
        <label for="item-name">Item:</label>
        <input type="text" id="item-name" name="item-name" />
        <label for="item-price">Price:</label>
        <input type="number" id="item-price" name="item-price" />
        <button type="submit">Add Item</button>
      </form>
    </div>

      <script src="Function/wishlist.js"></script>
  </body>
</html>
