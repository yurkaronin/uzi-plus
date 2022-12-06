<?php
include "./components/head.php";
include "./components/up-button.php";
include "./components/header.php";
?>
<main class="inner-page">
  <section class="content">
    <div class="wrapper">
      <!-- хлебные крошки  -->
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a><span>Услуги</span></a></li>
      </ul>
      <!-- Главный заголовок страницы  -->
      <h1 class="title">Медицинские центры «Узи+»</h1>

      <!-- фото с преимуществами  -->
      <div class="photo-benefits">
        <div class="photo-benefits__img">
          <a href="./img/photo/about-us/1.jpg" data-fancybox="gallery-photo-benefits" data-caption="Подпись к фотографии">
          <img src="./img/photo/about-us/1.jpg" width="673" alt="фото интерьера в клинике Узи+">
          </a>
        </div>
        <div class="photo-benefits__list">
          <ul>
            <li>
              <div class="icon">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M23.4127 10.3261H17.2171C16.6693 10.3261 16.144 10.5437 15.7567 10.931C15.3694 11.3183 15.1518 11.8436 15.1518 12.3913V28.913C15.1518 29.4608 15.3694 29.9861 15.7567 30.3734C16.144 30.7607 16.6693 30.9783 17.2171 30.9783C17.7648 30.9783 18.2901 30.7607 18.6774 30.3734C19.0647 29.9861 19.2823 29.4608 19.2823 28.913V24.7826H23.4127C25.0559 24.7826 26.6318 24.1299 27.7937 22.9679C28.9556 21.806 29.6084 20.2301 29.6084 18.587V16.5217C29.6084 14.8786 28.9556 13.3027 27.7937 12.1408C26.6318 10.9788 25.0559 10.3261 23.4127 10.3261ZM25.4779 18.587C25.4779 19.1347 25.2603 19.66 24.873 20.0473C24.4857 20.4346 23.9604 20.6522 23.4127 20.6522H19.2823V14.4565H23.4127C23.9604 14.4565 24.4857 14.6741 24.873 15.0614C25.2603 15.4487 25.4779 15.974 25.4779 16.5217V18.587ZM21.3475 0C17.2629 0 13.27 1.21123 9.87376 3.48052C6.47753 5.74981 3.83049 8.97524 2.26738 12.7489C0.704261 16.5226 0.295279 20.6751 1.09215 24.6812C1.88902 28.6873 3.85595 32.3672 6.7442 35.2555C9.63246 38.1437 13.3123 40.1107 17.3185 40.9075C21.3246 41.7044 25.4771 41.2954 29.2507 39.7323C33.0244 38.1692 36.2499 35.5221 38.5191 32.1259C40.7884 28.7297 41.9997 24.7368 41.9997 20.6522C41.9997 17.9401 41.4655 15.2546 40.4276 12.7489C39.3898 10.2433 37.8685 7.96661 35.9508 6.04888C34.0331 4.13115 31.7564 2.60992 29.2507 1.57205C26.7451 0.534184 24.0596 0 21.3475 0V0ZM21.3475 37.1739C18.0798 37.1739 14.8855 36.2049 12.1685 34.3895C9.45152 32.5741 7.33389 29.9937 6.0834 26.9748C4.83291 23.9558 4.50572 20.6338 5.14322 17.4289C5.78071 14.224 7.35426 11.2801 9.66486 8.96954C11.9755 6.65893 14.9194 5.08539 18.1243 4.4479C21.3292 3.8104 24.6511 4.13759 27.6701 5.38808C30.689 6.63857 33.2694 8.7562 35.0848 11.4732C36.9003 14.1902 37.8692 17.3845 37.8692 20.6522C37.8692 25.034 36.1286 29.2364 33.0301 32.3348C29.9317 35.4332 25.7293 37.1739 21.3475 37.1739V37.1739Z"
                    fill="#41E1BB" />
                </svg>

              </div><span>Удобная парковка</span>
            </li>
            <li>
              <div class="icon">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M39.9896 16.687C39.4092 15.9903 38.6831 15.4295 37.8624 15.0441C37.0416 14.6587 36.1463 14.4582 35.2396 14.4566H25.8222L26.9787 11.5034C27.4597 10.2103 27.6199 8.81982 27.4456 7.45123C27.2712 6.08265 26.7674 4.77679 25.9774 3.64567C25.1875 2.51456 24.1349 1.59195 22.9101 0.956996C21.6852 0.322038 20.3246 -0.00631838 18.945 9.20906e-05C18.5477 0.00092099 18.1591 0.116313 17.8258 0.332433C17.4924 0.548552 17.2285 0.856228 17.0656 1.21857L11.1798 14.4566H6.32651C4.68332 14.4566 3.10743 15.1094 1.94552 16.2713C0.783614 17.4332 0.130859 19.0091 0.130859 20.6523V35.1088C0.130859 36.752 0.783614 38.3279 1.94552 39.4898C3.10743 40.6517 4.68332 41.3044 6.32651 41.3044H32.6167C34.0661 41.304 35.4695 40.7953 36.5826 39.8671C37.6958 38.9389 38.4482 37.6497 38.7091 36.224L41.3319 21.7675C41.4942 20.874 41.458 19.9558 41.226 19.0779C40.9941 18.2 40.5719 17.3838 39.9896 16.687ZM10.4569 37.174H6.32651C5.77878 37.174 5.25349 36.9564 4.86618 36.5691C4.47888 36.1818 4.26129 35.6565 4.26129 35.1088V20.6523C4.26129 20.1045 4.47888 19.5792 4.86618 19.1919C5.25349 18.8046 5.77878 18.587 6.32651 18.587H10.4569V37.174ZM37.3048 21.024L34.6819 35.4805C34.594 35.9616 34.3381 36.3959 33.9599 36.706C33.5817 37.0161 33.1057 37.182 32.6167 37.174H14.5874V16.9555L20.2048 4.3164C20.783 4.48497 21.32 4.77158 21.7819 5.15814C22.2438 5.54471 22.6205 6.02282 22.8883 6.56231C23.1561 7.10179 23.3092 7.69094 23.3378 8.29256C23.3665 8.89418 23.2701 9.49521 23.0548 10.0577L21.9602 13.011C21.727 13.6352 21.6482 14.3066 21.7307 14.9678C21.8132 15.6291 22.0544 16.2605 22.4338 16.8084C22.8132 17.3562 23.3196 17.8041 23.9096 18.1138C24.4996 18.4235 25.1558 18.5859 25.8222 18.587H35.2396C35.543 18.5866 35.8427 18.6529 36.1176 18.7814C36.3924 18.9099 36.6356 19.0974 36.8298 19.3305C37.0287 19.5604 37.1744 19.8314 37.2566 20.1242C37.3387 20.4169 37.3551 20.7242 37.3048 21.024Z"
                    fill="#41E1BB" />
                </svg>

              </div><span>Без перерывов и очереди</span>
            </li>
            <li>
              <div class="icon">
                <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M20.5 0.391602C9.184 0.391602 0 9.5756 0 20.8916C0 32.2076 9.184 41.3916 20.5 41.3916C31.816 41.3916 41 32.2076 41 20.8916C41 9.5756 31.816 0.391602 20.5 0.391602ZM20.5 37.2916C11.4595 37.2916 4.1 29.9321 4.1 20.8916C4.1 11.8511 11.4595 4.4916 20.5 4.4916C29.5405 4.4916 36.9 11.8511 36.9 20.8916C36.9 29.9321 29.5405 37.2916 20.5 37.2916ZM28.454 13.2861L16.4 25.3401L12.546 21.4861C11.7465 20.6866 10.455 20.6866 9.6555 21.4861C8.856 22.2856 8.856 23.5771 9.6555 24.3766L14.965 29.6861C15.7645 30.4856 17.056 30.4856 17.8555 29.6861L31.365 16.1766C32.1645 15.3771 32.1645 14.0856 31.365 13.2861C30.5655 12.4866 29.2535 12.4866 28.454 13.2861Z"
                    fill="#41E1BB" />
                </svg>

              </div><span>Лечение сложных заболеваний</span>
            </li>
            <li>
              <div class="icon">
                <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M20.5 24.9916C20.9055 24.9916 21.3018 24.8714 21.6389 24.6461C21.976 24.4209 22.2388 24.1007 22.394 23.7261C22.5491 23.3515 22.5897 22.9393 22.5106 22.5417C22.4315 22.144 22.2363 21.7787 21.9496 21.492C21.6629 21.2053 21.2976 21.0101 20.8999 20.931C20.5023 20.8519 20.0901 20.8925 19.7155 21.0476C19.3409 21.2028 19.0207 21.4656 18.7955 21.8027C18.5702 22.1398 18.45 22.5361 18.45 22.9416C18.45 23.4853 18.666 24.0067 19.0504 24.3912C19.4349 24.7756 19.9563 24.9916 20.5 24.9916ZM30.75 24.9916C31.1555 24.9916 31.5518 24.8714 31.8889 24.6461C32.226 24.4209 32.4888 24.1007 32.644 23.7261C32.7991 23.3515 32.8397 22.9393 32.7606 22.5417C32.6815 22.144 32.4863 21.7787 32.1996 21.492C31.9129 21.2053 31.5476 21.0101 31.1499 20.931C30.7523 20.8519 30.3401 20.8925 29.9655 21.0476C29.5909 21.2028 29.2707 21.4656 29.0455 21.8027C28.8202 22.1398 28.7 22.5361 28.7 22.9416C28.7 23.4853 28.916 24.0067 29.3004 24.3912C29.6849 24.7756 30.2063 24.9916 30.75 24.9916ZM20.5 33.1916C20.9055 33.1916 21.3018 33.0714 21.6389 32.8461C21.976 32.6209 22.2388 32.3007 22.394 31.9261C22.5491 31.5515 22.5897 31.1393 22.5106 30.7417C22.4315 30.344 22.2363 29.9787 21.9496 29.692C21.6629 29.4053 21.2976 29.2101 20.8999 29.131C20.5023 29.0519 20.0901 29.0925 19.7155 29.2476C19.3409 29.4028 19.0207 29.6656 18.7955 30.0027C18.5702 30.3398 18.45 30.7361 18.45 31.1416C18.45 31.6853 18.666 32.2067 19.0504 32.5912C19.4349 32.9756 19.9563 33.1916 20.5 33.1916ZM30.75 33.1916C31.1555 33.1916 31.5518 33.0714 31.8889 32.8461C32.226 32.6209 32.4888 32.3007 32.644 31.9261C32.7991 31.5515 32.8397 31.1393 32.7606 30.7417C32.6815 30.344 32.4863 29.9787 32.1996 29.692C31.9129 29.4053 31.5476 29.2101 31.1499 29.131C30.7523 29.0519 30.3401 29.0925 29.9655 29.2476C29.5909 29.4028 29.2707 29.6656 29.0455 30.0027C28.8202 30.3398 28.7 30.7361 28.7 31.1416C28.7 31.6853 28.916 32.2067 29.3004 32.5912C29.6849 32.9756 30.2063 33.1916 30.75 33.1916ZM10.25 24.9916C10.6555 24.9916 11.0518 24.8714 11.3889 24.6461C11.726 24.4209 11.9888 24.1007 12.144 23.7261C12.2991 23.3515 12.3397 22.9393 12.2606 22.5417C12.1815 22.144 11.9863 21.7787 11.6996 21.492C11.4129 21.2053 11.0476 21.0101 10.6499 20.931C10.2523 20.8519 9.84009 20.8925 9.4655 21.0476C9.09091 21.2028 8.77074 21.4656 8.54549 21.8027C8.32023 22.1398 8.2 22.5361 8.2 22.9416C8.2 23.4853 8.41598 24.0067 8.80043 24.3912C9.18488 24.7756 9.70631 24.9916 10.25 24.9916ZM34.85 4.4916H32.8V2.4416C32.8 1.89791 32.584 1.37648 32.1996 0.992033C31.8151 0.607583 31.2937 0.391602 30.75 0.391602C30.2063 0.391602 29.6849 0.607583 29.3004 0.992033C28.916 1.37648 28.7 1.89791 28.7 2.4416V4.4916H12.3V2.4416C12.3 1.89791 12.084 1.37648 11.6996 0.992033C11.3151 0.607583 10.7937 0.391602 10.25 0.391602C9.70631 0.391602 9.18488 0.607583 8.80043 0.992033C8.41598 1.37648 8.2 1.89791 8.2 2.4416V4.4916H6.15C4.51892 4.4916 2.95464 5.13955 1.80129 6.29289C0.647945 7.44624 0 9.01052 0 10.6416V35.2416C0 36.8727 0.647945 38.437 1.80129 39.5903C2.95464 40.7437 4.51892 41.3916 6.15 41.3916H34.85C36.4811 41.3916 38.0454 40.7437 39.1987 39.5903C40.3521 38.437 41 36.8727 41 35.2416V10.6416C41 9.01052 40.3521 7.44624 39.1987 6.29289C38.0454 5.13955 36.4811 4.4916 34.85 4.4916ZM36.9 35.2416C36.9 35.7853 36.684 36.3067 36.2996 36.6912C35.9151 37.0756 35.3937 37.2916 34.85 37.2916H6.15C5.60631 37.2916 5.08488 37.0756 4.70043 36.6912C4.31598 36.3067 4.1 35.7853 4.1 35.2416V16.7916H36.9V35.2416ZM36.9 12.6916H4.1V10.6416C4.1 10.0979 4.31598 9.57648 4.70043 9.19203C5.08488 8.80758 5.60631 8.5916 6.15 8.5916H34.85C35.3937 8.5916 35.9151 8.80758 36.2996 9.19203C36.684 9.57648 36.9 10.0979 36.9 10.6416V12.6916ZM10.25 33.1916C10.6555 33.1916 11.0518 33.0714 11.3889 32.8461C11.726 32.6209 11.9888 32.3007 12.144 31.9261C12.2991 31.5515 12.3397 31.1393 12.2606 30.7417C12.1815 30.344 11.9863 29.9787 11.6996 29.692C11.4129 29.4053 11.0476 29.2101 10.6499 29.131C10.2523 29.0519 9.84009 29.0925 9.4655 29.2476C9.09091 29.4028 8.77074 29.6656 8.54549 30.0027C8.32023 30.3398 8.2 30.7361 8.2 31.1416C8.2 31.6853 8.41598 32.2067 8.80043 32.5912C9.18488 32.9756 9.70631 33.1916 10.25 33.1916Z"
                    fill="#41E1BB" />
                </svg>

              </div><span>Работаем без выходных</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- Текстовый блок  -->
      <div class="simple-text">
        <p class="lead">Клиника Узи+ – сеть частных медицинских центров, состоящая из 2 филиалов в Смоленске. Более
          37 высококвалифицированных врачей различных профилей и медицинских работников ежедневно помогают пациентам
          заботиться о здоровье в нашей сети клиник.</p>

        <p>Мы заботимся о здоровье наших пациентов с первых месяцев жизни. Специалисты высокого профессионального
          уровня используют самые эффективные методики для диагностики и лечения заболеваний, опираясь на научные
          исследования, нашу внутреннюю аналитику, знания и многолетний опыт.</p>

        <p>Наша клиника оснащена новейшим диагностическим оборудованием от ведущих производителей Европы и США.
          В совокупности с многолетним опытом наших специалистов, это позволяет специалистам сети клиник " Узи +"
          выполнять высокоточные исследования и диагностику экспертного уровня в кратчайшие сроки используя различные
          методики, включая авторские.</p>

        <p>На протяжении 20 лет нам доверили своё здоровье более миллиона пациентов, для многих клиника " Узи +" стала
          семейной клиникой. Именно это подтверждает высокое качество и эффективность медицинских услуг в нашей сети
          клиник.</p>
      </div>
    </div>
  </section>

  <section class="photo-slider" id="js-photo-slider">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <a href="./img/photo-gallery/1.jpg" data-fancybox="gallery" data-caption="Подпись к фотографии">
          <img src="./img/photo-gallery/1.jpg">
          </a>
          
        </div>
        <div class="swiper-slide">
        <a href="./img/photo-gallery/2.jpg" data-fancybox="gallery" data-caption="Подпись к фотографии">
          <img src="./img/photo-gallery/2.jpg">
          </a>
        </div>
        <div class="swiper-slide">
        <a href="./img/photo-gallery/3.jpg" data-fancybox="gallery" data-caption="Подпись к фотографии">
          <img src="./img/photo-gallery/3.jpg">
          </a>
        </div>
        <div class="swiper-slide">
        <a href="./img/photo-gallery/4.jpg" data-fancybox="gallery" data-caption="Подпись к фотографии">
          <img src="./img/photo-gallery/4.jpg">
          </a>
        </div>
        <div class="swiper-slide">
        <a href="./img/photo-gallery/5.jpg" data-fancybox="gallery" data-caption="Подпись к фотографии">
          <img src="./img/photo-gallery/5.jpg">
          </a>
        </div>
        <div class="swiper-slide">
        <a href="./img/photo-gallery/6.jpg" data-fancybox="gallery" data-caption="Подпись к фотографии">
          <img src="./img/photo-gallery/6.jpg">
          </a>
        </div>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <button class="slider-button slider-button--prev" tabindex="0" aria-label="Previous slide"
        aria-controls="swiper-wrapper-10199f6fe2e9a4ce1"><svg width="27" height="22" viewBox="0 0 27 22" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M25 11.375L2 11.375M10.625 20L2 11.375L10.625 2.75" stroke="black" stroke-width="4"
            stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </button>
      <button class="slider-button slider-button--next" tabindex="0" aria-label="Next slide"
        aria-controls="swiper-wrapper-10199f6fe2e9a4ce1"><svg width="27" height="22" viewBox="0 0 27 22" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M2 10.625H25M16.375 2L25 10.625L16.375 19.25" stroke="black" stroke-width="4" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </svg>
      </button>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  </section>

  <?php
    // Промо блок 2
    include "./components/promo-3.php";
    include "./components/promo-4.php";
    // Рейтинг
    include "./components/ratings.php";
    // сертификаты 
    include "./components/certificates.php";
  ?>


</main>
<?php 
  // подвал 
  include "./components/footer.php";
  // скрипты 
  include "./components/scripts.php"; 
  ?>
</body>

</html>