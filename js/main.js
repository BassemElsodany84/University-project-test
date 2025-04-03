// ====================================================
// to Initialize Swiper
// ====================================================
const swiper = new Swiper(".slider-wrapper", {
  loop: true,
  grabCursor: true,
  spaceBetween: 30,

  //pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  //responsive breakpoints
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
// ====================================================
// to close navbar-collapse on click
// ====================================================
const navLinks = document.querySelectorAll(".navbar-nav a");
navLinks.forEach((link) => {
  link.addEventListener("click", function () {
    const collapse = document.querySelector(".navbar-collapse");
    const bsCollapse = new bootstrap.Collapse(collapse, { hide: true });
  });
});

const btnLogin = document.querySelectorAll(".navbar .btn-login");
btnLogin.forEach((button) => {
  button.addEventListener("click", function () {
    const collapse = document.querySelector(".navbar-collapse");
    const bsCollapse = new bootstrap.Collapse(collapse, { hide: true });
  });
  // ====================================================
  //   to toggle color of nav button
  // ====================================================
  const btnToggle = document.getElementById("toggle-color");
  btnToggle.addEventListener("click", function () {
    btnToggle.classList.toggle("toggled");
  });
});