const menuButton = document.querySelector('.nav-button');
// показываем меню при клике по кнопке
menuButton.addEventListener('click', function () {
  // узнаём высоту шапки
  // let heightElem = document.querySelector('.header').clientHeight;
  document.body.classList.toggle('mob-menu-open');
  menuButton.classList.toggle('open');
});