document.addEventListener("DOMContentLoaded", () => {
  const dropdown = document.querySelector(".dropdown");
  const dropbtn = document.querySelector(".dropbtn");

  dropbtn.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown.classList.toggle("show");
  });


  window.addEventListener("click", (e) => {
    if (!dropdown.contains(e.target)) {
      dropdown.classList.remove("show");
    }
  });
});