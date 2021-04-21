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

// const swiperTestimoni = new Swiper(".swiper-container-testimoni", {
//   autoplay: {
//     delay: 2000,
//   },
//   slidesPerView: 3,
//   spaceBetween: 30,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   breakpoints: {
//     800: {
//       slidesPerView: 3,
//     },
//     600: {
//       slidesPerView: 2,
//     },
//     300: {
//       slidesPerView: 1,
//     },
//   },
// });
const swiperTestimoni = new Swiper(".swiper-container-testimoni", {
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 30,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    576: {
      slidesPerView: 2,
    },
    800: {
      slidesPerView: 3,
    },
  },
});

// Simulasi Kredit Home Page
const simulasi = document.querySelectorAll(".simulasi");
simulasi.forEach((v) =>
  v.addEventListener("click", function () {
    this.classList.toggle("active");
    const panel = this.nextElementSibling;
    const tinggi = panel.scrollHeight + 30;
    panel.style.maxHeight == 0
      ? (panel.style.maxHeight = `${tinggi}px`)
      : (panel.style.maxHeight = null);
  })
);
// Akhir Simulasi Kredit Home Page

// Simulasi Kredit Accordion
const acc = document.querySelectorAll(".accordion");
acc.forEach((v) =>
  v.addEventListener("click", function () {
    this.classList.toggle("active");
    const panel = this.nextElementSibling;
    panel.style.maxHeight == 0
      ? (panel.style.maxHeight = `${panel.scrollHeight}px`)
      : (panel.style.maxHeight = null);
  })
);
// Akhir Simulasi Kredit Accordion

