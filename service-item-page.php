<?php
require_once('config.php');

$currentServiceCat = intval($_GET['service-cat']);

$sqlCat = "SELECT * FROM `service_category` WHERE id = '$currentServiceCat'";
$resultCat = $data_base->query($sqlCat);
$service_item = $resultCat->fetch(PDO::FETCH_ASSOC);

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
        <li><a><span><?php echo $service_item['title']; ?></span></a></li>
      </ul>

      <!-- первый блок  -->
      <div class="service-item__grid">
        <div class="service-item__left">
          <h2 class="service-item__title"><?php echo $service_item['title']; ?></h2>
          <p class="service-item__text">МЦ "УЗИ+" проводит широкий спектр обследований взрослых и детей. На помощь узким
            специалистам приходит ультразвуковое исследование (УЗИ) внутренних органов.
            УЗИ – один из самых безопасных и информативных методов диагностики.</p>
          <p>В МЦ "УЗИ+" работает слаженная команда опытных врачей ультразвуковой диагностики. Средний опыт работы
            специалистов - более 20 лет.</p>
        </div>
        <div class="service-item__right">
          <div class="service-item__image">
            <img src="<?php echo $service_item['image']; ?>" alt="изображение услуги">
          </div>

        </div>
      </div>
    </div>
  </section>


  <?php
    // Преимущества
    include "./components/benefits.php";
  ?>
  <!-- список услуг категории  -->
  <section class="services-group section">
    <div class="wrapper">
      <div class="catalog__content">

        <?php 
          $sqlItems = "SELECT * FROM `service` WHERE `service_category` = '$currentServiceCat'";
          $resultItems = $data_base->query($sqlItems);
          $serviceItems = $resultItems->fetchAll(PDO::FETCH_ASSOC);

          foreach( $serviceItems as $item) {
            include "./templates/_catalog-preview-item.php";
          };
        ?>

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