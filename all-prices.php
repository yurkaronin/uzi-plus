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
  <section class="all-reviews section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a><span>Цены на услуги клиники</span></a></li>
      </ul>
      <br>
      <h1 class="title">Цены на услуги клиники</h1>

      <ul class="green-bullets">
        <li><a href="./prices-ultrasound-for-adults.php">Ультразвуковые исследования для взрослых</a></li>
        <li><a href="./prices-ultrasound-for-children.php">Ультразвуковые исследования для детей</a></li>
        <li><a href="./prices-expert-advice.php">Консультация специалистов</a></li>
        <li><a href="./prices-consultation-pediatric-specialists.php">Консультация детских специалистов</a></li>
        <li><a href="./prices-obstetrics-and-gynecology.php">Акушерство и гинекология</a></li>
        <li><a href="./prices-sampling.php">Забор анализов</a></li>
      </ul>

    </div>
  </section>

  <?php 
      // Промо блок 2
      include "./components/promo-3.php";
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