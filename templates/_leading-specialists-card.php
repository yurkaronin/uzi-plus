<article class="leading-specialists">
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
        <p class="text__cust"><?php echo$item['position']; ?></p>
        <ul>
          <li><strong>Где принимает:</strong>
            <?php if($item['gagarina_place']) :  ?>
            <span class="fillial-link">филиал ул. Гагарина, 14/2;</span>
            <?php endif; ?>
            <?php if($item['popova_place']) :  ?>
            <span class="fillial-link">филиал ул. Попова, 68;</span>
            <?php endif; ?>
          </li>
          <li><strong>Специализации:</strong> <?php echo$item['specialization']; ?></li>
          <?php if($item['pediatrician'] || $item['adult']) :  ?>
          <li><strong>Кого принимает:</strong>
            <?php if($item['pediatrician']) :  ?>дети,</span><?php endif; ?>
            <?php if($item['adult']) :  ?>взрослые пациенты</span><?php endif; ?>
          </li>
          <?php endif; ?>
          <li><strong>Образование:</strong> <?php echo$item['education']; ?></li>
        </ul>
      </div>
      <div class="buttons">
        <a href="#" class="button button--icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M20.3885 1.61151C19.8789 1.09944 19.2729 0.693387 18.6054 0.416794C17.938 0.140201 17.2225 -0.00145225 16.5 1.12249e-05C15.7776 -0.000961059 15.0622 0.140917 14.3948 0.417481C13.7275 0.694046 13.1214 1.09984 12.6115 1.61151L0.0213125 14.201L0 22H7.777L20.3885 9.38851C20.8994 8.87799 21.3046 8.27181 21.5811 7.6046C21.8576 6.9374 22 6.22224 22 5.50001C22 4.77778 21.8576 4.06263 21.5811 3.39542C21.3046 2.72821 20.8994 2.12203 20.3885 1.61151ZM6.6385 19.25H5.5V16.5H2.76581L2.76856 15.345L14.5558 3.55576L18.4443 7.44426L6.6385 19.25Z"
              fill="black" />
          </svg>
          Записаться на приём</a>
      </div>
    </div>

  </div>
</article>