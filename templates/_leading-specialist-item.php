<div class="swiper-slide">
  <div class="grid">
    <div class="left">
      <div class="photo">
        
        <?php if($item['photo']) :  ?>
          <img src="<?php echo$item['photo']; ?>" alt="<?php echo$item['name']; ?>" width="448">
        <?php else:  ?>
          <img src="./img/people/temporary-photo.jpg" alt="<?php echo$item['name']; ?>" width="448">
        <?php endif; ?>

      </div>
      <span class="name"><?php echo$item['name']; ?></span>
    </div>

    <div class="right">
      <?php if($item['work_experience']) :  ?>
      <span class="experience">Стаж работы: <?php echo$item['work_experience']; ?></span>
      <?php endif; ?>
      <div class="text">
        <ul>
          <li><strong>Где принимает:</strong> все филиалы</li>
          <?php if($item['specialization']) :  ?>
          <li><?php echo$item['specialization']; ?></li>
            <?php endif; ?>
          <li><strong>Кого принимает:</strong> Взрослые и дети</li>
          <!-- <li><strong>Специальность:</strong> Врач акушер-гинеколог. Высшая квалификационная категория</li> -->
          <li><strong>Образование: </strong><?php echo$item['education']; ?></li>
          <li><strong>Сфера деятельности:</strong> акушерство и гинекология: поликлиническое, неоперативное,
            оперативное, гинекология детского возраста, эндокринология-гинекология, планирование и ведение
            беременности,
            невынашивание беременности, гинекология климактерического периода, кольпоскопия, патология шейки
            матки.
          </li>
        </ul>
      </div>
      <div class="buttons">
        <a href="#" class="button button--icon"><svg width="13" height="20" viewBox="0 0 13 20"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.409484 0.470069C0.978302 -0.132209 1.92766 -0.159333 2.52994 0.409484L12.6846 10L2.52994 19.5905C1.92766 20.1593 0.978302 20.1322 0.409484 19.5299C-0.159333 18.9277 -0.132209 17.9783 0.470069 17.4095L8.3154 10L0.470069 2.59052C-0.132209 2.02171 -0.159333 1.07235 0.409484 0.470069Z"
              fill="black" />
          </svg>
          Подробнее</a>
        <a href="#" class="button button--icon"><svg width="22" height="22" viewBox="0 0 22 22"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M20.3885 1.61151C19.8789 1.09944 19.2729 0.693387 18.6054 0.416794C17.938 0.140201 17.2225 -0.00145225 16.5 1.12249e-05C15.7776 -0.000961059 15.0622 0.140917 14.3948 0.417481C13.7275 0.694046 13.1214 1.09984 12.6115 1.61151L0.0213125 14.201L0 22H7.777L20.3885 9.38851C20.8994 8.87799 21.3046 8.27181 21.5811 7.6046C21.8576 6.9374 22 6.22224 22 5.50001C22 4.77778 21.8576 4.06263 21.5811 3.39542C21.3046 2.72821 20.8994 2.12203 20.3885 1.61151ZM6.6385 19.25H5.5V16.5H2.76581L2.76856 15.345L14.5558 3.55576L18.4443 7.44426L6.6385 19.25Z"
              fill="black" />
          </svg>
          Записаться на приём</a>
      </div>
    </div>

  </div>
</div>