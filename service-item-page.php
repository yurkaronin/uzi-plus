<?php
require_once('config.php');

$currentServiceCat = intval($_GET['service-cat']);

include "./templates/_head.php";
include "./templates/_header.php";
$sql = "SELECT * FROM `service_category` WHERE id = '$currentServiceCat'";
$result = $data_base->query($sql);
$service = $result->fetch(PDO::FETCH_ASSOC);

$sql_two = "SELECT * FROM `service` WHERE service_category = '$currentServiceCat'";
$result_two = $data_base->query($sql_two);
$service_two = $result_two->fetchAll(PDO::FETCH_ASSOC);

// var_dump($service);
// переменные 
$page_name = "";
$page_desc = "";
$seo_title = $service['title'];
$seo_text = $service['article'];

?>
<main>

  <section class="service-item section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a href="./catalog.php"><span>Все услуги</span></a></li>
        <li><a href="./catalog.php"><span>Услуги для детей</span></a></li>
        <li><a><span><?php echo $service['title']; ?></span></a></li>
      </ul>

      <!-- первый блок  -->
      <div class="service-item__grid">
        <div class="service-item__left">
          <h2 class="service-item__title"><?php echo $service['title']; ?></h2>
          <p class="service-item__text"><?php echo $service['lead']; ?></p>
        </div>
        <div class="service-item__right">
          <div class="service-item__image">
            <img src="<?php echo $service['image']; ?>" alt="изображение услуги">
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
          foreach( $service_two as $item) {
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
        <?
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