var products = [
  { name: "WhiteGuitar", NRS: 2500 },
  { name: "Product 2", price: 29.99 },
  { name: "Product 3", price: 39.99 },
  { name: "Product 4", price: 49.99 },
];

// Function to perform product search
function searchProducts() {
  var searchTerm = document.getElementById("searchInput").value.toLowerCase();
  var searchResults = [];

  // Iterate through products array to find matches
  for (var i = 0; i < products.length; i++) {
    var product = products[i];
    var productName = product.name.toLowerCase();

    if (productName.includes(searchTerm)) {
      searchResults.push(product);
    }
  }

  // Display search results
  displaySearchResults(searchResults);
}

// Function to display search results
function displaySearchResults(results) {
  var searchResultsDiv = document.getElementById("searchResults");
  searchResultsDiv.innerHTML = "";

  if (results.length === 0) {
    searchResultsDiv.textContent = "No results found.";
  } else {
    for (var i = 0; i < results.length; i++) {
      var product = results[i];
      var productDiv = document.createElement("div");
      productDiv.textContent = product.name + " - $" + product.price.toFixed(2);
      searchResultsDiv.appendChild(productDiv);
    }
  }
}
