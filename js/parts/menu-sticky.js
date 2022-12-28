window.onscroll = function () {
  // прилипающая меню при прокрутке страницы
  if (window.pageYOffset > 650) {
    document.body.classList.add('menu-fixed');
  } else {
    document.body.classList.remove('menu-fixed');
  };
};