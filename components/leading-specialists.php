<?php 
  $sql = "SELECT * FROM `doctors` WHERE id IN (2, 3, 5, 6, 7, 8)";
  $result = $data_base->query($sql);
  $doctors = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="leading-specialists section">
  <div class="wrapper">
    <h2 class="title">Ведущие специалисты</h2>
    <div class="slider">
      <div class="swiper">
        <div class="swiper-wrapper">

      <?php  
        foreach( $doctors as $item) {
        include "./templates/_leading-specialist-item.php"; 
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
          <path d="M2 10.625H25M16.375 2L25 10.625L16.375 19.25" stroke="black" stroke-width="4" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </button>
      <div class="swiper-pagination"></div>

    </div>




  </div>
</section>