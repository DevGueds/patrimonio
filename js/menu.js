// sub-menu
var menuItem = document.querySelectorAll(".item-menu");

function selectLink() {
  this.classList.toggle("active");
}

menuItem.forEach((item) => item.addEventListener("click", selectLink));
