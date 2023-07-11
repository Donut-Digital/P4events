window.addEventListener("load", function () {

  // main menu
  const btn = document.querySelector("#menu-btn");
  const btn_1 = document.querySelector("#menu-btn-1");
  const btn_2 = document.querySelector("#menu-btn-2");
  const menu = document.querySelector("#mobile-menu");

  if (btn && menu) {
    btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");

      btn_1.classList.toggle("opacity-0");
      btn_1.classList.toggle("-rotate-90");
      btn_2.classList.toggle("opacity-0");
      btn_2.classList.toggle("rotate-90");
    });
  }

  // sub menus

  const sub_menus = document.querySelectorAll(".mobile-dropdown-trigger");

  if (sub_menus) {
    sub_menus.forEach((sub_menu) => {
      sub_menu.addEventListener("click", () => {
        sub_menu.nextElementSibling.classList.toggle("hidden");
      });
    });
  }
});


