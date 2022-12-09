if (document.querySelector('.map')) {
  // попова 
  let center = [54.765919, 32.104764];
  // гагарина 
  let center2 = [54.772115, 32.045502];


  function init() {

    let map = new ymaps.Map("map", {
      center: center2, // ваши данные
      zoom: 13
    });

    let placemarPopova = new ymaps.Placemark([54.765919, 32.104764], {}, {
      iconLayout: 'default#image', /* говорим что будем отображать на карте в качестве геометки  */
      iconImageHref: './img/map/balun.svg', /* указываем пусть к картинке на нашем сайте  */
      iconImageSize: [48, 64], /* размеры картинки  */
      iconImageOffset: [-19, -44] /* отступ от центра  */
    });

    let placemarGagarina = new ymaps.Placemark([54.772115, 32.045502], {}, {
      iconLayout: 'default#image', /* говорим что будем отображать на карте в качестве геометки  */
      iconImageHref: './img/map/balun.svg', /* указываем пусть к картинке на нашем сайте  */
      iconImageSize: [48, 64], /* размеры картинки  */
      iconImageOffset: [-19, -44] /* отступ от центра  */
    });

    map.controls.remove('geolocationControl'); // удаляем геолокацию
    map.controls.remove('searchControl'); // удаляем поиск
    map.controls.remove('trafficControl'); // удаляем контроль трафика
    map.controls.remove('typeSelector'); // удаляем тип
    // map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    // map.controls.remove('zoomControl'); // удаляем контрол зуммирования
    map.controls.remove('rulerControl'); // удаляем контрол правил
    map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

    map.geoObjects.add(placemarPopova);

    //   placemarPopova.events 
    //     .add('mouseenter', function (e) {
    //       e.get('target').options.set('iconImageHref', './img/map/balun-hover.svg');
    //     })
    //     .add('mouseleave', function (e) {
    //       e.get('target').options.set('iconImageHref', './img/map/balun.svg');
    //     });
    // }

    map.geoObjects.add(placemarGagarina);

    // placemarGagarina.events
    //     .add('mouseenter', function (e) {
    //       e.get('target').options.set('iconImageHref', './img/map/balun-hover.svg');
    //     })
    //     .add('mouseleave', function (e) {
    //       e.get('target').options.set('iconImageHref', './img/map/balun.svg');
    //     })
    // }

  };
  ymaps.ready(init);
};

