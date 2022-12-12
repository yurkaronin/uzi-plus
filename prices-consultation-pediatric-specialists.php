<?php
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
        <li><a><span>Консультация детских специалистов</span></a></li>
      </ul>
      <br>
      <h1 class="title">Консультация детских специалистов</h1>

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
          <tr class="table-header">
            <td colspan="3">
              Педиатр
            </td>
          </tr>
          <tr>
            <td>
              12
            </td>
            <td>
              Консультация педиатра Грибко Т.В.(доцент), первичная
            </td>
            <td>
              1500
            </td>
          </tr>
          <tr>
            <td>
              13
            </td>
            <td>
              Консультация педиатра Грибко Т.В.(доцент) , повторная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              14
            </td>
            <td>
              Консультация педиатра , первичная
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              15
            </td>
            <td>
              Консультация педиатра, повторная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              16
            </td>
            <td>
              Консультация педиатра Грибко Т.В, контрольная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              17
            </td>
            <td>
              Очищение носовых пазух посредством электроотсоса
            </td>
            <td>
              500
            </td>
          </tr>
          <tr class="table-header">
            <td colspan="3">
              Иммунолог-аллерголог
            </td>
          </tr>
          <tr>
            <td>
              18
            </td>
            <td>
              Консультация специалиста, первичная
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              19
            </td>
            <td>
              Консультация специалиста, повторная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr class="table-header">
            <td colspan="3">
              Кардиолог
            </td>
          </tr>
          <tr>
            <td>
              20
            </td>
            <td>
              Консультация специалиста, первичная
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              21
            </td>
            <td>
              Консультация специалиста, повторная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr class="table-header">
            <td colspan="3">
              Гастроэнтеролог
            </td>
          </tr>
          <tr>
            <td>
              22
            </td>
            <td>
              Консультация специалиста, первичная
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              23
            </td>
            <td>
              Консультация специалиста, повторная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr class="table-header">
            <td colspan="3">
              Эндокринолог
            </td>
          </tr>
          <tr>
            <td>
              24
            </td>
            <td>
              Консультация специалиста, первичная
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              25
            </td>
            <td>
              Консультация специалиста, повторная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr class="table-header">
            <td colspan="3">
              Лор
            </td>
          </tr>
          <tr>
            <td>
              26
            </td>
            <td>
              Консультация специалиста, первичная
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              27
            </td>
            <td>
              Консультация специалиста, повторная
            </td>
            <td>
              1000
            </td>
          </tr>
          <tr>
            <td>
              28
            </td>
            <td>
              Промывание ушных пробок
            </td>
            <td>
              600
            </td>
          </tr>
          <tr>
            <td>
              29
            </td>
            <td>
              Очищение носовых пазух посредством электроотсоса
            </td>
            <td>
              500
            </td>
          </tr>
          <tr class="table-header">
            <td colspan="3">
              Ортопед
            </td>
          </tr>
          <tr>
            <td>
              30
            </td>
            <td>
              Консультация специалиста, первичная
            </td>
            <td>
              1300
            </td>
          </tr>
          <tr>
            <td>
              31
            </td>
            <td>
              Консультация специалиста, повторная
            </td>
            <td>
              1000
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