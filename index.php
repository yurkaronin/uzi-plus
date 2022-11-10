<?php
include "./components/head.php";

?>

<body>
  <!-- кнопка наверх  -->
  <a href="#top" id="toTop" title="Наверх" class="top-button">
    <svg width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.625 25L10.625 2M2 10.625L10.625 2L19.25 10.625" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
  </a>

  <header class="header">
    <div class="wrapper">
      <div class="header__top">
        <div class="header__top-item">
          <a href="tel:+74812605101" class="tel">+7(4812) 60-51-01</a>, <a href="tel:+74812615101"
            class="tel">+7(4812) 61-51-01</a> г. Смоленск, ул. Попова, д. 68
        </div>
        <div class="header__top-item">График работы:<br> <span>пн-пт 9-19, сб 9-15, вс выходной</span>
        </div>
        <div class="header__top-item">
          <a href="tel:+74812562457" class="tel">+7(4812) 56-24-57</a>, <a href="tel:+74812645101"
            class="tel">+7(4812) 64-51-01</a> г. Смоленск, пр. Гагарина, д. 14/2
        </div>

      </div>
      <div class="header__bottom">
        <div class="header__logo">
          <a href="#">
            <img src="./img/logo/logo.svg" alt="Логотип Узи+" width="177">
          </a>
        </div>
        <div class="header__social hide-930">
          <ul class="social-list">
            <!-- <li><a href="#" title="Одноклассники"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="23"
                  fill="none">
                  <path fill="#FEFEFE" fill-rule="evenodd"
                    d="M7.646 4.424A2.333 2.333 0 0 1 9.117 7.43a2.422 2.422 0 0 1-3.103 1.435 2.34 2.34 0 0 1-1.47-3 2.422 2.422 0 0 1 3.102-1.441Zm2.78 8.436c.344-.233.738-.38 1.15-.429.475 0 .932.182 1.278.51a1.66 1.66 0 0 1 0 2.335 2.372 2.372 0 0 1-.367.28 9.522 9.522 0 0 1-3.27 1.323c.186.143.366.316.527.466.925.9 1.862 1.789 2.8 2.69a1.647 1.647 0 0 1 .192 2.13 1.675 1.675 0 0 1-2.228.497 3.14 3.14 0 0 1-.621-.46c-.993-.963-1.986-1.932-2.998-2.876-.13.124-.353.348-.521.522-.875.882-1.732 1.752-2.613 2.603a1.718 1.718 0 0 1-2.482-.081 1.566 1.566 0 0 1-.118-2.038c.27-.318.56-.619.869-.9.682-.683 1.824-1.758 2.439-2.485A12.612 12.612 0 0 1 1.037 15.5a1.64 1.64 0 0 1-.385-2.317c.221-.323.56-.546.943-.621a2.003 2.003 0 0 1 1.465.23 6.952 6.952 0 0 0 4.282 1 7.703 7.703 0 0 0 3.103-.939l-.018.007ZM8.777 1.28a5.848 5.848 0 0 0-7.448 3.48 5.664 5.664 0 0 0 3.588 7.274 5.849 5.849 0 0 0 7.416-3.473 5.664 5.664 0 0 0-3.556-7.28Z"
                    clip-rule="evenodd" />
                </svg></a></li> -->
            <li><a href="#" title="Вконтакте"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="13"
                  fill="none">
                  <path fill="#fff" fill-rule="evenodd"
                    d="M19.873 1.782c.137-.473 0-.814-.651-.814h-2.188a.939.939 0 0 0-.95.623 18.401 18.401 0 0 1-2.69 4.508c-.507.512-.742.656-1.021.656-.137 0-.34-.164-.34-.656V1.782c0-.565-.162-.814-.65-.814H7.945a.531.531 0 0 0-.56.505c0 .532.795.656.873 2.152v3.241c0 .716-.13.84-.404.84-.742 0-2.546-2.742-3.62-5.905-.208-.61-.417-.86-.977-.86H1.083c-.651 0-.749.296-.749.624 0 .584.736 3.478 3.45 7.31 1.81 2.623 4.356 4.034 6.674 4.034 1.394 0 1.563-.315 1.563-.86v-1.941c0-.657.13-.755.573-.755.325 0 .879.158 2.181 1.424 1.484 1.49 1.725 2.165 2.559 2.165h2.187c.651 0 .938-.315.762-.938a9.507 9.507 0 0 0-1.849-2.585c-.508-.604-1.302-1.26-1.504-1.588-.202-.328-.234-.604 0-.978 0 0 2.663-3.785 2.943-5.065v-.006Z"
                    clip-rule="evenodd" />
                </svg></a></li>
            <!-- <li><a href="#" title="Яндекс Дзен">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="none">
                  <path fill="#fff" fill-rule="evenodd"
                    d="M14.08 2.436A9.533 9.533 0 0 0 9.5.96L9.49.942l.006.36c.026 1.701.053 3.448.637 5.063a4.395 4.395 0 0 0 2.687 2.66c1.48.506 3.054.551 4.609.595.229.007.457.013.685.021a8.89 8.89 0 0 0-4.035-7.205ZM8.97 1a9.12 9.12 0 0 0-5.09 1.8A8.744 8.744 0 0 0 .347 9.663c.267-.01.536-.018.806-.026 1.668-.049 3.378-.1 4.905-.767A4.505 4.505 0 0 0 8.47 5.948c.385-1.353.43-2.766.474-4.166.008-.262.017-.522.027-.782Zm4.177 9.679a20.46 20.46 0 0 1 4.984-.497 8.868 8.868 0 0 1-2.66 6.066 8.987 8.987 0 0 1-5.982 2.585l.013-.607c.03-1.658.062-3.349.675-4.909a4.434 4.434 0 0 1 2.961-2.638h.01Zm-12.056-.475c-.254-.006-.507-.013-.758-.022a8.66 8.66 0 0 0 2.301 5.738 9.068 9.068 0 0 0 6.314 2.917 24.587 24.587 0 0 0-.35-4.385c-.262-1.343-1.002-2.682-2.261-3.325-1.608-.827-3.46-.876-5.246-.923Z"
                    clip-rule="evenodd" />
                </svg>
              </a></li> -->
            <!-- <li><a href="#" title="Rutube">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" fill="none">
                  <path fill="#fff" fill-rule="evenodd"
                    d="M18.424 2.215a1.65 1.65 0 1 1-3.214.756 1.65 1.65 0 0 1 3.214-.756ZM.334 4.086H11.92a6.452 6.452 0 0 1 1.757.189c.445.149.852.393 1.193.715.321.332.558.737.69 1.18.157.57.23 1.16.214 1.751v.954a4.738 4.738 0 0 1-.628 2.743 3.051 3.051 0 0 1-2.115 1.11l3.138 4.212H12.56l-2.824-4.186H3.56v4.186H.334V4.086Zm3.226 5.85h7.84V9.91c.315.034.633-.032.91-.189a1.017 1.017 0 0 0 .25-.772V7.865a1 1 0 0 0-.25-.754 1.481 1.481 0 0 0-.91-.213H3.56v3.038Z"
                    clip-rule="evenodd" />
                </svg>
              </a></li> -->
            <li><a href="#" title="Telegram"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="none">
                  <path fill="#fff"
                    d="m1.22 7.96 16.85-6.934c.779-.299 1.468.202 1.208 1.47l-2.866 14.412c-.21 1.065-.78 1.268-1.579.788l-4.365-3.43-2.117 2.13a1.126 1.126 0 0 1-.39.339c-.152.08-.32.12-.49.12l.31-4.74 8.101-7.808c.35-.33-.08-.512-.54-.182l-9.988 6.711L1.04 9.41c-.959-.288-.979-.97.18-1.449Z" />
                </svg></a></li>
            <li><a href="#" title="Whatsapp"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none">
                  <path fill="#fff" fill-rule="evenodd"
                    d="M11.495.964a10.37 10.37 0 0 1 6.65 3.01 10.37 10.37 0 0 1-7.361 17.693 10.38 10.38 0 0 1-4.948-1.257L.334 21.845l1.494-5.364A10.37 10.37 0 0 1 11.495.964ZM6.43 18.718a8.638 8.638 0 0 0 4.383 1.197h.01a8.618 8.618 0 1 0-7.303-4.037l.208.326-.87 3.177 3.255-.851.317.188Zm7.303-6.096c.237.09 1.514.713 1.77.841l.092.045c.208.102.351.173.404.312.076.414.024.842-.149 1.227a2.69 2.69 0 0 1-1.722 1.137 3.611 3.611 0 0 1-1.622-.108c-.505-.154-1-.336-1.485-.545a11.508 11.508 0 0 1-4.423-3.908A5.027 5.027 0 0 1 5.539 8.95a2.91 2.91 0 0 1 .91-2.167.99.99 0 0 1 .693-.317h.495c.027.002.055 0 .084-.003.144-.013.319-.029.5.449.218.573.732 1.85.791 1.979a.465.465 0 0 1 0 .445 6.837 6.837 0 0 1-.688.934c-.102.124-.206.25-.073.481.389.657.872 1.254 1.434 1.771a6.994 6.994 0 0 0 2.088 1.277c.258.138.416.089.564-.06.149-.148.634-.732.812-.99.178-.256.346-.217.584-.128Z"
                    clip-rule="evenodd" />
                </svg></a></li>

          </ul>
        </div>
        <div class="header__buttons">
          <a href="#" class="button button--light">Выезд на дом</a>
          <a href="#" class="button">Записаться к врачу</a>
        </div>
        <a class="header__search button" href="#">
          <img src="./img/icons/search.svg" alt="иконка">
        </a>
        <button class="nav-button" type="button">
          <span></span>
        </button>

      </div>
    </div>
    <!-- меню  -->

  </header>
  <nav class="navigation">
    <div class="wrapper">

      <ul class="navigation__list">
        <li><a class="navigation__link" href="#">Главная</a></li>

        <li><a class="navigation__link navigation__link--mod" href="#">Услуги детям
            <svg width="13" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="m11.346 1-5 4-5-4" stroke="#fff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
          <ul class="navigation__sublist">
            <li><a href="#">Акушерство-гинекология</a></li>
            <li><a href="#">Аллергология-иммунология</a></li>
            <li><a href="#">Гастроскопия</a></li>
            <li><a href="#">Гастроэнтерология</a></li>
            <li><a href="#">Кардиология</a></li>
            <li><a href="#">Неврология</a></li>
            <li><a href="#">Онкология-маммология</a></li>
            <li><a href="#">Ортопедия</a></li>
            <li><a href="#">Оториноларингология</a></li>
            <li><a href="#">Педиатрия</a></li>
            <li><a href="#">Психиатрия-наркология</a></li>
            <li><a href="#">Пульмонология</a></li>
            <li><a href="#">Ревматология</a></li>
            <li><a href="#">Сосудистая хирургия</a></li>
            <li><a href="#">Терапия</a></li>
            <li><a href="#">Травматология-ортопедия</a></li>
            <li><a href="#">Ультразвуковая диагностика</a></li>
            <li><a href="#">Урология</a></li>
            <li><a href="#">Функциональная диагностика</a></li>
            <li><a href="#">Хирургия</a></li>
            <li><a href="#">Эндокринология</a></li>
          </ul>

        </li>

        <li>
          <a class="navigation__link navigation__link--mod" href="#">Услуги взрослым
            <svg width="13" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="m11.346 1-5 4-5-4" stroke="#fff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
          <ul class="navigation__sublist">
            <li><a href="#">Акушерство-гинекология</a></li>
            <li><a href="#">Аллергология-иммунология</a></li>
            <li><a href="#">Гастроскопия</a></li>
            <li><a href="#">Гастроэнтерология</a></li>
            <li><a href="#">Кардиология</a></li>
            <li><a href="#">Неврология</a></li>
            <li><a href="#">Онкология-маммология</a></li>
            <li><a href="#">Ортопедия</a></li>
            <li><a href="#">Оториноларингология</a></li>
            <li><a href="#">Педиатрия</a></li>
            <li><a href="#">Психиатрия-наркология</a></li>
            <li><a href="#">Пульмонология</a></li>
            <li><a href="#">Ревматология</a></li>
            <li><a href="#">Сосудистая хирургия</a></li>
            <li><a href="#">Терапия</a></li>
            <li><a href="#">Травматология-ортопедия</a></li>
            <li><a href="#">Ультразвуковая диагностика</a></li>
            <li><a href="#">Урология</a></li>
            <li><a href="#">Функциональная диагностика</a></li>
            <li><a href="#">Хирургия</a></li>
            <li><a href="#">Эндокринология</a></li>
          </ul>
        </li>
        <li>
          <a class="navigation__link" href="#">Специалисты</a>
        </li>
        <li>
          <a class="navigation__link" href="#">Цены</a>
        </li>
        <li>
          <a class="navigation__link" href="#">Отзывы</a>
        </li>
        <li>
          <a class="navigation__link" href="#">Контакты</a>
        </li>
      </ul>

    </div>

  </nav>

  <main>
    <!-- первый экран со слайдером  -->
    <section class="hero">

      <div class="swiper slider-hero">
        <div class="swiper-wrapper">
          <!-- Электроэнцефалография (ЭЭГ)  -->
          <article class="swiper-slide slider-hero__item slider-hero__item--1">
            <div class="wrapper">

              <div class="slider-hero__details">

                <span class="slider-hero__price"><del>2 300</del> 1 500 руб.</span>
                <h3 class="slider-hero__title">Электро<span class="decorate decorate--one"></span>энцефало<span
                    class="decorate decorate--two"></span>графия (ЭЭГ)
                </h3>
                <p class="slider-hero__description">Безвредная и безболезненная диагностика заболеваний центральной
                  нервной системы и психики</p>
                <ul class="slider-hero__list">
                  <li>
                    <div class="icon icon--technology"></div>

                    <span><b>21-канальный
                        аппарат</b> нового
                      поколения</span>
                  </li>
                  <li>
                    <div class="icon icon--achievement"></div>

                    <span><b>Врач высшей
                        категории</b>
                      с 43-летним
                      стажем</span>
                  </li>
                  <li>
                    <div class="icon icon--stopwatch"></div>

                    <span>Запись <b>в день
                        обращения</b></span>
                  </li>
                </ul>
                <a href="#" class="button button--icon">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M20.3885 1.61151C19.8789 1.09944 19.2729 0.693387 18.6054 0.416794C17.938 0.140201 17.2225 -0.00145225 16.5 1.12249e-05C15.7776 -0.000961059 15.0622 0.140917 14.3948 0.417481C13.7275 0.694046 13.1214 1.09984 12.6115 1.61151L0.0213125 14.201L0 22H7.777L20.3885 9.38851C20.8994 8.87799 21.3046 8.27181 21.5811 7.6046C21.8576 6.9374 22 6.22224 22 5.50001C22 4.77778 21.8576 4.06263 21.5811 3.39542C21.3046 2.72821 20.8994 2.12203 20.3885 1.61151ZM6.6385 19.25H5.5V16.5H2.76581L2.76856 15.345L14.5558 3.55576L18.4443 7.44426L6.6385 19.25Z"
                      fill="black" />
                  </svg>Записаться онлайн</a>
              </div>

              <div class="slider-hero__image">
                <img src="./img/artwork/elektroencefalografiya.svg" alt="картинка услуги" height="685">
              </div>

            </div>
          </article>
          <!-- Анализы на коронавирус  -->
          <article class="swiper-slide slider-hero__item slider-hero__item--2">
            <div class="wrapper">

              <div class="slider-hero__details">
                <span class="slider-hero__price"><del>2 300</del> 1 500 руб.</span>
                <h3 class="slider-hero__title">Анализы на коронавирус</h3>
                <p class="slider-hero__description">Запись на анализ в день обращения и выдача медицинской справки
                  по результатам анализов.</p>
                <ul class="slider-hero__list slider-hero__list--long">
                  <li>
                    <div class="icon icon--microbe"></div>

                    <span><b>Экспресс-анализ на выявление антигена SARS-CoV-2-(ПЦР)</b> – готовность в течение 8
                      мин</span>
                  </li>
                  <li>
                    <div class="icon icon--tubes"></div>

                    <span><b>Выявление РНК SARS-CoV-2 COVID-19 (ПЦР)</b> – готовность в течение 2-3 дней</span>
                  </li>
                  <li>
                    <div class="icon icon--tubes-2"></div>

                    <span><b>Определение антител IgG или IgM к антигену SARS-CoV-2 в сыворотке крови (кровь из
                        вены)</b> – готовность в течение 3 дней – 1300 р.</span>
                  </li>
                </ul>
                <a href="#" class="button button--icon">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M20.3885 1.61151C19.8789 1.09944 19.2729 0.693387 18.6054 0.416794C17.938 0.140201 17.2225 -0.00145225 16.5 1.12249e-05C15.7776 -0.000961059 15.0622 0.140917 14.3948 0.417481C13.7275 0.694046 13.1214 1.09984 12.6115 1.61151L0.0213125 14.201L0 22H7.777L20.3885 9.38851C20.8994 8.87799 21.3046 8.27181 21.5811 7.6046C21.8576 6.9374 22 6.22224 22 5.50001C22 4.77778 21.8576 4.06263 21.5811 3.39542C21.3046 2.72821 20.8994 2.12203 20.3885 1.61151ZM6.6385 19.25H5.5V16.5H2.76581L2.76856 15.345L14.5558 3.55576L18.4443 7.44426L6.6385 19.25Z"
                      fill="black" />
                  </svg>Записаться онлайн</a>
              </div>

              <div class="slider-hero__image">
                <img src="./img/artwork/analizy-na-koronavirus.svg" alt="картинка услуги" height="685">
              </div>

            </div>
          </article>
          <!-- Ведение беременности  -->
          <article class="swiper-slide slider-hero__item slider-hero__item--3">
            <div class="wrapper">

              <div class="slider-hero__details">
                <span class="slider-hero__price">60 000 руб.</span>
                <h3 class="slider-hero__title">Ведение беременности</h3>
                <p class="slider-hero__description">Осуществляется опытными врачами акушер-гинекологами на контрактной
                  основе <strong>с последующей выдачей
                    родового сертификата</strong>.</p>
                <ul class="slider-hero__list slider-hero__list--midle">
                  <li>
                    <div class="icon icon--achievement"></div>

                    <span>Гинеколог <b>с 30-летним
                        опытом работы</b></span>
                  </li>
                  <li>
                    <div class="icon icon--uzi"></div>

                    <span>Весь спектр современных
                      методов <b>диагностики состояния плода</b></span>
                  </li>

                  <li>
                    <div class="icon icon--heart"></div>

                    <span>Искренняя забота <b>о здоровье мамы и ребёнка</b></span>
                  </li>
                </ul>
                <a href="#" class="button button--icon">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M20.3885 1.61151C19.8789 1.09944 19.2729 0.693387 18.6054 0.416794C17.938 0.140201 17.2225 -0.00145225 16.5 1.12249e-05C15.7776 -0.000961059 15.0622 0.140917 14.3948 0.417481C13.7275 0.694046 13.1214 1.09984 12.6115 1.61151L0.0213125 14.201L0 22H7.777L20.3885 9.38851C20.8994 8.87799 21.3046 8.27181 21.5811 7.6046C21.8576 6.9374 22 6.22224 22 5.50001C22 4.77778 21.8576 4.06263 21.5811 3.39542C21.3046 2.72821 20.8994 2.12203 20.3885 1.61151ZM6.6385 19.25H5.5V16.5H2.76581L2.76856 15.345L14.5558 3.55576L18.4443 7.44426L6.6385 19.25Z"
                      fill="black" />
                  </svg>Записаться онлайн</a>
              </div>

              <div class="slider-hero__image">
                <img src="./img/artwork/vedenie-beremennosti.svg" alt="картинка услуги" height="685">
              </div>

            </div>
          </article>
          <!-- Видеоэзофаго-гастродуодено-скопия (ВЭГДС)  -->
          <article class="swiper-slide slider-hero__item slider-hero__item--4">
            <div class="wrapper">

              <div class="slider-hero__details">
                <span class="slider-hero__price">1 700 руб.</span>
                <h3 class="slider-hero__title slider-hero__title--small">Видеоэзофаго-гастродуодено-скопия (ВЭГДС)</h3>
                <p class="slider-hero__description slider-hero__description--small">Современный высокоинформативный метод исследования. Позволяет
                  визуализировать слизистые оболочки и полость пищевода
                  и желудка. Процедура абсолютно безболезненна. При этом показывает высокую результативность. </p>
                <ul class="slider-hero__list">
                  <li>
                    <div class="icon icon--stomach"></div>

                    <span><b>высокоточное японское оборудование</b> последнего поколения</span>
                  </li>
                  <li>
                    <div class="icon icon--achievement"></div>

                    <span><b>опытные специалисты</b>
                      со стажем более 20 лет</span>
                  </li>
                  <li>
                    <div class="icon icon--microscope"></div>

                    <span>возможность выполнения <b>гистологического анализа</b></span>
                  </li>
                </ul>
                <a href="#" class="button button--icon">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M20.3885 1.61151C19.8789 1.09944 19.2729 0.693387 18.6054 0.416794C17.938 0.140201 17.2225 -0.00145225 16.5 1.12249e-05C15.7776 -0.000961059 15.0622 0.140917 14.3948 0.417481C13.7275 0.694046 13.1214 1.09984 12.6115 1.61151L0.0213125 14.201L0 22H7.777L20.3885 9.38851C20.8994 8.87799 21.3046 8.27181 21.5811 7.6046C21.8576 6.9374 22 6.22224 22 5.50001C22 4.77778 21.8576 4.06263 21.5811 3.39542C21.3046 2.72821 20.8994 2.12203 20.3885 1.61151ZM6.6385 19.25H5.5V16.5H2.76581L2.76856 15.345L14.5558 3.55576L18.4443 7.44426L6.6385 19.25Z"
                      fill="black" />
                  </svg>Записаться онлайн</a>
              </div>

              <div class="slider-hero__image">
                <img src="./img/artwork/videoezofagogastroduodenoskopiya.svg" alt="картинка услуги" height="685">
              </div>

            </div>
          </article>

        </div>
        <div class="slider-hero__pagination">
          <div class="wrapper">
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>

    </section>
    <!-- преимущества  -->
    <section class="benefits">
      <div class="wrapper">
        <ul class="benefits__list list-reset">
          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="none">
                <path fill="#41E1BB"
                  d="M21.772 15.294a6.531 6.531 0 1 0 0 13.063 6.531 6.531 0 0 0 0-13.063Zm0 8.709a2.176 2.176 0 1 1 0-4.353 2.176 2.176 0 0 1 0 4.353Zm19.595-4.354h-2.33A17.417 17.417 0 0 0 23.95 4.56V2.23a2.177 2.177 0 0 0-4.354 0v2.33A17.417 17.417 0 0 0 4.507 19.649h-2.33a2.177 2.177 0 1 0 0 4.354h2.33a17.418 17.418 0 0 0 15.088 15.088v2.33a2.177 2.177 0 1 0 4.354 0v-2.33a17.417 17.417 0 0 0 15.088-15.088h2.33a2.177 2.177 0 0 0 0-4.354Zm-19.595 15.24a13.063 13.063 0 1 1 0-26.127 13.063 13.063 0 0 1 0 26.127Z" />
              </svg>
            </div>
            <span class="benefits__text">Новейшее оборудование</span>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" fill="none">
                <path fill="#41E1BB"
                  d="M35.25 41.546H24.5c.141-.397.24-.808.297-1.225A16.68 16.68 0 0 0 35.25 24.958a16.474 16.474 0 0 0-4.41-11.243l1.32-1.323c.228-.226.4-.503.5-.808l1.468-4.4a2.073 2.073 0 0 0-.5-2.124l-4.4-4.398a2.072 2.072 0 0 0-2.123-.501L22.71 1.627a2.068 2.068 0 0 0-.81.501L8.704 15.322a2.073 2.073 0 0 0 0 2.932l-2.936 2.934a2.074 2.074 0 0 0 0 2.934l4.4 4.396a2.073 2.073 0 0 0 2.932 0l2.931-2.93.005.004a2.073 2.073 0 0 0 2.932 0l8.937-8.94a12.348 12.348 0 0 1 3.197 8.306 12.54 12.54 0 0 1-7.164 11.261 6.17 6.17 0 0 0-10.625.13 14.144 14.144 0 0 1-2.322-1.148 2.05 2.05 0 0 0 1.45-1.949 2.074 2.074 0 0 0-2.074-2.074H2.074a2.073 2.073 0 1 0 0 4.147h2.76a18.276 18.276 0 0 0 7.707 5.128c.06.372.154.738.282 1.093H2.073a2.074 2.074 0 0 0 0 4.147H35.25a2.074 2.074 0 0 0 0-4.147ZM11.635 24.122l-1.469-1.466 1.469-1.468 1.466 1.468-1.466 1.466ZM28.882 9.807 17.501 21.194l-4.396-4.406L24.486 5.407l2.719-.907 2.585 2.586-.908 2.72Zm-10.22 31.74a2.074 2.074 0 1 1 0-4.149 2.074 2.074 0 0 1 0 4.148Z" />
              </svg></div>
            <span class="benefits__text">Точная диагностика</span>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="44" fill="none">
                <path fill="#41E1BB"
                  d="M17.418 24.003a2.177 2.177 0 0 0-2.178 2.177v6.532a2.177 2.177 0 0 0 4.355 0V26.18a2.177 2.177 0 0 0-2.177-2.177Zm10.886-8.709V10.94a10.886 10.886 0 1 0-21.772 0v4.354A6.532 6.532 0 0 0 0 21.826v15.24a6.532 6.532 0 0 0 6.532 6.532h21.772a6.531 6.531 0 0 0 6.531-6.532v-15.24a6.532 6.532 0 0 0-6.531-6.532ZM10.886 10.94a6.532 6.532 0 0 1 13.063 0v4.354H10.886V10.94Zm19.595 26.126a2.177 2.177 0 0 1-2.177 2.177H6.532a2.177 2.177 0 0 1-2.178-2.177v-15.24a2.177 2.177 0 0 1 2.178-2.177h21.772a2.177 2.177 0 0 1 2.177 2.177v15.24Z" />
              </svg>
            </div>
            <span class="benefits__text">Конфиденциальность пациентов</span>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="47" fill="none">
                <path fill="#41E1BB"
                  d="M31.505 32.103a1.504 1.504 0 0 0-.178-.356l-.237-.297-.297-.238a1.503 1.503 0 0 0-.356-.178c-.118-.06-.245-.1-.376-.118a1.978 1.978 0 0 0-1.781.534 3.137 3.137 0 0 0-.238.297c-.075.11-.135.23-.178.356a1.262 1.262 0 0 0-.119.356c-.01.132-.01.264 0 .396.002.52.209 1.017.574 1.385.183.192.406.34.653.436.226.096.467.15.713.158a1.979 1.979 0 0 0 1.979-1.979c.01-.132.01-.264 0-.396a1.262 1.262 0 0 0-.159-.356Zm3.642-8.925-2.692-8.035a5.937 5.937 0 0 0-5.62-3.958h-14.09a5.938 5.938 0 0 0-5.62 3.958l-2.692 8.035A5.937 5.937 0 0 0 0 28.897v7.916a5.937 5.937 0 0 0 3.958 5.58v2.336a1.979 1.979 0 0 0 3.958 0v-1.98h23.748v1.98a1.979 1.979 0 1 0 3.958 0v-2.335a5.937 5.937 0 0 0 3.958-5.581v-7.916a5.937 5.937 0 0 0-4.433-5.72ZM10.865 16.39a1.98 1.98 0 0 1 1.88-1.346h14.09a1.98 1.98 0 0 1 1.979 1.346l2.078 6.57H8.688l2.177-6.57Zm24.757 20.423a1.98 1.98 0 0 1-1.98 1.979H5.938a1.98 1.98 0 0 1-1.979-1.98v-7.915a1.979 1.979 0 0 1 1.979-1.979h27.706a1.979 1.979 0 0 1 1.979 1.979v7.916Zm-13.853-5.937H17.81a1.98 1.98 0 1 0 0 3.958h3.958a1.979 1.979 0 1 0 0-3.958Zm-10.053 1.227a1.504 1.504 0 0 0-.178-.356l-.238-.297a1.98 1.98 0 0 0-2.157-.416 1.979 1.979 0 0 0-.653.416 3.13 3.13 0 0 0-.238.297c-.075.11-.134.23-.178.356-.07.11-.124.23-.158.356-.01.132-.01.264 0 .396a1.979 1.979 0 0 0 3.958 0c.01-.132.01-.264 0-.396a1.267 1.267 0 0 0-.158-.356ZM22.371 7.976c-.1.24-.248.458-.433.64a1.98 1.98 0 0 1-3.387-1.398V2.864a1.987 1.987 0 0 1 3.974 0v4.354c0 .26-.053.518-.154.758Z" />
                <path fill="#41E1BB"
                  d="M17.599 6.876c-.24-.101-.459-.248-.642-.433a1.979 1.979 0 0 1 1.4-3.387h4.354a1.987 1.987 0 1 1 0 3.974h-4.354a1.979 1.979 0 0 1-.758-.154Z" />
              </svg>
            </div>
            <span class="benefits__text">Выезд врача на дом</span>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none">
                <path fill="#41E1BB" stroke="#41E1BB" stroke-width=".3"
                  d="M44.485 33.314h-6.129a1.555 1.555 0 0 1-1.348-2.331 8.59 8.59 0 0 0-1.967-10.91c-2.01-1.664-4.558-2.312-7.176-1.816-3.438.647-6.163 3.413-6.78 6.883a8.563 8.563 0 0 0 1.01 5.843 1.555 1.555 0 0 1-1.348 2.332H4.17A3.173 3.173 0 0 1 1 30.145V4.222a3.172 3.172 0 0 1 3.17-3.17h40.315a3.173 3.173 0 0 1 3.17 3.17v25.923a3.172 3.172 0 0 1-3.17 3.168Zm-3.759-3.11h3.759l.06-25.98-.06-.06H4.169L4.11 30.146l14.258.05a11.686 11.686 0 0 1-.345-5.599c.841-4.737 4.566-8.513 9.267-9.396 3.493-.66 7.041.246 9.735 2.479a11.688 11.688 0 0 1 3.701 12.523Z" />
                <path fill="#41E1BB" stroke="#41E1BB" stroke-width=".3"
                  d="M29.551 38.418c-6.461 0-11.716-5.257-11.716-11.717 0-6.46 5.256-11.715 11.715-11.715 6.46 0 11.716 5.255 11.716 11.715S36.01 38.418 29.55 38.418h.001Zm0-20.321a8.616 8.616 0 0 0-8.606 8.604 8.615 8.615 0 0 0 8.605 8.606 8.615 8.615 0 0 0 8.606-8.606 8.616 8.616 0 0 0-8.606-8.604h.001Z" />
                <path fill="#41E1BB" stroke="#41E1BB" stroke-width=".3"
                  d="M29.552 31.366a4.665 4.665 0 1 0 0-9.33 4.665 4.665 0 0 0 0 9.33ZM39.45 47.71a1.554 1.554 0 0 1-1.1-.456l-9.32-9.32a1.555 1.555 0 0 1 1.01-2.652 8.569 8.569 0 0 0 6.968-4.298 1.556 1.556 0 0 1 2.448-.324l7.743 7.745a1.555 1.555 0 0 1-1.1 2.655h-5.094v5.094a1.555 1.555 0 0 1-1.556 1.555Zm-6.159-9.913 4.603 4.603v-2.895a1.555 1.555 0 0 1 1.556-1.556h2.895l-3.777-3.779a11.641 11.641 0 0 1-5.277 3.627Z" />
                <path fill="#41E1BB" stroke="#41E1BB" stroke-width=".3"
                  d="M19.654 47.71a1.555 1.555 0 0 1-1.555-1.556V41.06h-5.096a1.557 1.557 0 0 1-1.1-2.654l7.745-7.745a1.555 1.555 0 0 1 2.448.324 8.571 8.571 0 0 0 6.964 4.298 1.552 1.552 0 0 1 1.012 2.652l-9.318 9.32a1.553 1.553 0 0 1-1.1.455Zm-2.895-9.76h2.895a1.555 1.555 0 0 1 1.555 1.554V42.4l4.604-4.603a11.647 11.647 0 0 1-5.278-3.625l-3.776 3.777Zm7.569-27.978H8.36a1.555 1.555 0 0 1 0-3.11h15.966a1.555 1.555 0 1 1 0 3.11Zm-6.26 5.782H8.361a1.555 1.555 0 1 1 0-3.11h9.707a1.555 1.555 0 1 1 0 3.11Z" />
              </svg>
            </div>
            <span class="benefits__text">Врачи высшей категории</span>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" fill="none">
                <path fill="#41E1BB"
                  d="M31.485 25.25v-4.197h-20.99v8.396H0v12.594h41.98V25.251H31.487Zm-20.99 12.595H4.198v-4.198h6.297v4.198Zm16.792 0H14.693V25.25h12.594v12.594Zm10.496 0h-6.298v-8.396h6.298v8.396Zm-22.9-25.566-.735 4.198a2.098 2.098 0 0 0 .84 2.099 2.099 2.099 0 0 0 2.098.147l3.8-2.1 3.799 2.1c.297.16.628.247.965.252.445.001.879-.138 1.239-.4a2.098 2.098 0 0 0 .84-2.098l-.735-4.198 3.085-3.002a2.099 2.099 0 0 0-1.175-3.59l-4.198-.608-1.89-3.841a2.1 2.1 0 0 0-3.778 0L17.15 5.079l-4.198.609a2.099 2.099 0 0 0-1.175 3.59l3.106 3Zm4.008-3.212a2.099 2.099 0 0 0 1.575-1.133l.524-1.029.504 1.029a2.1 2.1 0 0 0 1.574 1.133l1.134.168-.819.798a2.1 2.1 0 0 0-.608 1.868l.21 1.112-1.03-.524a1.973 1.973 0 0 0-1.93 0l-1.029.524.21-1.112a2.1 2.1 0 0 0-.609-1.868l-.818-.798 1.112-.168Z" />
              </svg>
            </div>
            <span class="benefits__text">Постоянно повышаем свои квалификации</span>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="none">
                <path fill="#41E1BB" stroke="#41E1BB" stroke-width=".3"
                  d="M41.434 41.489H1V16.606h6.22v3.11H4.11V38.38h34.214V19.717h-3.11v-3.11h6.22v24.882Z" />
                <path fill="#41E1BB" stroke="#41E1BB" stroke-width=".3"
                  d="M10.33 32.157a4.666 4.666 0 0 1-4.665-4.666V1.054h9.33V27.49a4.665 4.665 0 0 1-4.664 4.666ZM8.776 4.164v23.327a1.555 1.555 0 0 0 3.11 0V4.164h-3.11Zm12.441 27.993a4.666 4.666 0 0 1-4.665-4.666V1.054h9.331V27.49a4.666 4.666 0 0 1-4.666 4.666ZM19.662 4.164v23.327a1.555 1.555 0 1 0 3.11 0V4.164h-3.11Zm12.441 27.993a4.666 4.666 0 0 1-4.665-4.666V1.054h9.331V27.49a4.666 4.666 0 0 1-4.666 4.666ZM30.547 4.164v23.327a1.555 1.555 0 1 0 3.11 0V4.164h-3.11Z" />
                <path fill="#41E1BB" stroke="#41E1BB" stroke-width=".3"
                  d="M18.106 15.051H13.44v3.11h4.666v-3.11ZM28.993 15.051h-4.666v3.11h4.666v-3.11Z" />
              </svg>
            </div>
            <span class="benefits__text">Лабораторные исследования</span>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="42" fill="none">
                <path fill="#41E1BB"
                  d="M21.86.054h-7.947a1.993 1.993 0 0 0-1.987 1.986c0 1.093.894 1.987 1.987 1.987h7.947a1.993 1.993 0 0 0 1.987-1.987A1.993 1.993 0 0 0 21.86.054ZM17.887 25.88a1.993 1.993 0 0 0 1.986-1.987v-7.946a1.993 1.993 0 0 0-1.986-1.987 1.993 1.993 0 0 0-1.987 1.986v7.947c0 1.093.894 1.987 1.987 1.987ZM31.852 12.75l1.49-1.49a1.972 1.972 0 0 0 0-2.782l-.02-.02c-.775-.774-2.006-.754-2.781 0l-1.49 1.49c-3.08-2.463-6.954-3.933-11.165-3.933C8.35 6.014.244 13.88.006 23.418c-.258 10.092 7.828 18.357 17.88 18.357 9.894 0 17.881-8.007 17.881-17.88 0-4.212-1.47-8.087-3.914-11.146ZM17.887 37.8c-7.69 0-13.908-6.218-13.908-13.907 0-7.688 6.219-13.907 13.908-13.907 7.688 0 13.907 6.219 13.907 13.907 0 7.689-6.219 13.907-13.907 13.907Z" />
              </svg>
            </div>
            <span class="benefits__text">Приём в день обращения</span>
          </li>
        </ul>

      </div>
    </section>
    <!-- Основные направления  -->
    <section class="main-directions">
      <div class="wrapper">
        <h2 class="title ">Основные направления</h2>
        <ul class="main-directions__list list-reset">
          <li class="main-directions__card">
            <div class="main-directions__content">
              <h3 class="main-directions__item-name">Услуги для&nbsp;детей</h3>
              <p class="main-directions__text">от артопедии и педиатрии до ультразвуковой диагностики</p>
              <a href="" class="button button--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                  <path stroke="#000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5" />
                </svg><span>Подробнее</span>
              </a>
              <div class="main-directions__image">
                <img src="./img/artwork/for-children.svg" alt="рисунок детей в клинике" width="336" height="235">
              </div>
            </div>

          </li>

          <li class="main-directions__card main-directions__card--mod">
            <div class="main-directions__content">
              <h3 class="main-directions__item-name">Услуги для&nbsp;взрослых</h3>
              <p class="main-directions__text">поможем вам предупредить или диагностировать недуг</p>
              <a href="" class="button button--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none">
                  <path stroke="#000" stroke-linecap="round" stroke-width="3" d="m2 1.5 9 8.5-9 8.5" />
                </svg><span>Подробнее</span>
              </a>
              <div class="main-directions__image">
                <img src="./img/artwork/for-people.svg" alt="рисунок взрослых пациентов в клинике" width="354"
                  height="272">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- Услуги для детей  -->
    <section class="service-preview">
      <div class="wrapper">
        <h2 class="title">Услуги для детей</h2>
        <p class="subtitle">Ультразвуковая диагностика помогает врачам всех специальностей в обследовании пациента и
          уточнения диагноза. Пациентов самого юного возраста это исследование тоже не обходит стороной.</p>

        <ul class="service-preview__list list-reset">
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/allergologiya-immunologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Аллергология-иммунология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/gastroenterologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Гастроэнтерология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/kardiologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Кардиология</p>
            </a>
          </li>

          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/otorinolaringologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Оториноларингология (ЛОР)</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/ortopediya.svg" alt="">
              </div>
              <p class="service-preview__text">Ортопедия</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/pediatriya.svg" alt="">
              </div>
              <p class="service-preview__text">Педиатрия</p>
            </a>
          </li>

          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/pulmonologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Пульмонология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/ultrazvukovaya-diagnostika.svg" alt="">
              </div>
              <p class="service-preview__text">Ультразвуковая диагностика</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/funkcionalnaya-diagnostika.svg" alt="">
              </div>
              <p class="service-preview__text">Функциональная диагностика</p>
            </a>
          </li>

        </ul>
      </div>
    </section>
    <!-- промо блок  -->
    <section class="promo">
      <div class="wrapper">

        <div class="promo__text">
          <h2 class="title">Затрудняетесь с выбором услуги?</h2>
          <p class="subtitle">Мы бесплатно проконсультируем вас по телефону или в чате.
            Позвоните или оставьте заявку через форму на сайте.</p>
        </div>
        <div class="promo__call">
          <a href="tel:+74812605101">+7 (4812) 60-51-01</a>
          <a href="#" class="button button--icon">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 0C4.95 0 5.73695e-08 4.95 5.73695e-08 11C5.73695e-08 13.53 0.88 15.95 2.53 17.93L0.33 20.13C-0.11 20.57 -0.11 21.23 0.33 21.67C0.55 21.89 0.77 22 1.1 22H11C17.05 22 22 17.05 22 11C22 4.95 17.05 0 11 0ZM6.6 12.1C5.94 12.1 5.5 11.66 5.5 11C5.5 10.34 5.94 9.9 6.6 9.9C7.26 9.9 7.7 10.34 7.7 11C7.7 11.66 7.26 12.1 6.6 12.1ZM11 12.1C10.34 12.1 9.9 11.66 9.9 11C9.9 10.34 10.34 9.9 11 9.9C11.66 9.9 12.1 10.34 12.1 11C12.1 11.66 11.66 12.1 11 12.1ZM15.4 12.1C14.74 12.1 14.3 11.66 14.3 11C14.3 10.34 14.74 9.9 15.4 9.9C16.06 9.9 16.5 10.34 16.5 11C16.5 11.66 16.06 12.1 15.4 12.1Z" fill="black"/>
              </svg>
              Задать вопрос</a>
        </div>
      </div>
    </section>
    <!-- Услуги для взрослых  -->
    <section class="service-preview">
      <div class="wrapper">
        <h2 class="title">Услуги для взрослых</h2>
        <p class="subtitle">Ультразвуковая диагностика помогает врачам всех специальностей в обследовании пациента и
          уточнения диагноза. Пациентов самого юного возраста это исследование тоже не обходит стороной.</p>

        <ul class="service-preview__list list-reset">
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/allergologiya-immunologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Аллергология-иммунология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/gastroenterologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Гастроэнтерология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/kardiologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Кардиология</p>
            </a>
          </li>

          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/otorinolaringologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Оториноларингология (ЛОР)</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/ortopediya.svg" alt="">
              </div>
              <p class="service-preview__text">Ортопедия</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/pediatriya.svg" alt="">
              </div>
              <p class="service-preview__text">Педиатрия</p>
            </a>
          </li>

          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/pulmonologiya.svg" alt="">
              </div>
              <p class="service-preview__text">Пульмонология</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/ultrazvukovaya-diagnostika.svg" alt="">
              </div>
              <p class="service-preview__text">Ультразвуковая диагностика</p>
            </a>
          </li>
          <li class="service-preview__item">
            <a href="#" class="service-preview__link">
              <div class="service-preview__icon">
                <img src="./img/services/funkcionalnaya-diagnostika.svg" alt="">
              </div>
              <p class="service-preview__text">Функциональная диагностика</p>
            </a>
          </li>

        </ul>
      </div>
    </section>
    <!-- промо блок  -->
    <section class="promo">
      <div class="wrapper">

        <div class="promo__text">
          <p class="title title--clear">Если у вас остались вопросы – звоните: </p>
        </div>
        <div class="promo__call promo__call--mod">
          <a href="tel:+74812605101">+7 (4812) 60-51-01</a>
          <a href="#" class="button button--icon">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 0C4.95 0 5.73695e-08 4.95 5.73695e-08 11C5.73695e-08 13.53 0.88 15.95 2.53 17.93L0.33 20.13C-0.11 20.57 -0.11 21.23 0.33 21.67C0.55 21.89 0.77 22 1.1 22H11C17.05 22 22 17.05 22 11C22 4.95 17.05 0 11 0ZM6.6 12.1C5.94 12.1 5.5 11.66 5.5 11C5.5 10.34 5.94 9.9 6.6 9.9C7.26 9.9 7.7 10.34 7.7 11C7.7 11.66 7.26 12.1 6.6 12.1ZM11 12.1C10.34 12.1 9.9 11.66 9.9 11C9.9 10.34 10.34 9.9 11 9.9C11.66 9.9 12.1 10.34 12.1 11C12.1 11.66 11.66 12.1 11 12.1ZM15.4 12.1C14.74 12.1 14.3 11.66 14.3 11C14.3 10.34 14.74 9.9 15.4 9.9C16.06 9.9 16.5 10.34 16.5 11C16.5 11.66 16.06 12.1 15.4 12.1Z" fill="black"/>
              </svg>
              Записаться онлайн</a>
        </div>
      </div>
    </section>
    <!-- мобильные ссылки нижнем экране -->
    <div class="navigation__mobile">
      <a href="#" class="button">Записаться</a>
      <a href="#" class="button">Задать вопрос</a>
    </div>

  </main>
  <script src="./libs/micromodal.min.js"></script>
  <script src="./libs/swiper-bundle.min.js"></script>
  <script src="./libs/wow.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>
