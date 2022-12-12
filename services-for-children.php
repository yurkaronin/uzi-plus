<?php
require_once('config.php');
// переменные 
$page_name = "Детский Медицинский центр УЗИ + в Смоленске. Детские врачи, лаборатория и современное оборудование";
$page_desc = "Современный детский медицинский центр УЗИ + в Смоленске. Услуги для детей: Узи, педиатр, детская гастроэнтерология и неврология. Смотрите полный список услуг на этой странице";
$page_heading = "Услуги для детей";

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
        <li><a><span><?php echo $page_heading; ?></span></a></li>
      </ul>

      <!-- первый блок  -->
      <div class="service-item__grid">
        <div class="service-item__left">
          <h2 class="service-item__title"><?php echo $page_heading; ?></h2>
          <p class="service-item__text">В МЦ «УЗИ+» работает дружная команда опытных детских врачей и разработан целый
            комплекс исследований, помогающий специалистам поставить верный диагноз и назначить эффективное лечение.</p>
          <p>Самое главное для каждого родителя - здоровье его ребенка. Мы собрали первоклассных специалистов, которые
            используют как старые и проверенные методы лечения, так и новейшие доказанные методики. Врачи «старой
            закалки» и молодые специалисты идут бок о бок, обучая и обогащая друг друга необходимыми знаниями. Наши
            врачи стараются найти индивидуальный подход к каждому ребёнку и родителю. Надеемся, что каждый малыш уйдёт
            от нас только с положительными эмоциями, а родители - с понятным и эффективным лечением для своего крохи.
          </p>
        </div>
        <div class="service-item__right">
          <div class="service-item__image">
            <img src="./img/artwork/services/pediatr.svg" alt="изображение услуги">
          </div>

        </div>
      </div>
    </div>
  </section>


  <?php include "./components/benefits.php"; ?>

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