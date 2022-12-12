<?php
// переменные 
$page_name = "";
$page_desc = "";
$seo_title;
$seo_text;
include "./templates/_head.php";
include "./templates/_header.php";
?>
<main>
  <section class="all-specialists section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a><span>Все специалисты</span></a></li>
      </ul>
      <br>
      <h1 class="title">Все специалисты</h1>
      <p class="all-specialists__lead">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.</p>

      <!-- <div class="filter">
        <div class="filter__grid">
          <ul class="filter__list">
            <li>
              <figure class="itc-select" id="select-1">
                <figcaption class="select-grid__group-name">Уточните специализацию</figcaption>
                <button type="button" class="itc-select__toggle" name="Выбор муниципалитета" value=""
                  data-select="toggle" data-index="-1">Специализации</button>
                <div class="itc-select__dropdown">
                  <ul class="itc-select__options">
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0"><span>Все
                        специализации</span></li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Название1</span>
                    </li>
                  </ul>
                </div>
              </figure>
            </li>

            <li>
              <figure class="itc-select" id="select-2">
                <figcaption class="select-grid__group-name">Уточните филиал</figcaption>
                <button type="button" class="itc-select__toggle" name="Выбор муниципалитета" value=""
                  data-select="toggle" data-index="-1">Выбрать филиал</button>
                <div class="itc-select__dropdown">
                  <ul class="itc-select__options">
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Любой</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>ул. Попова, д. 68</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>пр. Гагарина, д. 14/2</span>
                    </li>
                  </ul>
                </div>
              </figure>
            </li>
          </ul>
          <div class="filter__button">
            <a href="" class="button button--icon">

              <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21" viewBox="0 0 21 21">
                <path fill="#000"
                  d="M8.993 3a5.969 5.969 0 0 1 5.32 3.241 6.002 6.002 0 0 1-.441 6.224l-.591.833-.831.592a5.976 5.976 0 0 1-9.162-3.075 6.01 6.01 0 0 1 .872-5.359A5.987 5.987 0 0 1 8.993 3Zm0-3a8.965 8.965 0 0 0-7.259 3.684 9.01 9.01 0 0 0-1.31 8.047 9.004 9.004 0 0 0 2.162 3.588 8.979 8.979 0 0 0 7.717 2.583 8.97 8.97 0 0 0 3.88-1.566l4.217 4.227a1.49 1.49 0 0 0 2.109 0l.021-.022a1.419 1.419 0 0 0 .347-1.634 1.407 1.407 0 0 0-.347-.479l-4.218-4.226A9.003 9.003 0 0 0 13.664 1.31 8.957 8.957 0 0 0 8.993 0Z" />
              </svg>
              <span>Найти</span>
            </a>
          </div>
        </div>
      </div> -->

      <div class="service-preview">
        <ul class="service-preview__list">
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/allergologiya-immunologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Аллергология-иммунология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/gastroenterologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Гастроэнтерология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/kardiologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Кардиология</p>
            </a>
          </li>

          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/otorinolaringologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Оториноларингология (ЛОР)</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/ortopediya.svg" alt="">
              </div>
              <p class="service-preview__text">Ортопедия</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/pediatriya.svg" alt="">
              </div>
              <p class="service-preview__text">Педиатрия</p>
            </a>
          </li>

          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/pulmonologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Пульмонология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/ultrazvukovaya-diagnostika.svg" alt="">
              </div>
              <p class="service-preview__text">Ультразвуковая диагностика</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/funkcionalnaya-diagnostika.svg" alt="">
              </div>
              <p class="service-preview__text">Функциональная диагностика</p>
            </a>
          </li>

        </ul>
      </div>

      <div class="all-specialists__grid">
        <?php
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
          include "./components/items/leading-specialists-card.php";
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