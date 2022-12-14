<article class="catalog-preview catalog-preview--long">
  <div class="catalog-preview__left">
    <div class="catalog-preview__hgroup">
      <span class="catalog-preview__id">№ <?php echo$item['code']; ?></span>
      <h3 class="catalog-preview__title"><?php echo$item['title']; ?></h3>
    </div>
    <div class="catalog-preview__desc"><?php echo$item['text']; ?></div>
  </div>
  <div class="catalog-preview__left">
    <div class="catalog-preview__price">Цена: <strong><?php echo$item['price']; ?> руб.</strong></div>
    <a href="" class="button button--icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
        <path stroke="#000000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5"></path>
      </svg>
      <span>Записаться</span>
    </a>
  </div>
</article>