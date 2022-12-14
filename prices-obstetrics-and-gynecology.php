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
        <li><a><span>Акушерство и гинекология</span></a></li>
      </ul>
      <br>
      <h1 class="title">Акушерство и гинекология</h1>

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
              Консультация врача-гинеколога
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td>
              Повторная консультация врача (устная)
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td>
              Повторный осмотр врача-гинеколога
            </td>
            <td>
              800
            </td>
          </tr>
          <tr>
            <td>
              4
            </td>
            <td>
              Кольпоскопия
            </td>
            <td>
              500
            </td>
          </tr>
          <tr>
            <td>
              5
            </td>
            <td>
              Вульвоскопия
            </td>
            <td>
              350
            </td>
          </tr>
          <tr>
            <td>
              6
            </td>
            <td>
              Взятие биопсии с шейки матки
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
              Взятие биопсии с вульвы
            </td>
            <td>
              500
            </td>
          </tr>
          <tr>
            <td>
              8
            </td>
            <td>
              Аспират из полости матки
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              9
            </td>
            <td>
              Аспират из цервикального канала
            </td>
            <td>
              800
            </td>
          </tr>
          <tr>
            <td>
              10
            </td>
            <td>
              Удаление полипа цервикального канала
            </td>
            <td>
              800
            </td>
          </tr>
          <tr>
            <td>
              11
            </td>
            <td>
              Гистологическое исследование аспирата
            </td>
            <td>
              1600
            </td>
          </tr>
          <tr>
            <td>
              12
            </td>
            <td>
              Гистологическое исследование биоптата
            </td>
            <td>
              1600
            </td>
          </tr>
          <tr>
            <td>
              13
            </td>
            <td>
              Лечение кондилом НПО (включая стоимость препарата Солкодерм): единичные (до 4) / множественные (более 4)
            </td>
            <td>
              1000 / 1500
            </td>
          </tr>
          <tr>
            <td>
              14
            </td>
            <td>
              Лечение кондилом НПО (без стоимости препарата Солкодерм): единичные (до 4) / множественные (более 4)
            </td>
            <td>
              800 / 1000
            </td>
          </tr>
          <tr>
            <td>
              15
            </td>
            <td>
              Лечение кондилом и другой патологии НПО электрометодом (аппарат «ФОТЕК») с местным обезболиванием
            </td>
            <td>
              2500
            </td>
          </tr>
          <tr>
            <td>
              16
            </td>
            <td>
              Лечение кондилом и другой патологии НПО электрометодом (аппарат «ФОТЕК») без местного обезболивания
            </td>
            <td>
              2000
            </td>
          </tr>
          <tr>
            <td>
              17.1
            </td>
            <td>
              Лечение эрозии шейки матки (зона поражения до 5 см - аппарат «ФОТЕК»)
            </td>
            <td>
              2500
            </td>
          </tr>
          <tr>
            <td>
              17.2
            </td>
            <td>
              Лечение эрозии шейки матки (зона поражения больше 5 см - аппарат «ФОТЕК»)
            </td>
            <td>
              3500
            </td>
          </tr>
          <tr>
            <td>
              17.3
            </td>
            <td>
              Лечение эрозии шейки матки (зона поражения до 5 см - лазер)
            </td>
            <td>
              2800
            </td>
          </tr>
          <tr>
            <td>
              17.4
            </td>
            <td>
              Лечение эрозии шейки матки (зона поражения больше 5 см - лазер)
            </td>
            <td>
              4000
            </td>
          </tr>
          <tr>
            <td>
              18
            </td>
            <td>
              Лечение простой эрозии шейки матки терапевтическое (без стоимости препарата)
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              19
            </td>
            <td>
              Диспансерное наблюдение (контракт на 1 год):<br>
              <span>
                - 4 консультативных приема врача – гинеколога<br>
                - 2 мазка на онкоцитологию<br>
                - 4 мазка на флору<br>
                - 3 узи органов малого таза<br>
                - 1 расширенная кольпоскопия<br>
                - 1 консультативный прием врача маммолога<br>
                - 1 узи молочных желез<br>
                - анализы крови на онкомаркеры СА-125 и СА-15-3 </span>
            </td>
            <td>
              11000
            </td>
          </tr>
          <tr>
            <td>
              20
            </td>
            <td>
              Введение ВМК (без стоимости спирали) обычная спираль / МИРЕНА<br>
            </td>
            <td>
              1000 / 1200
            </td>
          </tr>
          <tr>
            <td>
              21
            </td>
            <td>
              Удаление ВМК (с мазком-отпечатком)<br>
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              23
            </td>
            <td>
              Мазок на флору
            </td>
            <td>
              400
            </td>
          </tr>
          <tr>
            <td>
              24
            </td>
            <td>
              Мазок на онкоцитологию
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              25
            </td>
            <td>
              Мазок на гормональную цитологию
            </td>
            <td>
              500
            </td>
          </tr>
          <tr>
            <td>
              26
            </td>
            <td>
              Контракт по ведению беременности
            </td>
            <td>
              60000
            </td>
          </tr>
          <tr>
            <td>
              27
            </td>
            <td>
              Консультация по беременности
            </td>
            <td>
              1500
            </td>
          </tr>
          <tr>
            <td>
              28
            </td>
            <td>
              Обработка шейки матки после лечения 1 степени
            </td>
            <td>
              500
            </td>
          </tr>
          <tr>
            <td>
              29
            </td>
            <td>
              Обработка шейки матки после лечения 2 степени
            </td>
            <td>
              750
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