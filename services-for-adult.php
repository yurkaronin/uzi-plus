<?php
require_once('config.php');
// переменные 
$page_name = "";
$page_desc = "";
$seo_title = 'Услуги медицинского центра в Смоленске';
$seo_text = 'Медицинский центр «УЗИ +» - одна из первых частных поликлиник г. Смоленска для детей и взрослых. За 4 года существования мы выросли из кабинета ультразвуковой диагностики до полноценного многопрофильного медицинского центра с квалифицированным штатом сотрудников. В нашей клинике женщины и мужчины, а также их дети могут пройти полное комплексное медицинское обследование. Так что, если вы задались вопросом "Где сделать УЗИ в Смоленске?", ответ простой: "Добро пожаловать к нам!".';
include "./templates/_head.php";
include "./templates/_header.php";

$sql_two = "SELECT * FROM `service` WHERE service_category  <= 23 LIMIT 6"; 
$result_two = $data_base->query($sql_two);
$service_two = $result_two->fetchAll(PDO::FETCH_ASSOC);

$sql_three = "SELECT * FROM `doctors` WHERE children = 0 LIMIT 6";
$result_three = $data_base->query($sql_three);
$doctors = $result_three->fetchAll(PDO::FETCH_ASSOC);

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
          <p class="service-item__text">В МЦ «УЗИ+» представлен широкий спектр медицинских услуг, которые позволяют
            провести диагностику различных заболеваний и назначить лечение взрослым пациентам</p>
            <p>Здоровье - это то, что мы всегда желаем своим близким во время Дня Рождения или какого-нибудь другого праздника. Здоровья не может быть слишком много, его всегда не хватает. У нас порой не хватает ни времени, ни денег, чтобы следить за своим здоровьем и поддерживать его на должном уровне. Но когда мы серьёзно заболеваем, то начинаем понимать, что здоровье - это важнейшая вещь в нашей жизни.</p>
        </div>
        <div class="service-item__right">
          <div class="service-item__image">
            <img src="./img/artwork/services/gastrointerologiya.svg" alt="изображение услуги">
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="service-preview section">
    <div class="wrapper">
      <ul class="service-preview__list">
        <?php 
        $sql = "SELECT * FROM `service_category` WHERE id < 23";
        $result = $data_base->query($sql);
        $service_preview = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach( $service_preview as $item) {
          include "./templates/_service-category-preview-item.php"; 
        };
      ?>

      </ul>
    </div>
  </section>
  
  <!-- список услуг услуг  -->
  <section class="services-group section">
    <div class="wrapper">
      <h2 class="title">Последние просматриваемые услуги</h2>
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

  <?php include "./components/promo-3.php"; ?>

<!-- доктора  -->
  <section class="leading-specialists section">
    <div class="wrapper">
      <h2 class="title">Ведущие специалисты</h2>
      <div class="slider">
        <div class="swiper">
          <div class="swiper-wrapper">

            <?php  
        foreach( $doctors as $item) {
        ?>
            <div class="swiper-slide">
              <div class="grid">
                <div class="left">
                  <div class="photo">

                    <?php if($item['photo']) :  ?>
                    <img src="<?php echo$item['photo']; ?>" alt="<?php echo$item['name']; ?>" width="448">
                    <?php else:  ?>
                    <img src="./img/people/temporary-photo.jpg" alt="<?php echo$item['name']; ?>" width="448">
                    <?php endif; ?>

                  </div>
                  <span class="name"><?php echo$item['name']; ?></span>
                </div>

                <div class="right">
                  <?php if($item['work_experience']) :  ?>
                  <span class="experience">Стаж работы: <?php echo$item['work_experience']; ?></span>
                  <?php endif; ?>
                  <div class="text">
                    <ul>
                      <li><strong>Где принимает:</strong> все филиалы</li>
                      <?php if($item['specialization']) :  ?>
                      <li><?php echo$item['specialization']; ?></li>
                      <?php endif; ?>
                      <li><strong>Кого принимает:</strong> Взрослые и дети</li>
                      <li><strong>Сфера деятельности:</strong> акушерство и гинекология: поликлиническое, неоперативное,
                        оперативное, гинекология детского возраста, эндокринология-гинекология, планирование и ведение
                        беременности,
                        невынашивание беременности, гинекология климактерического периода, кольпоскопия, патология шейки
                        матки.
                      </li>
                    </ul>
                  </div>
                  <div class="buttons">
                    <a href="#" class="button button--icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.3885 1.61151C19.8789 1.09944 19.2729 0.693387 18.6054 0.416794C17.938 0.140201 17.2225 -0.00145225 16.5 1.12249e-05C15.7776 -0.000961059 15.0622 0.140917 14.3948 0.417481C13.7275 0.694046 13.1214 1.09984 12.6115 1.61151L0.0213125 14.201L0 22H7.777L20.3885 9.38851C20.8994 8.87799 21.3046 8.27181 21.5811 7.6046C21.8576 6.9374 22 6.22224 22 5.50001C22 4.77778 21.8576 4.06263 21.5811 3.39542C21.3046 2.72821 20.8994 2.12203 20.3885 1.61151ZM6.6385 19.25H5.5V16.5H2.76581L2.76856 15.345L14.5558 3.55576L18.4443 7.44426L6.6385 19.25Z"
                          fill="black" />
                      </svg>
                      Записаться на приём</a>
                  </div>
                </div>

              </div>
            </div>
            <?php
      }; 
      ?>

          </div>
        </div>


        <!-- кнопки слайдера  -->
        <button class="slider-button slider-button--prev"><svg width="27" height="22" viewBox="0 0 27 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M25 11.375L2 11.375M10.625 20L2 11.375L10.625 2.75" stroke="black" stroke-width="4"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <button class="slider-button slider-button--next"><svg width="27" height="22" viewBox="0 0 27 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M2 10.625H25M16.375 2L25 10.625L16.375 19.25" stroke="black" stroke-width="4"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <div class="swiper-pagination"></div>

      </div>




    </div>
  </section>


  <?php include "./components/promo-4.php"; ?>
  <?php if($seo_title && $seo_text) :  ?>
  <section class="section">
    <div class="wrapper">
      <h2 class="title"><?php echo $seo_title; ?></h2>
      <?php echo $seo_text; ?>
    </div>
  </section>
  <?php endif; ?>


  <?php include "./templates/_footer.php"; ?>