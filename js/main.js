document.addEventListener('DOMContentLoaded', () => {

  const menuButton = document.querySelector('.nav-button');

  menuButton.addEventListener('click', function () {
    document.body.classList.toggle('mob-menu-open');
    menuButton.classList.toggle('open');
  });

  let navigationLink = document.querySelectorAll('.navigation__link');
  for (let item of navigationLink) {

    if (window.innerWidth <= 768) {
      item.removeAttribute('href');

      item.onclick = function (e) {
        e.preventDefault();
        item.parentNode.classList.toggle('active');
      };
    }


  }

  let sliderHero = new Swiper(".slider-hero", {
    loop: true,
    speed: 1400,
    // autoHeight: true,
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
    // autoplay: {
    //   delay: 6000,
    // },
  });

  MicroModal.init({
    openTrigger: 'data-micromodal-open',
    closeTrigger: 'data-micromodal-close',
    disableFocus: true,
    disableScroll: true,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,

  });


});


