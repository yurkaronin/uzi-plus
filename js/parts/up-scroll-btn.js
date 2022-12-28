window.onscroll = function () {
  // показываем кнопку наверх, если прокрутили страницу
  if (window.pageYOffset > 150 && window.screen.width > 425) {
    document.body.classList.add('up-button-show');
  } else {
    document.body.classList.remove('up-button-show');
  };

  // прилипающая меню при прокрутке страницы
  if (window.pageYOffset > 650) {
    document.body.classList.add('menu-fixed');
  } else {
    document.body.classList.remove('menu-fixed');
  };

};