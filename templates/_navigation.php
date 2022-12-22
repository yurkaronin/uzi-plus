<nav class="navigation">
  <div class="wrapper">

    <ul class="navigation__list">
      <li><a class="navigation__link" href="./index.php">Главная</a></li>

      <li><a class="navigation__link navigation__link--mod" href="./services-for-children.php">Услуги детям
          <svg width="13" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="m11.346 1-5 4-5-4" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
        <ul class="navigation__sublist">
        <?php 
          foreach( $category_children as $item) {
            ?>
            <li><a href="service-item-page.php?service-cat=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></li>
            <?php 
            }
        ?>
          
          
        </ul>

      </li>

      <li>
        <a class="navigation__link navigation__link--mod" href="./services-for-adult.php">Услуги взрослым
          <svg width="13" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="m11.346 1-5 4-5-4" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
        <ul class="navigation__sublist">
        <?php 
          foreach( $category_adult as $item) {
            ?>
            <li><a href="service-item-page.php?service-cat=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></li>
            <?php 
            }
        ?>
        </ul>
      </li>
      <li>
        <a class="navigation__link" href="./all-specialists.php">Специалисты</a>
      </li>
      <li>
        <a class="navigation__link navigation__link--mod" href="./all-prices.php">Цены
          <svg width="13" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="m11.346 1-5 4-5-4" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
        <ul class="navigation__sublist navigation__sublist--mod">
          <li><a href="./prices-ultrasound-for-adults.php">Ультразвуковые исследования для взрослых</a></li>
          <li><a href="./prices-ultrasound-for-children.php">Ультразвуковые исследования для детей</a></li>
          <li><a href="./prices-expert-advice.php">Консультация специалистов</a></li>
          <li><a href="./prices-consultation-pediatric-specialists.php">Консультация детских специалистов</a></li>
          <li><a href="./prices-obstetrics-and-gynecology.php">Акушерство и гинекология</a></li>
          <li><a href="./prices-sampling.php">Забор анализов</a></li>
        </ul>
      </li>
      <li>
        <a class="navigation__link" href="./all-reviews.php">Отзывы</a>
      </li>
      <li>
        <a class="navigation__link" href="./contacts.php">Контакты</a>
      </li>
    </ul>

    <!-- элементы для мобильных устройств  -->
    <div class="mobile-elements">
      <div class="wrapper">
        <ul class="list-reset">
          <li>
            <span>г. Смоленск, ул. Попова, д. 68</span>
            <a href="tel:+74812605101" class="tel">+7(4812) 60-51-01</a>
            <a href="tel:+74812615101" class="tel">+7(4812) 61-51-01</a>
          </li>
          <li>
            <span>г. Смоленск, пр. Гагарина, д. 14/2</span>
            <a href="tel:+74812562457" class="tel">+7(4812) 56-24-57</a>
            <a href="tel:+74812645101" class="tel">+7(4812) 64-51-01</a>
          </li>
          <li class="mobile-elements__office-hours">
            График работы:<br> <span>пн-пт 9-19, сб 9-15, вс выходной</span>
          </li>
        </ul>

      </div>


    </div>

  </div>

</nav>