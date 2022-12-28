// удаляем атрибут href у ссылок
const navigationLink = document.querySelectorAll('.navigation__link--mod');
for (let item of navigationLink) {
  if (window.innerWidth <= 768) {
    item.removeAttribute('href');

    item.onclick = function (e) {
      e.preventDefault();
      item.parentNode.classList.toggle('active');
    };
  }

};