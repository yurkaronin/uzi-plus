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
    // Ведущие специалисты
    include "./components/ratings.php";
    // Мобильные ссылки нижнем экране
    include "./components/navigation-mobile.php";
    ?>
    <section class="faq section">
      <div class="wrapper">
        <h2 class="title">Часто задаваемые вопросы</h2>

        <ul class="faq__list">
          <?php 
        include "./components/items/faq-item.php";
        include "./components/items/faq-item.php";
        include "./components/items/faq-item.php";
        include "./components/items/faq-item.php";
        include "./components/items/faq-item.php";
        ?>
        </ul>

      </div>
    </section>

    <section class="insurance-companies section">
      <div class="wrapper">
        <h2 class="title">Страховые компании</h2>
        <p class="subtitle">Медицинский центр «УЗИ+» сотрудничает со следующими страховыми компаниями:</p>

        <h3 class="group-title">Программы ДМС</h3>
        <ul class="insurance-companies__list">

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/1.png" alt="лого" width="304">
            <p>СОГАЗ – АО «Страховое общество
              газовой промышленности»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/2.png" alt="лого" width="304">
            <p>СПАО «ИНГОССТРАХ»

            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/3.png" alt="лого" width="304">
            <p>ООО «Бест-Доктор»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/4.png" alt="лого" width="304">
            <p>АО «Группа Ренессанс
              Страхование»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/5.png" alt="лого" width="304">
            <p>ООО «Регион-Медсервис»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/6.png" alt="лого" width="304">
            <p>ООО «Абсолют Страхование»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/7.png" alt="лого" width="304">
            <p>ООО СК «Альянс Жизнь»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/8.png" alt="лого" width="304">
            <p>АО «Страховая компания
              «СОГАЗ-МЕД»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/9.png" alt="лого" width="304">
            <p>САО «РЕСО-Гарантия»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/10.png" alt="лого" width="304">
            <p>ООО «Страховая компания
              «СОГЛАСИЕ»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/11.png" alt="лого" width="304">
            <p>АО «Совкомбанк Страхование»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/12.png" alt="лого" width="304">
            <p>САО «ВСК»
            </p>
          </li>

          <li class="insurance-companies__item">
            <img src="./img/life-insurance/13.png" alt="лого" width="304">
            <p>АО «АльфаСтрахование»
            </p>
          </li>
        </ul>
      </div>
    </section>

  </main>
  <?php include "./components/scripts.php"; ?>
</body>

</html>