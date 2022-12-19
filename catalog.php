<?php
require_once('config.php');
// переменные 
$page_name = "";
$page_desc = "";
$seo_title;
$seo_text;
include "./templates/_head.php";
include "./templates/_header.php";
?>
<main>
  <section class="main-directions section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a><span>Все услуги</span></a></li>
      </ul>
      <h2 class="title">Основные направления</h2>

      <div class="description">
        <p class="lead">Клиника «УЗИ+» – это частное многопрофильное медицинское учреждение в Смоленске. Оказываем
          широкий спектр диагностических услуг. Наше профильное направление это узи-диагностика. Услуги нашего
          медицинского центра оказываются как взрослым, так и детям.</p>

        <p>Работаем по европейским стандартам диагностики и лечения заболеваний. Заботимся о высоком качестве
          предоставляемых услуг, поэтому в центре работают только опытные дипломированные врачи, имеется все необходимое
          современное диагностическое оборудование от ведущих мировых производителей. Обеспечивается индивидуальный
          подход к решению проблем здоровья каждого пациента.</p>
      </div>
      <br>
      <br>

      <ul class="main-directions__list">
        <li class="main-directions__card">
          <div class="main-directions__content">
            <h3 class="main-directions__item-name">Услуги для детей</h3>
            <p class="main-directions__text">от артопедии и педиатрии до ультразвуковой диагностики</p>
            <a href="./services-for-children.php" class="button button--icon">
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
            <a href="./services-for-adult.php" class="button button--icon">
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
          <?php 
              $sql = "SELECT * FROM `service`";
              $result = $data_base->query($sql);
              $service = $result->fetchAll(PDO::FETCH_ASSOC);

              foreach( $service as $item) {
                ?>
                <article class="catalog-preview catalog-preview--long">
                  <div class="catalog-preview__left">
                    <div class="catalog-preview__hgroup">
                      <span class="catalog-preview__id">№ <?php echo$item['code']; ?></span>
                      <div class="catalog-preview__title-group">
                        <span class="catalog-preview__category-name"><?php echo $service_item['name']; ?></span>
                        <h3 class="catalog-preview__title"><?php echo $item['name']; ?></h3>
                      </div>

                    </div>
                    <div class="catalog-preview__desc"><?php echo $item['text']; ?></div>
                  </div>
                  <div class="catalog-preview__left">
                    <div class="catalog-preview__price">Цена: <strong><?php echo $item['price']; ?> руб.</strong></div>
                    <a href="" class="button button--icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                        <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5"></path>
                      </svg>
                      <span>Записаться</span>
                    </a>
                  </div>
                </article>
          <?php
              };
            ?>
        </div>
      </div>
    </div>
  </section>

  <?php if($seo_title && $seo_text) :  ?>
  <section class="section">
    <div class="wrapper">
      <h2 class="title"><?php echo $seo_title; ?></h2>
      <?php echo $seo_text; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php include "./templates/_footer.php"; ?>