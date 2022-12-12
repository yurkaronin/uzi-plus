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
  <section class="section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a><span>Нормативные документы</span></a></li>
      </ul>
      <br>
      <h1 class="title">Нормативные документы медицинского центра УЗИ +</h1>
      <div class="all-reviews__lead">
        <p class="">Здесь может оставить ознакомиться с актуальными правовыми документами, функционирующие как в рамках
          медицинских предприятий РФ, так и закрепленные на локальном уровне, регулирующие и регламентирующие
          деятельность нашего медицинского центра УЗИ +.</p>
      </div>


      <h2 class="title">Документация</h2>

      <ul class="green-bullets">
        <li><a href="/documentation/files/normativno-pravovaya-basa.pdf" target="_blank">Нормативно-правовая база</a>
        </li>
        <li><a href="./documentation/files/dogovor-ob-okazanii-platnyh-uslug.pdf" target="_blank">Договор об оказании
            платных медицинских услуг</a></li>
        <li><a href="./documentation/files/otkaz-pacienta-ot-med-vmeshatelstva.pdf" target="_blank">Отказ пациента от
            мед. вмешательства</a></li>
        <li><a href="./documentation/files/informirovannoe-dobrovolnoe-soglasie.pdf" target="_blank">Информированное
            добровольное согласие населения</a></li>
        <li><a href="./documentation/files/pravila-predostavleniya-uslug.pdf" target="_blank">Правила предоставления
            платных медицинских услуг</a></li>
        <li><a href="./documentation/files/pravila-povedeniya.pdf" target="_blank">Правила поведения пациентов в
            Медицинском центре</a></li>
        <li><a href="./documentation/files/confident.pdf" target="_blank">Политика обработки и защиты персональных
            данных</a></li>
      </ul>
      <br>

      <ul class="documents-list">
        <li>
          <a class="documents__link" href="./img/documents/certificate.jpg" data-fancybox="gallery-documents"
            data-caption="Санитарно-эпидемиологическое заключение">
            <img src="./img/documents/certificate.jpg" width="305" alt="Санитарно-эпидемиологическое заключение">
          </a>
          <p class="documents__description">Санитарно-эпидемиологическое заключение</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/certificate-2.jpg" data-fancybox="gallery-documents"
            data-caption="Приложение к санитарно-эпидемиологическому заключению">
            <img src="./img/documents/certificate-2.jpg" width="305"
              alt="Приложение к санитарно-эпидемиологическому заключению">
          </a>
          <p class="documents__description">Приложение к санитарно-эпидемиологическому заключению</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/certificate-fns.jpg" data-fancybox="gallery-documents"
            data-caption="Свидетельство о гос. регистрации">
            <img src="./img/documents/certificate-fns.jpg" width="305" alt="Свидетельство о гос. регистрации">
          </a>
          <p class="documents__description">Свидетельство о гос. регистрации</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/certificate-fns-2.jpg" data-fancybox="gallery-documents"
            data-caption="Свидетельство о постановке на учет в налоговой">
            <img src="./img/documents/certificate-fns-2.jpg" width="305"
              alt="Свидетельство о постановке на учет в налоговой">
          </a>
          <p class="documents__description">Свидетельство о постановке на учет в налоговой</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/license-1.jpg" data-fancybox="gallery-documents"
            data-caption="Лицензия на осуществление медицинской деятельности">
            <img src="./img/documents/license-1.jpg" width="305"
              alt="Лицензия на осуществление медицинской деятельности">
          </a>
          <p class="documents__description">Лицензия на осуществление медицинской деятельности</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/license-2.jpg" data-fancybox="gallery-documents"
            data-caption="Лицензия на осуществление медицинской деятельности 2 часть">
            <img src="./img/documents/license-2.jpg" width="305"
              alt="Лицензия на осуществление медицинской деятельности 2 часть">
          </a>
          <p class="documents__description">Лицензия на осуществление медицинской деятельности 2 часть</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/license-addendum.jpg" data-fancybox="gallery-documents"
            data-caption="Приложение к Лицензии">
            <img src="./img/documents/license-addendum.jpg" width="305" alt="Приложение к Лицензии">
          </a>
          <p class="documents__description">Приложение к Лицензии</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/license-addendum-2.jpg" data-fancybox="gallery-documents"
            data-caption="Приложение 2 к Лицензии">
            <img src="./img/documents/license-addendum-2.jpg" width="305" alt="Приложение 2 к Лицензии">
          </a>
          <p class="documents__description">Приложение 2 к Лицензии</p>
        </li>
        <li>
          <a class="documents__link" href="./img/documents/license-addendum-3.jpg" data-fancybox="gallery-documents"
            data-caption="Приложение 2 к Лицензии 2 страница">
            <img src="./img/documents/license-addendum-3.jpg" width="305" alt="Приложение 2 к Лицензии 2 страница">
          </a>
          <p class="documents__description">Приложение 2 к Лицензии 2 страница</p>
        </li>


      </ul>

    </div>
  </section>
  <section class="section section--gray">
    <div class="wrapper">
      <h2>Контактная информация надзорных органов</h2>
      <ul>

        <li>
          <span class="green-text">Департамент Смоленской области по здравоохранению</span><br>
          <a href="http://maps.yandex.ru/-/CVGnEEOy" target="_blank">214008, г. Смоленск, пл. Ленина, д. 1</a><br>
          +7 (4812) 29-22-01
        </li>

        <li>
          <span class="green-text">Территориальный орган Федеральной службы по надзору в сфере здравоохранения:
            Управление Росздравнадзора по Смоленской области</span><br>
          <a href="http://maps.yandex.ru/-/CVGnEQYY" target="_blank">г. Смоленск, ул. Кашена, д. 1, 4 этаж, кабинет
            405</a><br>
          +7 (4812) 27-91-19
        </li>

        <li>
          <span class="green-text">Территориальный орган Федеральной службы по надзору в сфере защиты прав
            потребителей и благополучия человека: Управление Роспотребнадзора по Смоленской области</span><br>
          <a href="http://maps.yandex.ru/-/CVGnEY-5" target="_blank">214018, г. Смоленск, ул. Тенишевой, д.
            26</a><br>
          +7 (4812) 38-25-10
        </li>

        <li>
          <span class="green-text">Прокуратура Смоленской области</span><br>
          <a href="http://maps.yandex.ru/-/CVGnE4os" target="_blank">214000, г. Смоленск, ул. Дохтурова, д.
            2</a><br>
          +7 (4812) 38-10-43
        </li>

        <li>
          <span class="green-text">Управление по потребительскому рынку и развитию предпринимательства Администрации
            г. Смоленска</span><br>
          <a href="http://maps.yandex.ru/-/CVGnEBma" target="_blank">214000, г. Смоленск, ул. Дзержинского, д.
            8</a><br>
          +7 (4812) 38-25-49
        </li>
      </ul>
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