<article class="review-item review-item--simple">

          <div class="review-item__left">
            <!-- фото  -->
            <div class="review-item__photo">
              <?php if($item['photo']) :  ?>
                <img src="<?php echo$item['photo']; ?>" alt="">
              <?php else:  ?>
                <img src="./img/reviews/1.jpg" alt="">
              <?php endif; ?>
            </div>
            <p>
              <!-- имя и дата публикации -->
              <strong><?php echo$item['name']; ?></strong> отзыв оставлен <?php echo$item['date']; ?></p>

          </div>
          <div class="review-item__right">
            <!-- текст отзыва  -->
            <blockquote><?php echo$item['text']; ?></blockquote>
          </div>
        </article>