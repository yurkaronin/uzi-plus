// Главный слайдер с акциями
const sliderHero = new Swiper(".slider-hero", {
  loop: true,
  speed: 1400,
  pagination: {
    el: ".slider-hero .swiper-pagination",
    clickable: true,
  },
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
});

// Ведущие специалисты
const leadingSpecialists = new Swiper(".leading-specialists .swiper", {
  loop: true,
  speed: 1400,
  slidesPerView: 1,
  spaceBetween: 64,
  pagination: {
    el: ".leading-specialists .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".leading-specialists .slider-button--next",
    prevEl: ".leading-specialists .slider-button--prev",
  },
  // effect: "creative",
  // creativeEffect: {
  //   prev: {
  //     shadow: true,
  //     translate: ["-20%", 0, -1],
  //   },
  //   next: {
  //     translate: ["100%", 0, 0],
  //   },
  // },
});

// let leadingSpecialists = new Swiper(".leading-specialists .swiper", {
//   pagination: {
//     el: ".leading-specialists .swiper-pagination",
//     type: "fraction",
//   },
//   navigation: {
//     nextEl: ".leading-specialists .slider-button--next",
//     prevEl: ".leading-specialists .slider-button--prev",
//   },
// });
