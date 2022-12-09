<?php
include "./components/head.php";
include "./components/up-button.php";
include "./components/header.php";
?>
<main>
  <section class="main-directions section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a href="./catalog.php"><span>Все услуги</span></a></li>
        <li><a><span>Услуги для детей</span></a></li>
      </ul>
      <h2 class="title">Услуги для детей</h2>

      <div class="description">
        <p class="lead">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
      <br>
      <br>

      <ul class="main-directions__list">
        <li class="main-directions__card">
          <div class="main-directions__content">
            <h1 class="main-directions__item-name">Все услуги медицинского центра</h1>
            <p class="main-directions__text">от артопедии и педиатрии до ультразвуковой диагностики</p>
            <a href="" class="button button--icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5" />
              </svg><span>Подробнее</span>
            </a>
            <div class="main-directions__image">
              <img src="./img/artwork/for-children.svg" alt="рисунок детей в клинике" width="336" height="235">
            </div>
          </div>

        </li>

        <li class="main-directions__card main-directions__card--mod">
          <div class="main-directions__content">
            <h3 class="main-directions__item-name">Услуги для&nbsp;взрослых</h3>
            <p class="main-directions__text">поможем вам предупредить или диагностировать недуг</p>
            <a href="" class="button button--icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                <path stroke="#000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5" />
              </svg><span>Подробнее</span>
            </a>
            <div class="main-directions__image">
              <img src="./img/artwork/for-people.svg" alt="рисунок взрослых пациентов в клинике" width="354"
                height="272">
            </div>
          </div>
        </li>
      </ul>



    </div>
  </section>


  <?php
    // Преимущества
    include "./components/benefits.php";
  ?>

  <section class="catalog section">
    <div class="wrapper">
      <div class="catalog__grid">
        <div class="catalog__menu">
          <?php
            // Меню каталога
            include "./components/catalog-menu.php";
          ?>
        </div>
        <div class="catalog__content">

          <div class="catalog-list">
            <ul class="catalog-list__list">

              <!-- элемент списка услуг  -->
              <li class="catalog-list__item">
                <!-- анонс услуги  -->
                <articles class="catalog-preview">
                  <!-- заголовок  -->
                  <h3 class="catalog-preview__title">Название</h3>
                  <!-- описание  -->
                  <p class="catalog-preview__desc">Эхокардиография назначается терапевтом или кардиологом по
                    показаниям или после перенесенного инфаркта, а также всем детям в возрасте одного года и 14 лет в
                    рамках плановой диспансеризации. Процедура занимает 15-20 минут и не требует особой подготовки.
                  </p>
                  <!-- цена  -->
                  <div class="catalog-preview__price">Цена: <strong>1200 руб.</strong></div>
                  <!-- кнопка  -->
                  <a href="" class="button button--icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                      <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5"></path>
                    </svg>
                    <span>Подробнее</span>
                  </a>

                </articles>
              </li>

              <!-- элемент списка услуг  -->
              <li class="catalog-list__item">
                <!-- анонс услуги  -->
                <articles class="catalog-preview">
                  <!-- заголовок  -->
                  <h3 class="catalog-preview__title">Название</h3>
                  <!-- описание  -->
                  <p class="catalog-preview__desc">Эхокардиография назначается терапевтом или кардиологом по
                    показаниям или после перенесенного инфаркта, а также всем детям в возрасте одного года и 14 лет в
                    рамках плановой диспансеризации. Процедура занимает 15-20 минут и не требует особой подготовки.
                  </p>
                  <!-- цена  -->
                  <div class="catalog-preview__price">Цена: <strong>1200 руб.</strong></div>
                  <!-- кнопка  -->
                  <a href="" class="button button--icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                      <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5"></path>
                    </svg>
                    <span>Подробнее</span>
                  </a>

                </articles>
              </li>

              <!-- элемент списка услуг  -->
              <li class="catalog-list__item">
                <!-- анонс услуги  -->
                <articles class="catalog-preview">
                  <!-- заголовок  -->
                  <h3 class="catalog-preview__title">Название</h3>
                  <!-- описание  -->
                  <p class="catalog-preview__desc">Эхокардиография назначается терапевтом или кардиологом по
                    показаниям или после перенесенного инфаркта, а также всем детям в возрасте одного года и 14 лет в
                    рамках плановой диспансеризации. Процедура занимает 15-20 минут и не требует особой подготовки.
                  </p>
                  <!-- цена  -->
                  <div class="catalog-preview__price">Цена: <strong>1200 руб.</strong></div>
                  <!-- кнопка  -->
                  <a href="" class="button button--icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                      <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5"></path>
                    </svg>
                    <span>Подробнее</span>
                  </a>

                </articles>
              </li>

              <!-- элемент списка услуг  -->
              <li class="catalog-list__item">
                <!-- анонс услуги  -->
                <articles class="catalog-preview">
                  <!-- заголовок  -->
                  <h3 class="catalog-preview__title">Название</h3>
                  <!-- описание  -->
                  <p class="catalog-preview__desc">Эхокардиография назначается терапевтом или кардиологом по
                    показаниям или после перенесенного инфаркта, а также всем детям в возрасте одного года и 14 лет в
                    рамках плановой диспансеризации. Процедура занимает 15-20 минут и не требует особой подготовки.
                  </p>
                  <!-- цена  -->
                  <div class="catalog-preview__price">Цена: <strong>1200 руб.</strong></div>
                  <!-- кнопка  -->
                  <a href="" class="button button--icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                      <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5"></path>
                    </svg>
                    <span>Подробнее</span>
                  </a>

                </articles>
              </li>

            </ul>
          </div>
        </div>
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