// Главный слайдер с акциями
const sliderHero = new Swiper(".slider-hero", {
  loop: true,
  // speed: 1400,
  // autoplay: {
  //   delay: 4000,
  // },
  pagination: {
    el: ".slider-hero .swiper-pagination",
    clickable: true,
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

// Ведущие специалисты
const leadingSpecialists = new Swiper(".leading-specialists .swiper", {
  loop: true,
  speed: 1400,
  // autoplay: {
  //   delay: 4000,
  // },
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

});



// слайдер с сертификатами 
if(document.querySelector('.certificates')) {
  var certificatesSwiper = new Swiper(".certificates .mySwiper", {
    
    // loop: true,
    pagination: {
      el: ".certificates .swiper-pagination",
      // type: "fraction",
      clickable: true,
    },

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      550: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      // when window width is >= 480px
      768: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      // when window width is >= 640px
      1024: {
        slidesPerView: 4,
        spaceBetween: 16,
      }
    },

  });

  // слайдер с фотографиями 
  if(document.querySelector('#js-photo-slider')) {
    const photoSlider = new Swiper('#js-photo-slider .swiper', {
      // Optional parameters
      // direction: 'vertical',
      loop: true,
      // slidesPerView: 3,
      // spaceBetween: 32,

      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 16
        },
        // when window width is >= 480px
        476: {
          slidesPerView: 2,
          spaceBetween: 24
        },
        // when window width is >= 640px
        769: {
          slidesPerView: 3,
          spaceBetween: 32
        }
      },
      // If we need pagination
      pagination: {
        el: '#js-photo-slider .swiper-pagination',
        clickable: true,
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '#js-photo-slider .slider-button--next',
        prevEl: '#js-photo-slider .slider-button--prev',
      },
    
      // And if we need scrollbar
      scrollbar: {
        el: '#js-photo-slider .swiper-scrollbar',
      },
    });
  };
  
};

