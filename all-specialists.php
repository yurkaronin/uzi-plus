<?php
require_once('config.php');

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
      <p class="all-specialists__lead">Прием ведут 49 профильных специалистов. Без очередей, по предварительной
        записи.<br>
        Широкий спектр диагностических услуг, процедурный кабинет. Медицинские справки. Дневной стационар. Работаем:
        пн-пт 9-19, сб 9-15</p>

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


      <div class="all-specialists__grid">
        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=5
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Акушерство-гинекология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=6
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Аллергология-иммунология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=7
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Гастроскопия - ВЭГДС</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=8
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Гастроэнтерология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=9
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Кардиология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=10
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Неврология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=11
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Онкология-маммология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=12
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Оториноларингология(ЛОР)</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=13
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Психиатрия-наркология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=14
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Пульмонология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=15
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Ревматология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=16
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Сосудистая хирургия</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=17
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Терапия</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=18
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Травматология-ортопедия</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=19
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Ультразвуковая диагностика(УЗИ)</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=20
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Урология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=21
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Функциональная диагностика</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=22
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Хирургия</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=23
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Эндокринология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=24
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская аллергология-иммунология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=25
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская гастроэнтерология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=26
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская кардиология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=27
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская оториноларингология(ЛОР)</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=28
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская ортопедия</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=29
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Педиатрия</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=30
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская пульмонология</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=31
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская ультразвуковая диагностика (УЗИ)</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
        ?>

        <?php 
          $sql = "SELECT * FROM doctors JOIN doctors_category JOIN service_category
          ON doctors.id=doctors_category.id_doctor AND doctors_category.Id_category=service_category.id
          WHERE doctors_category.id_category=32
          ORDER BY doctors.name ASC;";
          $result = $data_base->query($sql);
          $doctors = $result->fetchAll(PDO::FETCH_ASSOC); ?>
        <h2 class="title">Детская Функциональная диагностика</h2>
        <?php 
          foreach( $doctors as $item) {
            include "./templates/_leading-specialists-card.php"; 
          };
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