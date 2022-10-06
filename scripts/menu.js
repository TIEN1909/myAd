// menu

document.addEventListener("DOMContentLoaded", function () {
    const menuOpen = document.querySelector(".header__container-toggle");
    const menuClose = document.querySelector(".menu__text-close");
    const menu = document.querySelector(".menu");
    if (!menuOpen || !menuClose || !menu) return;
    menuOpen.addEventListener("click", function () {
      menu.classList.add("is-active");
    });
    menuClose.addEventListener("click", function () {
      menu.classList.remove("is-active");
    });
    document.addEventListener("click", function (e) {
      if (!menu.contains(e.target) && !e.target.matches(".header__container-toggle")) {
        menu.classList.remove("is-active");
      }
    });
  });