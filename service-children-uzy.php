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
  <section class="service-item section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a href="./catalog.php"><span>Все услуги</span></a></li>
        <li><a href="./catalog.php"><span>Услуги для детей</span></a></li>
        <li><a><span>Ультразвуковая диагностика для детей</span></a></li>
      </ul>

      <!-- первый блок  -->
      <div class="service-item__grid">
        <div class="service-item__left">
          <h2 class="service-item__title">Ультразвуковая диагностика для детей</h2>
          <p class="service-item__text">МЦ "УЗИ+" проводит широкий спектр обследований взрослых и детей. На помощь узким
            специалистам приходит ультразвуковое исследование (УЗИ) внутренних органов.
            УЗИ – один из самых безопасных и информативных методов диагностики.</p>
          <p>В МЦ "УЗИ+" работает слаженная команда опытных врачей ультразвуковой диагностики. Средний опыт работы
            специалистов - более 20 лет.</p>
        </div>
        <div class="service-item__right">
          <div class="service-item__image">
            <img src="./img/artwork/services/uzi-diagnostika.svg" alt="изображение услуги">
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
  
  <?php include "./components/promo-3.php"; ?>
  <?php if($seo_title && $seo_text) :  ?>
  <section class="section">
    <div class="wrapper">
      <h2 class="title"><?php echo $seo_title; ?></h2>
      <?php echo $seo_text; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php include "./templates/_footer.php"; ?>