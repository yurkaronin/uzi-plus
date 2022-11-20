const accordion = document.querySelectorAll('.accordion');

if (accordion.length) {
  for (let i = 0, item; i < accordion.length; i++) {
    item = accordion[i];
    item.addEventListener('click', function (e) {
      // если клик по ссылке - то добавляем item класс active
      if (e.target.classList.contains('accordion__button')) {
        e.target.classList.toggle('active');
      }
    });
    if (i == 0)
      item.querySelector('.accordion__button').classList.add('active');
  }
  // for (let item of accordion) {
  //   item.addEventListener('click', function (e) {
  //     // если клик по ссылке - то добавляем item класс active
  //     if (e.target.classList.contains('accordion__button')) {
  //       e.target.classList.toggle('active');
  //     }
  //   });
  // };

  // // добавляет активный класс первому аккордеону
  // function classАddition() {
  //   // accordion[0].querySelector('accordion__button').classList.add('active');
  //   let item = accordion[0].querySelector('.accordion__button');
  //   item.classList.add('active');
  // };

  // classАddition();

};