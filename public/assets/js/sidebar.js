const hamBurger = document.querySelector(".toggle-btn");
const sidebar = document.querySelector("#sidebar");

// Check if sidebar state is stored in localStorage
const isSidebarExpanded = localStorage.getItem("sidebarExpanded") === "true";

// Set initial state based on localStorage
if (isSidebarExpanded) {
    sidebar.classList.add("expand");
}

hamBurger.addEventListener("click", function () {
    sidebar.classList.toggle("expand");

    // Store the state of the sidebar in localStorage
    localStorage.setItem("sidebarExpanded", sidebar.classList.contains("expand"));
});
