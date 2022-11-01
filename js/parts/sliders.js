// Слайдер в первом экране
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
