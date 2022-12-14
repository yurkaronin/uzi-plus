<section class="service-preview section">
  <div class="wrapper">
    <h2 class="title">Услуги для детей</h2>
    <p class="subtitle">В МЦ «УЗИ+» работает дружная команда опытных детских врачей и разработан целый комплекс исследований, помогающий специалистам поставить верный диагноз и назначить эффективное лечение.</p>

    <ul class="service-preview__list">
      <?php 
        $sql = "SELECT * FROM `service_category` WHERE id > 23";
        $result = $data_base->query($sql);
        $service_preview = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach( $service_preview as $item) {
          include "./templates/_service-category-preview-item.php"; 
        };
      ?>

    </ul>
  </div>
</section>
