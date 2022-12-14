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
        <li><a><span>Услуги для взрослых</span></a></li>
      </ul>

      <!-- первый блок  -->
      <div class="service-item__grid">
        <div class="service-item__left">
          <h2 class="service-item__title">Услуги для взрослых</h2>
          <p class="service-item__text">В МЦ «УЗИ+» представлен широкий спектр медицинских услуг, которые позволяют
            провести диагностику различных заболеваний и назначить лечение взрослым пациентам</p>
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
        <?php 
            $sql = "SELECT * FROM `service` WHERE `service_category` < 24";
            $result = $data_base->query($sql);
            $service = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach( $service as $item) {
              include "./templates/_catalog-preview-item.php"; 
            };
          ?>
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