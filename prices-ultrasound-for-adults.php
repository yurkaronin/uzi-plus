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
        <li><a><span>Ультразвуковые исследования для взрослых</span></a></li>
      </ul>
      <br>
      <h1 class="title">Ультразвуковые исследования для взрослых</h1>

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
              УЗИ брюшной полости
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td>
              УЗИ почек
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
              УЗИ надпочечников
            </td>
            <td>
              600
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
              900
            </td>
          </tr>
          <tr>
            <td>
              5
            </td>
            <td>
              УЗИ органов малого таза
            </td>
            <td>
              900
            </td>
          </tr>
          <tr>
            <td>
              6
            </td>
            <td>
              Фолликулометрия (пять исследований у одного специалиста)<br>
            </td>
            <td>
              2200
            </td>
          </tr>
          <tr>
            <td>
              7
            </td>
            <td>
              УЗИ молочных желез
            </td>
            <td>
              900
            </td>
          </tr>
          <tr>
            <td>
              8
            </td>
            <td>
              УЗИ беременности I триместр (12-14 неделя)
            </td>
            <td>
              1200
            </td>
          </tr>
          <tr>
            <td>
              9
            </td>
            <td>
              УЗИ беременности II&nbsp; скрининг (20-24 нед)
            </td>
            <td>
              1800
            </td>
          </tr>
          <tr>
            <td>
              10
            </td>
            <td>
              УЗИ беременности II&nbsp; -&nbsp; III триместр
            </td>
            <td>
              1800
            </td>
          </tr>
          <tr>
            <td>
              11
            </td>
            <td>
              УЗИ сердца
            </td>
            <td>
              1500
            </td>
          </tr>
          <tr>
            <td>
              12
            </td>
            <td>
              УЗИ мочевого пузыря (с определением остаточной мочи)
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              13
            </td>
            <td>
              УЗИ простаты
            </td>
            <td>
              800
            </td>
          </tr>
          <tr>
            <td>
              14
            </td>
            <td>
              УЗИ отдельного органа брюшной полости
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              15
            </td>
            <td>
              УЗИ почек+мочевого пузыря
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              16
            </td>
            <td>
              УЗИ почек+мочевого пузыря+предст.железы
            </td>
            <td>
              2100
            </td>
          </tr>
          <tr>
            <td>
              17
            </td>
            <td>
              УЗИ слюнных желез
            </td>
            <td>
              900
            </td>
          </tr>
          <tr>
            <td>
              18
            </td>
            <td>
              УЗИ одной группы лимфоузлов
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              19
            </td>
            <td>
              УЗИ мягких тканей
            </td>
            <td>
              900
            </td>
          </tr>
          <tr>
            <td>
              20
            </td>
            <td>
              УЗИ сустава / УЗИ двух одноименных суставов
            </td>
            <td>
              1000 /1800
            </td>
          </tr>
          <tr>
            <td>
              21
            </td>
            <td>
              УЗДГ сосудов головного мозга и шеи
            </td>
            <td>
              2200
            </td>
          </tr>
          <tr>
            <td>
              22
            </td>
            <td>
              УЗДГ сонных и позвоночных артерий
            </td>
            <td>
              1200
            </td>
          </tr>
          <tr>
            <td>
              23
            </td>
            <td>
              УЗДГ артерий / вен верхних конечностей
            </td>
            <td>
              1300 / 1300
            </td>
          </tr>
          <tr>
            <td>
              24
            </td>
            <td>
              УЗДГ артерий / вен нижних конечностей
            </td>
            <td>
              1300 / 1300
            </td>
          </tr>
          <tr>
            <td>
              25
            </td>
            <td>
              Снимок
            </td>
            <td>
              100
            </td>
          </tr>
          <tr>
            <td>
              26
            </td>
            <td>
              УЗИ почечных сосудов / сосудов брюшной полости<br>
            </td>
            <td>
              1500 / 1500
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