window.onscroll = function () {
  myFunction();
};

const navbar = document.getElementById("navbar");
const sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

const swiperTestimoni = new Swiper(".swiper-container-testimoni", {
  slidesPerView: 3,
  slidesPerColumn: 2,
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
  centeredSlides: true,
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
