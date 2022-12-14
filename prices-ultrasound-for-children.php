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
  <section class="all-reviews section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a href="./all-prices.php"><span>Цены</span></a></li>
        <li><a><span>Ультразвуковые исследования для детей</span></a></li>
      </ul>
      <br>
      <h1 class="title">Ультразвуковые исследования для детей</h1>

      <table class="table price-list hover">
        <thead>
          <tr>
            <th>
              №
            </th>
            <th>
              Наименование услуги
            </th>
            <th>
              Стоимость, руб.
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              1
            </td>
            <td>
              УЗИ сердца
            </td>
            <td>
              1200
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td>
              УЗИ головного мозга (нейросонография)
            </td>
            <td>
              900
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td>
              УЗИ брюшной полости
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              4
            </td>
            <td>
              УЗИ щитовидной железы
            </td>
            <td>
              800
            </td>
          </tr>
          <tr>
            <td>
              5
            </td>
            <td>
              УЗИ почек
            </td>
            <td>
              800
            </td>
          </tr>
          <tr>
            <td>
              6
            </td>
            <td>
              УЗИ малого таза (гинекология, абдоминально)
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              7
            </td>
            <td>
              УЗИ грудных желез
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              8
            </td>
            <td>
              УЗИ мочевого пузыря
            </td>
            <td>
              500
            </td>
          </tr>
          <tr>
            <td>
              9
            </td>
            <td>
              УЗИ одной группы лимфоузлов
            </td>
            <td>
              500
            </td>
          </tr>
          <tr>
            <td>
              10
            </td>
            <td>
              УЗИ отдельного органа
            </td>
            <td>
              500
            </td>
          </tr>
          <tr>
            <td>
              11
            </td>
            <td>
              УЗИ тазобедренных суставов (детям до 1 года)
            </td>
            <td>
              900
            </td>
          </tr>
        </tbody>
      </table>


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