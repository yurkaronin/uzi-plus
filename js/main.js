document.addEventListener('DOMContentLoaded', () => {
  // let headerHeight;

  // смотрим по какому элементу кликнули
  document.addEventListener('click', e => console.log(e.target));


  // функция подключения скриптов
  function includeFiles(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
  };

  // подключаем файлы тут
  includeFiles("./js/parts/sliders.js");
  includeFiles("./js/parts/accordion.js");
  includeFiles("./js/parts/yandex.map.js");
  includeFiles("./js/parts/buttons.js");
  includeFiles("./js/parts/show-more.js");
  includeFiles("./js/parts/smooth-scroll.js");
  includeFiles("./js/parts/show-mob-menu.js");
  includeFiles("./js/parts/nav-link-modify.js");
  includeFiles("./js/parts/custom-select.js");
  includeFiles("./js/parts/up-scroll-btn.js");


  new isvek.Bvi({
    target: '.bvi-open', // Класс инициализации
    fontSize: 24, // Размер шрифта
    theme: 'black' // Цветовая тема сайта
  });

});