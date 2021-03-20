// Sticky Navbar
window.onscroll = function () {
  stickyNavbar();
};

const navbar = document.querySelector(".sticky-navbar");
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
  slidesPerView: 2,
  spaceBetween: 30,
  breakpoints: {
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

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();

  $("#black-xpander").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/xpander/xpander-black.webp"
        
    )
  );

  $("#white-xpander").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/xpander/xpander-white.webp"
        
    )
  );

  $("#grey-xpander").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/xpander/xpander-grey.webp"
        
    )
  );

  $("#silver-xpander").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/xpander/xpander-silver.webp"
        
    )
  );

  $("#red-xpander").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/xpander/xpander-red.webp"
        
    )
  );

  $("#bronze-xpander").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/xpander/xpander-bronze.webp"

     )
   );

   $("#black-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/cross/xpander-cross-black.webp"
        
    )
  );

  $("#white-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/cross/xpander-cross-white.webp"
        
    )
  );

  $("#grey-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/cross/xpander-cross-gray.webp"
        
    )
  );

  $("#silver-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/cross/xpander-cross-silver.webp"
        
    )
  );
  
  $("#orange-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/cross/xpander-cross-orange.webp"

     )
   );

   $("#black-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/pajero/pajero-sport-black.webp"
        
    )
  );

  $("#white-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/pajero/pajero-sport-white.webp"
        
    )
  );

  $("#grey-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/pajero/pajero-sport-grey.webp"
        
    )
  );

  $("#silver-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/pajero/pajero-sport-silver.webp"
        
    )
  );
  
  $("#bronze-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/pajero/pajero-sport-bronze.webp"

     )
   );

   $("#black-eclipse-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-eclipse-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/eclipse/eclipse-cross-black.webp"
        
    )
  );

  $("#white-eclipse-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-eclipse-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/eclipse/eclipse-cross-white.webp"
        
    )
  );

  $("#red-eclipse-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-eclipse-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/eclipse/eclipse-cross-red.webp"

     )
   );

  $("#white-diamond-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/triton/triton-white-diamond.webp"

     )
   );

   $("#black-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/triton/triton-black.webp"
        
    )
  );

  $("#white-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/triton/triton-white.webp"
        
    )
  );

  $("#grey-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/triton/triton-gray.webp"
        
    )
  );

  $("#silver-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/triton/triton-silver.webp"
        
    )
  );
  
  $("#red-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/vandys/assets/img/triton/triton-red.webp"

     )
   );
});

