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
        <li><a><span>Все отзывы</span></a></li>
      </ul>
      <br>
      <h1 class="title">Отзывы о медицинском центре УЗИ +</h1>
      <div class="all-reviews__lead">
        <p class="">Здесь может оставить отзыв каждый, кто пользовался услугами нашего медицинского
          центра.</p>

      </div>

      <!-- виджет яндекса  -->
      <?php include "./components/yandex-widget-review.php"; ?>

      <h2>Отзывы опубликованные на сайте</h2>


      <div class="all-reviews__list">
      <?php 
        $sql = "SELECT * FROM `reviews`";
        $result = $data_base->query($sql);
        $reviews = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach( $reviews as $item) {
          include "./templates/_review-item--simple.php"; 
        };
      ?>
      </div>

      <div class="center-button">
        <a href="https://yandex.ru/maps/-/CCUnAUW2wA" class="button button--icon" target="_blank">
          <svg width="23" height="22" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 22">
            <path fill="#000"
              d="M11.5 0a10.97 10.97 0 0 1 7.776 3.223 10.999 10.999 0 0 1-2.101 17.203 10.96 10.96 0 0 1-10.812.286H6.33c-.329-.132-.594-.363-.902-.517a1.571 1.571 0 0 0-1.077-.054 24.16 24.16 0 0 1-2.487.714c-.44.01-.572-.253-.572-.682a20.59 20.59 0 0 1 .771-2.563c.12-.363.088-.748-.099-1.09l-.22-.428a10.812 10.812 0 0 1-1.242-5.025v-.068a10.97 10.97 0 0 1 3.221-7.776A10.99 10.99 0 0 1 11.5 0Zm5.07 9.603a1.41 1.41 0 0 0-1.407 1.407c0 .77.637 1.408 1.407 1.408a1.41 1.41 0 0 0 1.408-1.408c0-.78-.627-1.407-1.408-1.407Zm-5.07 0c-.781 0-1.409.627-1.409 1.407 0 .77.628 1.408 1.409 1.408a1.41 1.41 0 0 0 1.407-1.408c0-.78-.626-1.407-1.407-1.407Zm-5.072 0c-.78 0-1.408.627-1.408 1.407 0 .77.627 1.408 1.408 1.408.77 0 1.41-.638 1.41-1.408 0-.78-.64-1.407-1.41-1.407Z" />
          </svg>
          <span>Оставить свой отзыв</span></a>
      </div>

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