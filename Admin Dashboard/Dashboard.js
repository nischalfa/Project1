// JavaScript code for adding dynamic behavior to the admin dashboard

// Mock data for guitars and categories (you can replace this with real data from a backend)
let guitars = [
  {
    id: 1,
    name: "Guitar 1",
    category: "Acoustic",
    price: 500,
    details: "Lorem ipsum dolor sit amet",
  },
  {
    id: 2,
    name: "Guitar 2",
    category: "Electric",
    price: 700,
    details: "Consectetur adipiscing elit",
  },
];

let categories = ["Acoustic", "Electric", "Bass", "Eukelele"];

// Function to initialize the dashboard
function initDashboard() {
  displayGuitars();
  displayCategories();
}

// Function to display guitars
function displayGuitars() {
  const guitarList = document.getElementById("guitar-list");
  guitarList.innerHTML = "";

  guitars.forEach((guitar) => {
    const row = document.createElement("div");
    row.innerHTML = `
            <div>NRS: ${guitar.id}</div>
            <div>Name: ${guitar.name}</div>
            <div>Category: ${guitar.category}</div>
            <div>Price: NRS${guitar.price}</div>
            <div>Details: ${guitar.details}</div>
            <button onclick="editGuitar(${guitar.id})">Edit</button>
            <button onclick="deleteGuitar(${guitar.id})">Delete</button>
        `;
    guitarList.appendChild(row);
  });
}

// Function to display categories
function displayCategories() {
  const categoryDropdown = document.getElementById("category");
  categoryDropdown.innerHTML = "";

  categories.forEach((category) => {
    const option = document.createElement("option");
    option.text = category;
    option.value = category;
    categoryDropdown.appendChild(option);
  });
}

// Function to add a new guitar
function addGuitar(event) {
  event.preventDefault();
  const form = event.target;
  const guitarName = form["guitar-name"].value;
  const category = form["category"].value;
  const price = form["price"].value;
  const details = form["details"].value;

  const newGuitar = {
    id: guitars.length + 1,
    name: guitarName,
    category: category,
    price: price,
    details: details,
  };

  guitars.push(newGuitar);
  displayGuitars();
  form.reset();
}

// Function to edit a guitar
function editGuitar(id) {
  // Implementation for editing a guitar
  console.log(`Edit guitar with ID NRS${id}`);
}
// Function to delete a guitar
function deleteGuitar(id) {
  // Find the index of the guitar with the given ID
  const index = guitars.findIndex((guitar) => guitar.id === id);

  // If the guitar is found, remove it from the array
  if (index !== -1) {
    guitars.splice(index, 1);
    displayGuitars(); // Update the displayed list of guitars
  } else {
    console.log(`Guitar with ID NRS${id} not found.`);
  }
}

// Function to add a new category
function addCategory(event) {
  event.preventDefault();
  const form = event.target;
  const categoryName = form["category-name"].value;

  categories.push(categoryName);
  displayCategories();
  form.reset();
}

// Initialize the dashboard when the page loads
window.addEventListener("load", initDashboard);
