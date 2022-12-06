<?php
include "./components/head.php";
include "./components/up-button.php";
include "./components/header.php";
?>
  <main>
    <!-- первый экран со слайдером -->
    <?php
    include "./components/hero.php";
    // Преимущества
    include "./components/benefits.php";
    // Основные направления анонсы
    include "./components/main-directions.php";
    // Услуги для детей
    include "./components/service-preview.php";
    // Промо блок
    include "./components/promo.php";
    // Услуги взрослым
    include "./components/service-preview-2.php";
    // Промо блок 2
    include "./components/promo-2.php";
    // Ведущие специалисты
    include "./components/leading-specialists.php";
    // Рейтинг
    include "./components/ratings.php";
    // Мобильные ссылки нижнем экране
    include "./components/navigation-mobile.php";
    // часто задаваемые вопросы 
    include "./components/faq.php";
    // страхование 
    include "./components/insurance-companies.php";
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