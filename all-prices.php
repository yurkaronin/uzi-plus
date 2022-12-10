<?php
include "./components/head.php";
include "./components/up-button.php";
include "./components/header.php";
?>
<main>
  <section class="all-reviews section">
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Вы здесь:<a href="./index.php"><span>Главная</span></a></li>
        <li><a><span>Цены на услуги клиники</span></a></li>
      </ul>
      <br>
      <h1 class="title">Цены на услуги клиники</h1>

      <ul class="green-bullets">
        <li><a href="./prices-ultrasound-for-adults.php">Ультразвуковые исследования для взрослых</a></li>
        <li><a href="./prices-ultrasound-for-children.php">Ультразвуковые исследования для детей</a></li>
        <li><a href="./prices-expert-advice.php">Консультация специалистов</a></li>
        <li><a href="./prices-consultation-pediatric-specialists.php">Консультация детских специалистов</a></li>
        <li><a href="./prices-obstetrics-and-gynecology.php">Акушерство и гинекология</a></li>
        <li><a href="./prices-sampling.php">Забор анализов</a></li>
      </ul>

    </div>
  </section>

  <?php 
      // Промо блок 2
      include "./components/promo-3.php";
      include "./components/ratings.php";
    ?>
  <section class="section">
    <div class="wrapper">
      <h2 class="title">Заголовок второго уровня для поисковиков</h2>
      <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
        осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних
        условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется
        абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более
        привлекательным и живым для визуально-слухового восприятия.</p>
      <p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей
        недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит
        любой макет непонятным смыслом
        и придаст неповторимый колорит советских времен.</p>
    </div>
  </section>

</main>
<?php 
  // подвал 
  include "./components/footer.php";
  // скрипты 
  include "./components/scripts.php"; 
  ?>
</body>

</html>