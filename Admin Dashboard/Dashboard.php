<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="#guitars">Guitars</a></li>
                <li><a href="#categories">Categories</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="guitars">
            <h2>Guitars</h2>
            <form id="guitar-form">
                <label for="guitar-name">Guitar Name:</label>
                <input type="text" id="guitar-name" name="guitar-name">
                <label for="category">Category:</label>
                <select id="category" name="category">
                    <!-- Options for categories will be added dynamically -->
                </select>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price">
                <label for="details">Details:</label>
                <textarea id="details" name="details"></textarea>
                <button type="submit">Add Guitar</button>
            </form>
            <div id="guitar-list">
                <!-- Guitar list will be displayed here -->
            </div>
        </section>

        <section id="categories">
            <h2>Categories</h2>
            <form id="category-form">
                <label for="category-name">Category Name:</label>
                <input type="text" id="category-name" name="category-name">
                <button type="submit">Add Category</button>
            </form>
            <div id="category-list">
                <!-- Category list will be displayed here -->
            </div>
        </section>
    </main>
    <script src="Dashboard.js"></script>
</body>
</html>
