const closeButton = document.getElementById("nav-close");
const navMenu = document.querySelector(".sidebar");
const navToggle = document.getElementById("nav-toggle");

closeButton.addEventListener("click", function () {
  sidebar.classList.add("active"); // Show the sidebar
  document.body.classList.add("sidebar-open");
});

// Open the nav menu when the hamburger (menu) icon is clicked
navToggle.addEventListener("click", function () {
  sidebar.classList.remove("active"); // Hide the sidebar
  document.body.classList.remove("sidebar-open");
});
