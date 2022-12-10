document.addEventListener('DOMContentLoaded', () => {
  // глобальные переменные
  const menuButton = document.querySelector('.nav-button');
  const navigationLink = document.querySelectorAll('.navigation__link--mod');
  // let headerHeight;

  // смотрим по какому элементу кликнули
  document.addEventListener('click', e => console.log(e.target));


  window.onscroll = function () {
    // прилипающая шапка сайта при скроле страницы
    if (window.pageYOffset > 650) {
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

  // плавная прокрутка 
  SmoothScroll({
    // Время скролла 400 = 0.4 секунды
    animationTime: 800,
    // Размер шага в пикселях
    stepSize: 75,

    // Дополнительные настройки:

    // Ускорение
    accelerationDelta: 30,
    // Максимальное ускорение
    accelerationMax: 2,

    // Поддержка клавиатуры
    keyboardSupport: true,
    // Шаг скролла стрелками на клавиатуре в пикселях
    arrowScroll: 50,

    // Pulse (less tweakable)
    // ratio of "tail" to "acceleration"
    pulseAlgorithm: true,
    pulseScale: 4,
    pulseNormalize: 1,

    // Поддержка тачпада
    touchpadSupport: true,
  });

  // стилизуем iframe яндекса 
  if(document.querySelector("#yandex-widget")) {
    let iframeName = document.querySelector("#yandex-widget");
    // let iframeContent = iframeName.contentDocument;
    console.log(iframeName.contentDocument);
    // iframeContent.body.innerHTML = iframeContent.body.innerHTML + "<style>.badge{max-width: 100%}</style>";

    // создаём новый тег "link" для iFrame и заполняем его "href", "rel" и "type"
  // let iframeLink = iframeName.createElement("link");

  // iframeLink.href = "fileName.css"; 
  // iframeLink.rel = "stylesheet";
  // iframeLink.type = "text/css";

  // вставляем в [0] - индекс iframe
  // frames[0].document.head.appendChild(iframeLink);
  
  };

  

});
