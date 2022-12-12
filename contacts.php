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
<main class="inner-page">
  <section class="content">
    <div class="wrapper">
      <!-- хлебные крошки  -->
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a><span>Контакты и адреса</span></a></li>
      </ul>
      <!-- Главный заголовок страницы  -->
      <h1 class="title">Контакты и адреса</h1>
      <!-- блок с карточками филиалов  -->
      <ul class="filial">
        <!-- Попова  -->
        <li class="filial__item">
          <div class="filial__photo">
            <a href="./img/filial/filial-popova/home.jpg" data-fancybox="gallery-filial1"
              data-caption="Вход в клинику УЗИ + по адресу: г. Смоленск, ул. Попова, д. 68">
              <img src="./img/filial/filial-popova/home.jpg" width="673" alt="вход в клинику УЗИ +">
            </a>
          </div>
          <div class="filial__details">
            <h2 class="filial__title">Медицинский центр на Попова</h2>
            <ul class="filial__text">
              <li><strong>Адрес</strong>: ул. г. Смоленск, ул. Попова, д. 68</li>
              <li><strong>Телефоны</strong>:<br>
                <a href="tel:+74812605101">+7 (4812) 60-51-01</a>,<br>
                <a href="tel:+74812615101">+7 (4812) 61-51-01</a>
              </li>
              <li><strong>Электронная почта</strong>: <a href="mailto:uziplus@bk.ru">uziplus@bk.ru</a></li>
              <li><strong>Режим работы</strong>: пн-птн 9-19, сб 9-15, вс выходной</li>
            </ul>
          </div>
        </li>

        <!-- Гагарина  -->
        <li class="filial__item">
          <div class="filial__photo">
            <a href="./img/filial/filial-gagarina/home.jpg" data-fancybox="gallery-filial2"
              data-caption="Вход в клинику УЗИ + по адресу: г. Смоленск, пр. Гагарина, д. 14/2">
              <img src="./img/filial/filial-gagarina/home.jpg" width="673" alt="вход в клинику УЗИ +">
            </a>
          </div>
          <div class="filial__details">
            <h2 class="filial__title">Медицинский центр на Гагарина</h2>
            <ul class="filial__text">
              <li><strong>Адрес</strong>: ул. г. Смоленск, пр. Гагарина, д. 14/2</li>
              <li><strong>Телефоны</strong>:<br>
                <a href="tel:+74812562457">+7 (4812) 56-24-57</a>,<br>
                <a href="tel:+74812645101">+7 (4812) 64-51-01</a>
              </li>
              <li><strong>Электронная почта</strong>: <a href="mailto:uziplus@bk.ru">uziplus@bk.ru</a></li>
              <li><strong>Режим работы</strong>: пн-птн 9-19, сб 9-15, вс выходной</li>
            </ul>
          </div>
        </li>
      </ul>

    </div>
  </section>
  <!-- секция с интерактивной картой  -->
  <section class="map">
    <div id="map" class="map__content"></div>
  </section>

  <?php
    /// Рейтинг
    include "./components/ratings.php";
  ?>
  <?php if($seo_title && $seo_text) :  ?>
  <section class="section">
    <div class="wrapper">
      <h2 class="title"><?php echo $seo_title; ?></h2>
      <?php echo $seo_text; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php include "./templates/_footer.php"; ?>