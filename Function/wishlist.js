document.addEventListener("DOMContentLoaded", function () {
  const wishlist = document.getElementById("wishlist");
  const addItemForm = document.getElementById("add-item-form");

  addItemForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const itemName = document.getElementById("item-name").value;
    const itemPrice = document.getElementById("item-price").value;

    if (itemName && itemPrice) {
      const listItem = document.createElement("li");
      listItem.classList.add("item");
      listItem.textContent = `${itemName} - $${itemPrice}`;
      wishlist.appendChild(listItem);

      addItemForm.reset();
    } else {
      alert("Please enter item name and price.");
    }
  });
});
