<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <meta name="author" content="./humans.txt">

  <title>Медицинский центр УЗИ +, Смоленск. Официальный сайт</title>
  <meta name="description" content="Медицинские услуги в Смоленске. Ультразвуковая диагностика, акушер-гинекологов, терапевта">
  <meta name="keywords" content="ультразвуковая диагностика (всех сроков беременности,  малого таза, молочных желез, брюшной полости, почек, мочевого пузыря, предстательной и  щитовидной желез, головного мозга детям, сердца, сосудов головного мозга и шеи, сосудов верхних и нижних конечностей, слюнных желез, мягких тканей), приемы специалистов: акушер-гинекологов, терапевта, гастроэнтеролога, пульмонолога, кардиолога, невролога, онколога, маммолога, эндокринолога, уролога, педиатра, неонатолога, аллерголога-иммунолога. исследования : ЭКГ, Холтер (суточное мониторирование ЭКГ). все види анализов">

  <link rel="stylesheet" href="./libs/normalize.min.css">
  <link rel="stylesheet" href="./libs/swiper-bundle.min.css">
  <link rel="stylesheet" href="./libs/bvi.min.css" type="text/css">
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <?php
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