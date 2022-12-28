window.onscroll = function () {
  // показываем кнопку наверх, если прокрутили страницу
  if (window.pageYOffset > 150 && window.screen.width > 425) {
    document.body.classList.add('up-button-show');
  } else {
    document.body.classList.remove('up-button-show');
  };

};