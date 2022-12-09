<?php
include "./components/head.php";
include "./components/up-button.php";
include "./components/header.php";
?>
<main>
  <section class="service-item section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a href="./catalog.php"><span>Все услуги</span></a></li>
        <li><a><span>Услуги для взрослых</span></a></li>
      </ul>

      <!-- первый блок  -->
      <div class="service-item__grid">
        <div class="service-item__left">
          <h2 class="service-item__title">Услуги для взрослых</h2>
          <p class="service-item__text">В МЦ «УЗИ+» представлен широкий спектр медицинских услуг, которые позволяют провести диагностику различных заболеваний и назначить лечение взрослым пациентам</p>
        </div>
        <div class="service-item__right">
          <div class="service-item__image">
            <img src="./img/artwork/services/gastrointerologiya.svg" alt="изображение услуги">
          </div>

        </div>
      </div>
    </div>
  </section>


  <?php
    // Преимущества
    include "./components/benefits.php";
  ?>

  <section class="services-group section">
    <div class="wrapper">
      <div class="catalog__content">

        <article class="catalog-preview catalog-preview--long">
          <div class="catalog-preview__left">
            <div class="catalog-preview__hgroup">
              <span class="catalog-preview__id">№ 721</span>
            <h3 class="catalog-preview__title">Узи сердца</h3>
            </div>
            
            <p class="catalog-preview__desc">Эхокардиография назначается терапевтом или кардиологом по
              показаниям или после перенесенного инфаркта, а также всем детям в возрасте одного года и 14 лет в
              рамках плановой диспансеризации. Процедура занимает 15-20 минут и не требует особой подготовки.
            </p>
          </div>
          <div class="catalog-preview__left">
            <div class="catalog-preview__price">Цена: <strong>от 1200 руб.</strong></div>
            <a href="" class="button button--icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5"></path>
              </svg>
              <span>Подробнее</span>
            </a>
          </div>
        </article>

      </div>
    </div>
  </section>
  <section class="section">
    <div class="wrapper">
      <h2 class="title">Заголовок второго уровня для поисковиков</h2>
      <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
        осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних
        условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется
        абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более
        привлекательным и живым для визуально-слухового восприятия.</p>
      <p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей
        недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит
        любой макет непонятным смыслом
        и придаст неповторимый колорит советских времен.</p>
    </div>
  </section>

</main>
<?php 
  // подвал 
  include "./components/footer.php";
  // скрипты 
  include "./components/scripts.php"; 
  ?>
</body>

</html>