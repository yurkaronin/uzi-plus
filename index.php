<?php 
	require_once('config.php');

  // переменные 
  $page_name = "Главная страница";
  $page_desc = "Описание главной страницы";
  $seo_title;
  $seo_text;
  include "./templates/_head.php";
  include "./templates/_header.php";

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
?>

<section class="faq section">
  <div class="wrapper">
    <h2 class="title">Часто задаваемые вопросы</h2>

    <ul class="faq__list">
      <?php 
        $sql = "SELECT * FROM `faq`";
        $result = $data_base->query($sql);
        $faq = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach( $faq as $item) {
          include "./templates/_faq-item.php"; 
        };
      ?>
  </ul>

  </div>
</section>
<?php
// страхование 
include "./components/insurance-companies.php";
// сертификаты 
include "./components/certificates.php";
    ?>
<section class="section">
  <div class="wrapper">
    <h1 class="title">Медицинский центр УЗИ+: Медицинское обслуживание для взрослых и детей в Смоленске</h1>
    <p>Здоровье - это то, что мы всегда желаем своим близким во время Дня Рождения или какого-нибудь другого
      праздника. Здоровья не может быть слишком много, его всегда не хватает. У нас порой не хватает ни времени,
      ни денег, чтобы следить за своим здоровьем и поддерживать его на должном уровне. Но когда мы серьёзно
      заболеваем, то начинаем понимать, что здоровье - это важнейшая вещь в нашей жизни.</p>
    <p>Медицинский центр «УЗИ +» - одна из первых частных поликлиник г. Смоленска для детей и взрослых. За 4 года
      существования мы выросли из кабинета ультразвуковой диагностики до полноценного многопрофильного
      медицинского центра с квалифицированным штатом сотрудников. В нашей клинике женщины и мужчины, а также их дети могут
      пройти полное комплексное медицинское обследование. Так что, если вы задались вопросом "Где сделать УЗИ в
      Смоленске?", ответ простой: "Добро пожаловать к нам!". Своим пациентам предлагаем следующие виды услуг:</p>
    <ul>
      <li>
        <p><strong>Ультразвуковая диагностика</strong> (всех сроков беременности, малого таза, молочных желез,
          брюшной полости, почек, мочевого пузыря, предстательной и щитовидной желез, головного мозга детям, сердца,
          сосудов головного мозга и шеи, сосудов верхних и нижних конечностей, слюнных желез, мягких тканей) Все виды
          ультразвуковых исследований осуществляются на новом современном цветном оборудовании.</p>
      </li>
      <li>
        <p><strong>Приемы специалистов</strong>: акушер-гинекологов, терапевта, гастроэнтеролога, пульмонолога,
          кардиолога, невролога, онколога, маммолога, эндокринолога, уролога, педиатра, неонатолога,
          аллерголога-иммунолога. Все специалисты нашего медицинского центра закончили Смоленскую государственную
          медицинскую академию, стаж работы по специальности не менее 10 лет и богатый практический опыт в
          стационарах нашего города. 5 врачей имеют научную степень и являются ассистентами и доцентами кафедр СГМА. Весь
          коллектив постоянно повышает свою квалификацию на базе как нашей медицинской академии, так и на базах Медицинских
          ВУЗов Москвы и Санкт-Петербурга.</p>
      </li>
    </ul>
  </div>
</section>

<?php if($seo_title && $seo_text) :  ?>
<section class="section">
  <div class="wrapper">
    <h2 class="title"><?php echo $seo_title; ?></h2>
    <?php echo $seo_text; ?>
  </div>
</section>
<?php endif; ?>

<?php include "./templates/_footer.php"; ?>