// Format Currency
function formatNumber(n) {
  // format number 1000000 to 1.234.567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function formatCurrency(input) {
  // appends $ to value, validates titik side
  // and puts cursor back in right position.
  //put value
  let input_val = input.val();

  // don't validate empty input
  if (input_val === "") {
    return;
  }

  // original length
  let original_len = input_val.length;

  // initial caret position
  let caret_pos = input.prop("selectionStart");

  // no decimal entered
  // add titik to number
  // remove all non-digits
  input_val = formatNumber(input_val);
  input_val = "Rp " + input_val;

  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  let updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input.setSelectionRange(caret_pos, caret_pos);
}
// Akhir Format Currency

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $("input[data-type='currency']").each(function () {
    $(this).keyup(function () {
      formatCurrency($(this));
    });
  });

  new Swiper(".swiper-container-product", {
    autoplay: {
      delay: 2000,
    },
    spaceBetween: 20,
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
    disableOnInteraction: true,
  });

  // Untuk mulai dan berhenti slider simulasi kredit
  // const swiperProduct = document.querySelector(".swiper-container-product")
  //   .swiper;
  // $(".swiper-container-product").mouseenter(function () {
  //   swiperProduct.autoplay.stop();
  //   console.log("Slider Stopped");
  // });
  // $(".swiper-container-product").mouseleave(function () {
  //   swiperProduct.autoplay.start();
  //   console.log("Slider Started Again");
  // });

  const warnaMobil = [
    "black-xpander",
    "white-xpander",
    "grey-xpander",
    "silver-xpander",
    "red-xpander",
    "bronze-xpander",
  ];

  // Remove vandys when upload to live
  warnaMobil.forEach(function (v, i) {
    $("#" + v).click(() => {
      $("#img-xpander").attr(
        "src",
        window.location.protocol +
          "//" +
          window.location.host +
          `/assets/img/xpander/${warnaMobil[i]}.webp`
      );
    });
  });

  $("#black-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/cross/xpander-cross-black.webp"
    )
  );

  $("#white-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/cross/xpander-cross-white.webp"
    )
  );

  $("#grey-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/cross/xpander-cross-gray.webp"
    )
  );

  $("#silver-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/cross/xpander-cross-silver.webp"
    )
  );

  $("#orange-xpander-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-xpander-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/cross/xpander-cross-orange.webp"
    )
  );

  $("#black-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/pajero/pajero-sport-black.webp"
    )
  );

  $("#white-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/pajero/pajero-sport-white.webp"
    )
  );

  $("#grey-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/pajero/pajero-sport-grey.webp"
    )
  );

  $("#silver-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/pajero/pajero-sport-silver.webp"
    )
  );

  $("#bronze-pajero").click(() =>
    // remove /vandys when upload to live
    $("#img-pajero").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/pajero/pajero-sport-bronze.webp"
    )
  );

  $("#black-eclipse-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-eclipse-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/eclipse/eclipse-cross-black.webp"
    )
  );

  $("#white-eclipse-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-eclipse-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/eclipse/eclipse-cross-white.webp"
    )
  );

  $("#red-eclipse-cross").click(() =>
    // remove /vandys when upload to live
    $("#img-eclipse-cross").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/eclipse/eclipse-cross-red.webp"
    )
  );

  $("#white-diamond-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/triton/triton-white-diamond.webp"
    )
  );

  $("#black-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/triton/triton-black.webp"
    )
  );

  $("#white-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/triton/triton-white.webp"
    )
  );

  $("#grey-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/triton/triton-gray.webp"
    )
  );

  $("#silver-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/triton/triton-silver.webp"
    )
  );

  $("#red-triton").click(() =>
    // remove /vandys when upload to live
    $("#img-triton").attr(
      "src",
      window.location.protocol +
        "//" +
        window.location.host +
        "/assets/img/triton/triton-red.webp"
    )
  );

  //  Simulasi Kredit
  $("#hitungXpander").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMuka").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 20000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBunga").val());
      let tenor = parseInt($("#selectTenor option:selected").val());
      let hargaOtr = parseInt(
        $("#plainTextHargaOtr").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMuka").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilan").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenor").val(tenor - 1 + " bulan");
      $(".perhitungan").css("display", "block");
      $(".perhitungan-salah").css("display", "none");
    }
  });

  $("#hitungXpanderCross").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMukaXpanderCross").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 20000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBungaXpanderCross").val());
      let tenor = parseInt($("#selectTenorXpanderCross option:selected").val());
      let hargaOtr = parseInt(
        $("#plainTextHargaOtrXpanderCross").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMukaXpanderCross").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilanXpanderCross").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenorXpanderCross").val(tenor - 1 + " bulan");
      $(".perhitungan").css("display", "block");
      $(".perhitungan-salah").css("display", "none");
    }
  });

  $("#hitungPajeroSport").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMukaPajero").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 20000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBungaPajero").val());
      let tenor = parseInt($("#selectTenorPajero option:selected").val());
      let hargaOtr = parseInt(
        $("#plainTextHargaOtrPajero").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMukaPajero").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilanPajero").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenorPajero").val(tenor - 1 + " bulan");
      $(".perhitungan").css("display", "block");
      $(".perhitungan-salah").css("display", "none");
    }
  });

  $("#hitungEclipse").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMukaEclipse").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 20000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBungaEclipse").val());
      let tenor = parseInt($("#selectTenorEclipse option:selected").val());
      let hargaOtr = parseInt(
        $("#plainTextHargaOtrEclipse").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMukaEclipse").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilanEclipse").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenorEclipse").val(tenor - 1 + " bulan");
      $(".perhitungan").css("display", "block");
      $(".perhitungan-salah").css("display", "none");
    }
  });

  $("#hitungTriton").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMukaTriton").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 20000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBungaTriton").val());
      let tenor = parseInt($("#selectTenorTriton option:selected").val());
      let hargaOtr = parseInt(
        $("#plainTextHargaOtrTriton").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMukaTriton").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilanTriton").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenorTriton").val(tenor - 1 + " bulan");
      $(".perhitungan").css("display", "block");
      $(".perhitungan-salah").css("display", "none");
    }
  });

  $("#hitungL300").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMukaL300").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 20000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBungaL300").val());
      let tenor = parseInt($("#selectTenorL300 option:selected").val());
      let hargaOtr = parseInt(
        $("#plainTextHargaOtrL300").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMukaL300").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilanL300").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenorL300").val(tenor - 1 + " bulan");
      $(".perhitungan-salah").css("display", "none");
      $(".perhitungan").css("display", "block");
    }
  });

  $("#hitungColt").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMukaColt").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 50000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBungaColt").val());
      let tenor = parseInt($("#selectTenorColt option:selected").val());

      let hargaOtr = parseInt(
        $("#plainTextHargaOtrColt").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMukaColt").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilanColt").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenorColt").val(tenor - 1 + " bulan");
      $(".perhitungan").css("display", "block");
      $(".perhitungan-salah").css("display", "none");
    }
  });

  $("#hitungFuso").click(function () {
    let uangMuka = parseInt(
      $("#inputUangMukaFuso").val().substr(3).replace(/\./g, "")
    );
    if (uangMuka < 50000000) {
      $(".perhitungan").css("display", "none");
      $(".perhitungan-salah").css("display", "block");
    } else {
      let rpFormat = new Intl.NumberFormat("id-id", {
        style: "currency",
        currency: "IDR",
      });
      let sukuBunga = parseFloat($("#inputSukuBungaFuso").val());
      let tenor = parseInt($("#selectTenorFuso option:selected").val());
      let hargaOtr = parseInt(
        $("#plainTextHargaOtrFuso").val().substr(3).replace(/\./g, "")
      );
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      $("#plainTextTotalUangMukaFuso").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilanFuso").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenorFuso").val(tenor - 1 + " bulan");
      $(".perhitungan").css("display", "block");
      $(".perhitungan-salah").css("display", "none");
    }
  });

  // function hitungKredit() {
  //   let rpFormat = new Intl.NumberFormat("id-id", {
  //     style: "currency",
  //     currency: "IDR",
  //   });
  //   let sukuBunga = parseFloat($("#inputSukuBunga").val());
  //   let tenor = parseInt($("#selectTenor option:selected").val());
  //   let uangMuka = parseInt(
  //     $("#inputUangMuka").val().substr(3).replace(/\./g, "")
  //   );
  //   let hargaOtr = parseInt(
  //     $("#plainTextHargaOtr").val().substr(3).replace(/\./g, "")
  //   );
  //   let pokokCicilan = hargaOtr - uangMuka;
  //   let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
  //   let totalCicilan = pokokCicilan + bungaCicilan;
  //   let cicilanPerBulan = totalCicilan / tenor;
  //   let totalUangMuka = uangMuka + cicilanPerBulan;
  //   // let tampilTotalCicilan = rpFormat.format(totalCicilan);
  //   let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
  //   let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
  //   // $('#plainTextTotalCicilan').val(tampilTotalCicilan.substring(0, tampilTotalCicilan.length - 3));
  //   $("#plainTextTotalUangMuka").val(
  //     tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
  //   );
  //   $("#plainTextCicilan").val(
  //     tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
  //   );
  //   $("#plainTextTenor").val(tenor - 1 + " bulan");
  // }
  // const hitung = document.querySelectorAll("#hitungSimulasi");
  // hitung.forEach((el) => {
  //   el.addEventListener("click", function (e) {
  //     hitungKredit();
  //     console.log(e.ta  //   });
  // });

  // const buttonHitung = [
  //   "#hitungXpander",
  //   "#hitungXpanderCross",
  //   "#hitungPajero",
  //   "#hitungEclipse",
  //   "#hitungTriton",
  //   "#hitungL300",
  //   "#hitungColt",
  //   "#hitungFuso",
  // ];
  // buttonHitung.forEach(function (v) {
  //   console.log(v);
  //   let btnHitung = documentmentById(v);
  //   btnHitung.addEventListener("click", hitungKredit());
  // });
  // $.each(buttonHitung, (v) => {
  //   v.addEventListener("click", hitungKredit());
  // });
  // buttonHitung.forEach((v) => console.log(v));
  // buttonHitung.forEach((v) => v.addEventListener("click", hitungKredit()));
  // Akhir Simulasi Kredit

  lightbox.option({
    showImageNumberLabel: false,
  });
});
