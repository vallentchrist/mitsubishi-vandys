// Sticky Navbar
window.onscroll = function () {
  stickyNavbar();
};

const navbar = document.getElementById("navbar");
const sticky = navbar.offsetTop;

function stickyNavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
// Akhir Sticky Navbar

const swiperTestimoni = new Swiper(".swiper-container-testimoni", {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    800: {
      slidesPerView: 3,
    },
    600: {
      slidesPerView: 2,
    },
    300: {
      slidesPerView: 1,
    },
  },
});

const swiperProduct = new Swiper(".swiper-container-product", {
  slidesPerView: 3,
  spaceBetween: 30,
  breakpoints: {
    800: {
      slidesPerView: 3,
    },
    600: {
      slidesPerView: 2,
    },
    300: {
      slidesPerView: 1,
    },
  },
});

// Simulasi Kredit
const acc = document.querySelectorAll(".simulasi");
acc.forEach((v) =>
  v.addEventListener("click", function () {
    this.classList.toggle("active");
    const panel = this.nextElementSibling;
    panel.style.maxHeight == 0
      ? (panel.style.maxHeight = `${panel.scrollHeight}px`)
      : (panel.style.maxHeight = null);
  })
);
// Akhir Simulasi Kredit
