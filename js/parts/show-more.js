const leadingSpecialist = document.querySelectorAll('.leading-specialists__item');

for (let item of leadingSpecialist) {
  let btn = item.querySelector('.show-more')
  btn.addEventListener('click', function (e) {
    e.preventDefault();
    let hide = item.querySelectorAll('.hide');

    for (let item of hide) {
      item.classList.toggle('show');

      if(item.classList.contains('show')) {
        btn.textContent = 'Свернуть';
      } else {
        btn.textContent = 'Подробнее';
      }
    };

    

  });
};