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
        <li><a><span>Все отзывы</span></a></li>
      </ul>
      <br>
      <h1 class="title">Отзывы о медицинском центре УЗИ +</h1>
      <div class="all-reviews__lead">
        <p class="">Здесь может оставить отзыв каждый, кто пользовался услугами нашего медицинского
          центра.</p>

      </div>

      <!-- виджет яндекса  -->
      <?php include "./components/yandex-widget-review.php"; ?>

      <h2>Отзывы опубликованные на сайте</h2>


      <div class="all-reviews__list">


        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Анастасия, отзыв оставлен 13.08.2018</p>

          </div>
          <div class="review-item__right">

            <blockquote>Татьяна Викторовна - наш любимый педиатр. Мы ей благодарны.
              Жизнь нашего сына доверии только ей!!!</blockquote>
          </div>
        </article>

        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Вероника, отзыв оставлен 19.02.2018</p>

          </div>
          <div class="review-item__right">

            <blockquote>Очень хороший медицинский центр!Регулярно хожу на осмотры
              только к Щербаковой Алесе Валерьевне.Потрясающий врач.Добрая,всегда с хорошим настроением,ответит на
              любые ваши вопросы!Целью стоит не содрать с вас денег,а реально помочь!Рекомендую!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Татьяна Бовшевер, отзыв оставлен 10.02.2018</p>

          </div>
          <div class="review-item__right">

            <blockquote>Спасибо клиники.Спасибо врачу Сологуб.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Ольга, отзыв оставлен 23.01.2018</p>

          </div>
          <div class="review-item__right">

            <blockquote>Наблюдаюсь уже лет 7. Очень довольна. Персонал внимательный,
              специалисты все какие нужно есть. Цены адекватные. Тесновато, это правда. В поликлинику по месту
              жительства перестала ходить совсем. Елена Александровна Хуторова очень помогла, когда было все сложно...
              Большое ей спасибо. Алесю Валерьевну жду даже из отпусков и учеб. Хожу только к ней. Большое спасибо
              всем сотрудникам за вашу работу.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Катя, отзыв оставлен 18.01.2018</p>

          </div>
          <div class="review-item__right">

            <blockquote>Татьяна Викторовна очень хороший врач,все бы врачи были такими
              как Татьяна Викторовна.ВРАЧ с большой буквы.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Анастасия, отзыв оставлен 19.12.2017</p>

          </div>
          <div class="review-item__right">

            <blockquote>Хочу выразить благодарность центру на Попова. Отзывчивые
              сотрудники на ресепшн, приятные цены и самое главное квалифицированные специалисты, отдельное спасибо
              хочу сказать Борисенко Е. Чуткий и приятный человек, профессионал в своём деле!</blockquote>
          </div>
        </article>

        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Анастасия, отзыв оставлен 15.09.2017</p>

          </div>
          <div class="review-item__right">

            <blockquote>Огромную благодарность хочу выразить врачу Щербаковой Алесе
              Валерьевне за возможность доверить своё здоровье ее знаниям и опыту! Открытая, доброжелательная и
              позитивная как человек. Грамотная, скрупулезная, спокойная и уверенная как врач! Достойный специалист!
              Центр на Попова весьма уютный с приветливым персоналом.
              Всем здоровья и добра!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Снежана, отзыв оставлен 22.07.2017</p>

          </div>
          <div class="review-item__right">

            <blockquote>Огромное спасибо .Очень понравилось в центре персонал вежливый
              ,на узи все рассказали подробно .Остались с сыном довольны и ценой.Сами мы с Белоруссии и есть с чем
              сравнивать. Успехов всему персоналу центра.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Ангелина, отзыв оставлен 29.06.2017</p>

          </div>
          <div class="review-item__right">

            <blockquote>Сегодня впервые посетили данный центр и были очень
              довольны.Огромная благодарность педиатору Грибко Т.В. по настоящему врач от Бога которых к сожалению
              единицы.Татьяна Викторовна очень внимательно и долго слушала ребёнка,помогла нам определить причины
              нашего длительного кашля а не просто назначала лечение как во многих центах .Татьяна Викторовна
              ,огромное вам спасибо ,благодаря Вам наши дети здоровы!
              Что касается самого центра,то очень вежливый и заботливый администратор.Пусть центр и маленький,но зато
              там работают профессионалы ,а в дет.кабинете есть множество игрушек,благодаря чему ребёнка можно увлечь
              пока доктор все объясняет родителям .</blockquote>
          </div>
        </article>

        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Мария, отзыв оставлен 03.04.2017</p>

          </div>
          <div class="review-item__right">

            <blockquote>Огромное спасибо Щербаковой Алеси Валерьевне. Помогла
              справиться со всеми вопросами и проблемами. Про неё можно сказать: "Специалист от Бога".</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Ольга, отзыв оставлен 28.01.2017</p>

          </div>
          <div class="review-item__right">

            <blockquote>Самое худшее обслуживание со стороны администраторов !!!! Не
              возможно дозвониться, если дозвонился, то рявкают и кидают трубку. Затем просто сбрасывают твой номер.
            </blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Мария , отзыв оставлен 19.10.2016</p>

          </div>
          <div class="review-item__right">

            <blockquote>Очень благодарна Щербаковой Алесе Валерьевне! Отзывчивая,
              вежливая, всё прекрасно объясняет! Была у неё и на консультации, и на УЗИ - очень довольна! При любых
              трудностях и вопросах буду ходить только к ней! Спасибо Вам, Алеся Валерьевна!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Анна, отзыв оставлен 15.10.2016</p>

          </div>
          <div class="review-item__right">

            <blockquote>Мне очень нравится этот медицинский центр. Всегда приветливый
              персонал. Все вежливы,доброжелательны. Хотелось бы отметить Щербакову Алесю Валерьевну. Внимательный
              врач. У нее приятно находиться на приеме. Спасибо</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">

          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Евгения, отзыв оставлен 04.08.2016</p>

          </div>
          <div class="review-item__right">

            <blockquote>Очень хотим с мужем поблагодарить Буцык Ирину Игоревну. Нам
              очень повезло обратиться за скринингом первого триместра именно в этот центр. Особенно после недавнего
              печального опыта в другой клинике. Ирина Игоревна профессионал от Бога и Человек с большой буквы :-))
              Также огромное спасибо Борисенко Елене Васильевне за проведенное узи. Наша вторая встреча с малышом была
              очень познавательна :-) Показали и рассказали все что нужно и даже больше.
              Еще раз огромное спасибо!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Наталья, отзыв оставлен 20.07.2016</p>
          </div>
          <div class="review-item__right">
            <blockquote>Очень противоречивое мнение сложилось от посещения центра. Делали узи ребенку у Красильниковой
              ЛА очень понравилось.Врач внимательный все объясняет-общается с ребенком и родителями. А сегодня попали к
              другому специалисту Куманцовой - могу ошибиться в фамилии. тк разобраться в ее почерке очень сложно - но
              это не самое неприятное.Осмотр ребенка быстрый-отвечала очень сухо, раздраженно - буквально вытаскивали от
              нее хоть какие то слова с мужем. Предварительно записались на 2 узи - в итоге решили сделать еще одно
              дополнительно . А в заключении этого узи написано что исследование затруднено ,тк был недавно прием пищи у
              ребенка - хотя до этого осмотра мы врачу сказали что кушали час назад. Неприятно! Мы на не бесплатное
              посещение пришли. Заплатили приличную сумму - а осталось впечатление как после посещения обычной
              поликлиники.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Марина, отзыв оставлен 21.05.2016</p>
          </div>
          <div class="review-item__right">
            <blockquote>У меня два отзыва. Никому не могу рекомендовать детского педиатра Крутикову Н.Ю. Назначила моему
              шестимесячному ребенку кучу лекарств (авось что-нибудь поможет). Но потом мы попали в больницу. Слава Богу
              к нормальным врачам, которые действительно знают свое дело. Быть ДМН еще ничего не значит. В этом я точно
              убедилась. ТОЛЬКО ГРИБКО ТАТЬЯНА ВИКТОРОВНА! Вот это врач от Бога. </blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Людмила, отзыв оставлен 19.12.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Очень понравился наш центр "Узи+" особенно врач Анощенкова Л.В. которая поддержала меня в
              трудную для меня минуту, все сделано было на совесть, все рекомендации выполняла и получила хороший
              результат. Так сложились обстоятельства, долго уже не обращалась в центр, хотелось бы узнать мой доктор
              Анощенкова Л.В. работает на Попова д 68 если нет то где ее можно найти?</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Лилия, отзыв оставлен 24.11.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Дудченко Михаил Иванович врач от Бога. Спасибо огромное. Низкий поклон</blockquote>
          </div>
        </article>

        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Анна, отзыв оставлен 12.11.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Грибко Татьяна Викторовна, хороший человек, прекрасный специалист, но к большому сожалению,
              попасть на прием в начальный период заболевания невозможно, так как запись осуществляется только по
              понедельникам на следующую неделю, а хотелось бы иметь возможность получать консультацию, когда ребенок
              только начинает болеть.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Анна, отзыв оставлен 31.10.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Огромное спасибо Ларисе Викторовне Анощенковой!!! За её доброту,понимание и грамотный и
              профессиональный подход. Всем советую как гинеколога!!!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Лилия, отзыв оставлен 11.09.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Спасибо большое Грибко Татьяне Викторовне ,специалист от Бога ,вытаскивали нас из разных
              болезней ,адекватно оценивает ситуацию и никогда не выпишет ничего лишнего,в отличии от участковый врачей
              антибиотики назначает только по мере крайней необходимости.</blockquote>
          </div>
        </article>

        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Анна, отзыв оставлен 07.04.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Была на приеме у врача Фофановой Ирины Юрьевны, грамотный специалист, все подробно объясняет,
              лишних обследований не назначает, жаль что в последнее время сложно попасть к ней на прием</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Алла, отзыв оставлен 21.03.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Большое спасибо Фофоновой Ирине Юрьевне. Доходчиво все объяснила, внимательно приняла.Прекрасное
              впечатление. Всем советую.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Татьяна, отзыв оставлен 13.03.2015</p>
          </div>
          <div class="review-item__right">
            <blockquote>Здравствуйте.
              Один вопрос, почему на сайте нет режима работы центра? все пролистала, не нашла.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Надежда, отзыв оставлен 16.03.2014</p>
          </div>
          <div class="review-item__right">
            <blockquote>Дудченко Михаил Иванович не лишен ч/ю, обхождение замечательное, самое подробное заключение
              (делал пункцию мол.железы) из всего, что мне когда-либо писали врачи. Цена за услугу самая низкая, что я
              нашла в Интернете.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Наталия, отзыв оставлен 20.12.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Очень хороший центр,приветливые администраторы, что не всегда встречается в других центрах. На
              узи все подробно рассказали, лишних анализов нам не назначали, очень этого боялась, все-таки цены
              немаленькие. Анализы берет очень хорошая медсестра, качественно и небольно. Очень удобно, что готовность
              результатов приходит по смс.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Елена Муравейко, отзыв оставлен 04.10.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Добрый день. Уважаемая Ирина Игоревна! Большое Вам спасибо, что Вы открыли такой центр. Не
              многие города могут похвастаться такими центрами. Я живу и работаю в Москве и, к сожалению, здесь нет
              таких центров - доступных для людей, где работают настоящие профессионалы. Многие подумают, что я
              преувеличиваю, однако, я говорю правду. В прославленной столице найти профессионалов ОЧЕНЬ трудно, вот и
              ездим в Смоленск, чтобы правильно поставили диагноз, правильно назначили лечение, относились к пациентам:
              и к детям (у меня их двое), и взрослым, и пожилым людям одинаково хорошо и внимательно. Благодаря вашим
              специалистам мы смогли вовремя предупредить серьезные заболевания. Спасибо Вам ВСЕМ!!!!!! Вам Ирина
              Игоревна, Ларисе Юрьевне, всему медперсоналу и администраторам. Особенно хочу поблагодарить Татьяну
              Викторовну Грибко - (детского врача) благодаря ей мои дети живы и здоровы! Дай Бог Вам всего самого
              доброго и светлого!!!! Скоро увидимся!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Ольга, отзыв оставлен 03.09.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Очень квалифицированный и внимательный педиатор Крутикова Надежда Юрьевна. Жалею только, что
              стали наблюдаться у нее только с трех месяцев, а до этого мой ребенок мучился из-за безграмотности нашего
              участкового педиатора... Теперь если есть какие-то вопросы ходим только к Надежде Юрьевне, другим врачам
              веры нет.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Алина, отзыв оставлен 29.08.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Уважение и почет доктору Грибко Татьяне Викторовне ходим только к ней, врач от бога!!!
              Врач-узист женщина (к сожалению не помню фамилию) очень внимательно посмотрела и поставила диагноз,
              который был подтвержден врачом. Нам все понравилось. Хороший центр и мед.персонал!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/2.jpg" alt="">
            </div>
            <p>Виктор, отзыв оставлен 28.08.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>
              <p>Так вышло, что несколько лет назад мне пришлось уехать из Смоленска и Москву. С тех пор приезжаю
                в родной город редко и совсем ненадолго. Времени хватает только на редкие встречи с друзьями и на то,
                чтобы иногда посмотреть, как изменился город с момента, когда видел его в последний раз.
                Всем известно, что Москва – не самое благополучное в смысле условий проживания место. Жизнь в постоянном
                напряжении, стрессы на работе, само собой приводят к проблемам со здоровьем. С одной стороны понимаешь,
                что необходимо обратиться к врачу, а с другой думаешь, где найти на это время. Поэтому сначала все
                приходится откладывать «на потом». Потом в голову приходят мысли а-ля «а вдруг само пройдет». Понятно,
                что
                все это только усугубляет возникшую проблему.</p>
              <p>Отсутствие времени делает почти невозможным обращение в несколько разных клиник. Поэтому одним из
                основных
                требований является многопрофильность медцентра. Хочется пройти сразу всех врачей, пусть даже не за один
                день, но хотя бы в одной клинике. Безусловно, одним из определяющих факторов является репутация
                медицинского центра. Как показывает опыт, ни многочисленные регалии сотрудников, ни заоблачный прайс не
                могут стать гарантией качественного обслуживания. Когда приходится решать вопрос, куда обращаться,
                прислушиваюсь в первую очередь к рекомендациям друзей. После этого еще смотрю отзывы в интернете в
                независимых источниках. И если все «срастается», иду туда со спокойной душой.</p>
              <p>Приехал в Смоленск на достаточно длительный срок. После того, как решил все свои вопросы, вспомнил о
                том,
                что давно собирался заняться здоровьем. Тем более обстоятельства складываются благоприятно и времени
                вполне достаточно. Друзья рассказали о медицинском центре «УЗИ плюс», в котором уже почти три года
                обслуживается вся их семья. Моему первому требованию - быть многопрофильным – центр полностью отвечал.
                Осталось только убедиться в его репутации. Рекомендация друзей – главное, на что ориентировался. Но
                отступать от прежней схемы оценки все же не стал и решил подтвердить свое мнение отзывами клиентов в
                интернете. Все, кто писали о своих впечатлениях, отмечали подход врачей к своим клиентам – готовность
                помочь в решении их проблем и реальная заинтересованность в положительном результате лечения. Это именно
                то, что сейчас не так часто встречается. И во времена, когда частная медицина почти везде превратилась
                только в бизнес по выкачиванию денег из пациентов, такие исключения становятся уникальными и потому тем
                более ценными. Итак, в своем выборе окончательно определился и в один из дней, предварительно позвонив в
                «УЗИ плюс», записался на прием к врачу.</p>
              <p>В назначенный день приехал в один из спальных районов города, где и располагается центр. Сразу после
                того,
                как вошел в помещение, увидел, как велико количество тех, кто обращается за услугами «УЗИ плюс». А
                большое
                количество клиентов – самый хороший знак. И самое главное - в центр приходят и мамы с маленькими детьми.
                Как известно, здоровье наших детей мы можем доверить только самым проверенным и профессиональным
                специалистам. Теперь мне стало понятно, что в выборе я не ошибся. Осталось только немного подождать,
                пока
                меня не пригласят на прием.</p>
              <p>Ожидать пришлось совсем недолго. Дверь кабинета открылась, на пороге возникла милая девушка, с улыбкой
                назвала мою фамилию и пригласила войти. Оказавшаяся кардиологом, эта привлекательная особа, предложила
                присесть, и, как это обычно бывает, спросила, на что жалуюсь. Внимательно выслушала, затем отправила на
                кушетку и сделала обычную в таких случаях кардиограмму. Когда снова сел к столу, она после расшифровки
                данных подробно мне рассказала, о том, что на самом деле происходит с моим «пламенным мотором», и на что
                мне стоит обращать внимание. Оказалось, ничего страшного, в общем не происходит. Просто, нужно меньше
                работать и больше отдыхать. Ну, или хотя бы постараться этой концепции придерживаться. Зато с другими
                симптомами настоятельно рекомендовала обратиться к другим своим коллегам, сказав, что на оборудовании в
                центре можно было бы сразу провести соответствующую диагностику, сдать все анализы – т.е. пройти
                комплексное обследование. Причем, обо всем этом говорилось в такой форме, что сразу была понятна
                заинтересованность только в решении вопросов именно моего здоровья, а не опустошения кошелька. Т.е.
                никто,
                как это часто бывает в частных медицинских центрах, не говорил, что если вы срочно не пройдете все до
                одной наши супердорогостоящие процедуры, мы никогда не узнаем, что же с вами такое, и возможно даже ваши
                дни уже сочтены. Никакого драматизма. Это и понравилось…</p>
            </blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Алена, отзыв оставлен 24.08.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>О клинике «УЗИ+» я узнала два года назад, чему до сих пор очень рада. Мы с мужем давно мечтали о
              ребенке, но долгое время ничего не получалось, я не могла забеременеть. Одна из моих подруг, с кем я
              поделилась бедой, посоветовала обратиться в УЗИ+, сказала, что ей там помогли решить проблему. Я сходила к
              врачу… Не буду рассказывать все в подробностях, но доктор очень внимательно отнеслась к моей ситуации, мне
              сделали анализы, узи, назначили лечение. Конечно, чудо произошло не за один день, но это случилось! После
              долгих лет бесплодных попыток, я наконец, ношу ребенка! Когда пришла пора становиться на учет, я уже не
              колебалась, стала на учет по беременности в «УЗИ+» и нет проблем – мне говорят, когда прийти, что
              принести, все вовремя, без долгих ожиданий в очереди. Чувствуется, что доктор, который ведет беременность,
              волнуется за ее благополучное окончание и роды. И я верю, что все будет хорошо!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Елена, отзыв оставлен 12.06.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Все хорошо,, спасибо специалистам. Единственный и пожалуй, существенный минус - помещение, очень
              тесно и нет нелегального стола для младенцев очень неудобно раздевать деток. </blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Дарья, отзыв оставлен 13.04.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Центром очень довольна. Внимательное вежливое отношение.В отличие от абсолютного большинства
              медцентров не назначают ненужных анализов и обследований для выкачивания денег у пациентов. Была на приёме
              у маммолога Дудченко - в полном восторге. Опытнейший специалист. Спасибо.</blockquote>
          </div>
        </article>

        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Ольга, отзыв оставлен 15.03.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Спасибо большое врачам в этом центре. Уже года три как лечимся всей семьей. Замечательные
              детские доктора, Грибко Татьяна Викторовна - ну она вообще вне всяких похвал и конкуренции. Сейчас они
              расширили спектр детских услуг: принимает еще педиатр Крутикова Надежда - грамотный квалифицированный
              врач. Были и у детского гастроэнтеролога Жлобинской, по-моему, очень понравилось. Детские узисты как
              всегда на высоте - нет правда к их диагнозам прислушиваются многие, и более того скажу - были в московской
              клинике с результатами, сказали очень убедительно и подтвердили все что в УЗИ+ написали врачи. Сама
              наблюдаюсь у гинеколога Анощенковой - очень грамотная и вежливая доктор, да еще их онколог-хирург Дудченко
              вообще супер! Всем, у кого есть проблемы в этой области, советую!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Кристина, отзыв оставлен 23.01.2013</p>
          </div>
          <div class="review-item__right">
            <blockquote>Были на приеме у педиатра Крутиковой Н.Ю.. Специалиста такого уровня еще не встречали. Всем
              рекомендую!</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Иван, отзыв оставлен 19.11.2012</p>
          </div>
          <div class="review-item__right">
            <blockquote>Отличные квалифицированные врачи. Огромное спасибо за ваш труд...</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Алла, отзыв оставлен 23.09.2012</p>
          </div>
          <div class="review-item__right">
            <blockquote>Чистенько, вежливый персонал. Цены на прием специалистов и анализы весьма приемлимы.
            </blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Настя, отзыв оставлен 28.08.2012</p>
          </div>
          <div class="review-item__right">
            <blockquote>Все отлично. Была приятно удивлена. Рекомендую.</blockquote>
          </div>
        </article>
        <article class="review-item review-item--simple">
          <div class="review-item__left">
            <div class="review-item__photo">
              <img src="./img/reviews/1.jpg" alt="">
            </div>
            <p>Елена, отзыв оставлен 18.04.2012</p>
          </div>
          <div class="review-item__right">
            <blockquote>С врачами понятно: работают в "красном кресте" или в других больницах, а здесь подрабатывают. А
              вот отношение хорошее, внимательное, да и цены приемлемые.</blockquote>
          </div>
        </article>

      </div>

      <div class="center-button">
        <a href="https://yandex.ru/maps/-/CCUnAUW2wA" class="button button--icon" target="_blank">
          <svg width="23" height="22" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 22">
            <path fill="#000"
              d="M11.5 0a10.97 10.97 0 0 1 7.776 3.223 10.999 10.999 0 0 1-2.101 17.203 10.96 10.96 0 0 1-10.812.286H6.33c-.329-.132-.594-.363-.902-.517a1.571 1.571 0 0 0-1.077-.054 24.16 24.16 0 0 1-2.487.714c-.44.01-.572-.253-.572-.682a20.59 20.59 0 0 1 .771-2.563c.12-.363.088-.748-.099-1.09l-.22-.428a10.812 10.812 0 0 1-1.242-5.025v-.068a10.97 10.97 0 0 1 3.221-7.776A10.99 10.99 0 0 1 11.5 0Zm5.07 9.603a1.41 1.41 0 0 0-1.407 1.407c0 .77.637 1.408 1.407 1.408a1.41 1.41 0 0 0 1.408-1.408c0-.78-.627-1.407-1.408-1.407Zm-5.07 0c-.781 0-1.409.627-1.409 1.407 0 .77.628 1.408 1.409 1.408a1.41 1.41 0 0 0 1.407-1.408c0-.78-.626-1.407-1.407-1.407Zm-5.072 0c-.78 0-1.408.627-1.408 1.407 0 .77.627 1.408 1.408 1.408.77 0 1.41-.638 1.41-1.408 0-.78-.64-1.407-1.41-1.407Z" />
          </svg>
          <span>Оставить свой отзыв</span></a>
      </div>

    </div>
  </section>

  <?php 
      // Промо блок 2
      include "./components/promo-3.php";
      include "./components/ratings.php";
    ?>
<?php if($seo_title && $seo_text) :  ?>
  <section class="section">
    <div class="wrapper">
      <h2 class="title"><?php echo $seo_title; ?></h2>
      <?php echo $seo_text; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php include "./templates/_footer.php"; ?>