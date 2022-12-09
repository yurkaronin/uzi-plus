document.addEventListener('DOMContentLoaded', () => {
  // глобальные переменные
  const menuButton = document.querySelector('.nav-button');
  const navigationLink = document.querySelectorAll('.navigation__link--mod');
  // let headerHeight;

  // смотрим по какому элементу кликнули
  document.addEventListener('click',e => console.log(e.target));


  window.onscroll = function() {
    // прилипающая шапка сайта при скроле страницы
    if(window.pageYOffset > 650) {
      document.body.classList.add('menu-fixed');
    } else {
      document.body.classList.remove('menu-fixed');
    }
    // показываем кнопку наверх, если прокрутили страницу
    if (window.pageYOffset > 150 && window.screen.width > 425) {
      document.body.classList.add('up-button-show');
    } else {
      document.body.classList.remove('up-button-show');
    }

  }



  // функция подключения скриптов
  function includeFiles(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
  }

  // подключаем файлы тут
  includeFiles("./js/parts/sliders.js");
  includeFiles("./js/parts/accordion.js");
  includeFiles("./js/parts/yandex.map.js");
  // показываем меню при клике по кнопке
  menuButton.addEventListener('click', function () {
    // узнаём высоту шапки
    // let heightElem = document.querySelector('.header').clientHeight;
    document.body.classList.toggle('mob-menu-open');
    menuButton.classList.toggle('open');
  });

// удаляем атрибут href у ссылок
  for (let item of navigationLink) {
    if (window.innerWidth <= 768) {
      item.removeAttribute('href');

      item.onclick = function (e) {
        e.preventDefault();
        item.parentNode.classList.toggle('active');
      };
    }


  };

  new isvek.Bvi({
    target: '.bvi-open', // Класс инициализации
    fontSize: 24, // Размер шрифта
    theme: 'black' // Цветовая тема сайта
});

// инициализация кастомных select
if (document.querySelector('#select-1')) {
  const select1 = new ItcCustomSelect('#select-1');
};
if (document.querySelector('#select-2')) {
  const select2 = new ItcCustomSelect('#select-2');
};

});
