fetch("../Dummy_templet/Guitar_dummy.json")
  .then((response) => {
    if (!response.ok) {
      throw new Error("Failed to load dummy data");
    }
    return response.json();
  })
  .then((data) => {
    // Data loaded successfully
    // Now you can use the data to generate content on your webpage
    const productContainer = document.querySelector(".Products");

    data.products.forEach((product) => {
      // Create elements for each product
      const card = document.createElement("div");
      card.classList.add("card");

      const image = document.createElement("img");
      image.src = product.image;
      image.alt = product.title;
      image.classList.add("productsimages");

      const description = document.createElement("p");
      description.textContent = product.description;
      description.classList.add("products-description");

      const price = document.createElement("span");
      price.textContent = `NRS${product.price}`;
      price.style.color = "#2ecc71";

      const addToCartBtn = document.createElement("button");
      addToCartBtn.textContent = "Add to Cart";
      addToCartBtn.classList.add("addtocart");
      addToCartBtn.addEventListener("click", () => {
        // Handle adding the product to the shopping cart
      });

      // Append elements to the card
      card.appendChild(image);
      card.appendChild(description);
      card.appendChild(price);
      card.appendChild(addToCartBtn);

      // Append the card to the product container
      productContainer.appendChild(card);
    });
  })
  .catch((error) => {
    console.error("Error loading dummy data:", error);
  });
