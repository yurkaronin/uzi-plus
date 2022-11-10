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

  <title>Медицинский центр УЗИ плюс, Смоленск. Официальный сайт</title>
  <meta name="description" content="Это техническая страница проекта для демонстрации всего списка страниц.">

  <link rel="stylesheet" href="./libs/normalize.min.css">
  <link rel="stylesheet" href="./libs/swiper-bundle.min.css">
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <?php
include "./components/up-button.php";
include "./components/header.php";
include "./components/navigation.php";
?>
  <main>
    <!-- первый экран со слайдером -->
    <?php include "./components/hero.php";
    // Преимущества
    include "./components/benefits.php";
    // Основные направления анонсы
    include "./components/main-directions.php";
    // Услуги для детей
    include "./components/service-preview.php";
    // промо блок
    include "./components/promo.php";
    // Услуги взрослым
    include "./components/service-preview-2.php";
    // промо блок
    include "./components/promo-2.php";
    // мобильные ссылки нижнем экране
    include "./components/navigation-mobile.php"; ?>
  </main>
  <?php include "./components/scripts.php"; ?>
</body>

</html>
