<section class="service-preview section">
  <div class="wrapper">
    <h2 class="title">Услуги взрослым</h2>
    <p class="subtitle">В МЦ «УЗИ+» представлен широкий спектр медицинских услуг, которые позволяют провести диагностику различных заболеваний и назначить лечение взрослым пациентам</p>

    <ul class="service-preview__list">
    <?php 
        $sql = "SELECT * FROM `service_category` WHERE id < 23";
        $result = $data_base->query($sql);
        $service_preview = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach( $service_preview as $item) {
          include "./templates/_service-category-preview-item.php"; 
        };
      ?>
    </ul>
  </div>
</section>
