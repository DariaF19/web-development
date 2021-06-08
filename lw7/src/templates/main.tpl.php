<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Jane Doe</title>
  </head>
  <body class="body">
    <header class="header">
      <nav class="navbar">
        <div class="navbar__header">Меню</div>
        <div class="navbar__item navbar__item_close">
          <a class="navbar__link about-me-icon" href="#about-me">
            Обо мне
          </a>
        </div>
        <div class="navbar__item navbar__item_close">
          <a class="navbar__link hobby-icon" href="#hobby">
            Мое хобби
          </a>
        </div>
        <div class="navbar__item navbar__item_close">
          <a class="navbar__link video-icon" href="#favorite-movies">
            Любимые фильмы
          </a>
        </div>
        <div class="navbar__item navbar__item_close">
          <a class="navbar__link" href="feedbacks.php">
            Обратная связь
          </a>
        </div>
      </nav>
    </header>
    <main class="main">
      <section class="top-container" id="about-me">
        <div class="grid">
          <div class="grid__cell-avatar">
            <img class="grid__avatar-img" src="images/woman.jpg" alt="Женщина" />
          </div>
          <div class="grid__cell-quote">
            <p class="grid__quote-text">
              Мы берем на себя много, потому что
              мало чего боимся
            </p>
            <p class="grid__quote-text_author">
              &#8212; Том Демарко. Deadline
            </p>
          </div>
          <div class="grid__cell-title">
            <h1 class="grid__title_h1">Jane Doe</h1>
          </div>
          <div class="grid__cell-lists">
            <h3 class="grid__title-list">Любимые писатели:</h3>
            <ul class="grid__list_marked">
              <li class="grid__list-item grid__list-item_marked">Айзек Азимов</li>
              <li class="grid__list-item grid__list-item_marked">Говард Лавкрафт</li>
              <li class="grid__list-item grid__list-item_marked">Дмитрий Глуховский</li>
              <li class="grid__list-item grid__list-item_marked">Чак Паланик</li>
            </ul>
            <h3 class="grid__title-list">Любимые фильмы:</h3>
            <ol class="grid__list_numbered">
              <li class="grid__list-item">Шоу Трумэна</li>
              <li class="grid__list-item">Малхолланд Драйв</li>
              <li class="grid__list-item">Семь жизней</li>
              <li class="grid__list-item">Гравитация</li>
            </ol>
          </div>
          <div class="grid__cell-article">
            <p class="grid__article_text">
              В 1930-е годы прошлого века физик Джордж Гамоу из
              университета штата Колорадо начал публиковать
              мини-сериал рассказов о неком мистере Томпкинсе,
              банковском клерке средних лет. Мистер Томпкинс, как
              явствовало из этих историй, интересовался современной
              наукой.
            </p>
            <h2 class="grid__title_h2 title-medium" id="hobby">Мое хобби</h2>
            <p class="grid__article_text">
              Он регулярно посещал вечерние лекции местного профессора
              и, разумеется, всегда засыпал на самом интересном месте.
              А когда просыпался, то обнаруживал себя в каком-нибудь
              параллельном мире, где один из основных законов физики
              действовал не так, как в его мире.
            </p>
          </div>
          <div class="grid__cell-link">
            <a href="#write-me" class="grid__link">
              <span class="grid__link-text">
                <span class="grid__link-text grid__link-text_underline">Напиши мне</span> &rarr;
              </span>
            </a>
          </div>
        </div>
      </section>
      <section class="middle-container" id="favorite-movies">
        <h2 class="title-cards title-medium">Любимые фильмы</h2>
        <div class="cards">
          <div class="card">
            <img class="card__image" src="images/shawshank_redemption.jpg" alt="Кадр из фильма Побег из Шоушенка">
            <h4 class="card__title">Побег из Шоушенка</h4>
            <p class="card__text">
              Успешный банкир Энди Дюфрейн обвинен в убийстве собственной жены и ее любовника.
              Оказавшись в тюрьме под названием Шоушенк, он сталкивается с жестокостью и беззаконием,
              царящими по обе стороны решетки. Каждый, кто попадает в эти стены, становится их рабом до конца жизни.
              Но Энди, вооруженный живым умом и доброй душой, отказывается мириться с приговором судьбы и начинает
              разрабатывать невероятно дерзкий план своего освобождения.
            </p>
          </div>
          <div class="card">
            <img class="card__image" src="images/anesthesia.jpg" alt="Кадр из фильма Наркоз">
            <h4 class="card__title">Наркоз</h4>
            <p class="card__text">
              Клай Бересфорд вынужден лечь под нож. Однако в процессе операции на сердце он неожиданно приходит в себя.
              Находясь в парализованном состоянии, будучи не в силах пошевелить ни рукой, ни ногой, он, тем не менее,
              чувствует каждое касание скальпеля к своей плоти…
            </p>
          </div>
          <div class="card">
            <img class="card__image" src="images/astral.jpg" alt="Кадр из фильма Астрал">
            <h4 class="card__title">Астрал</h4>
            <p class="card__text">
              Джош и Рене переезжают со своими детьми в новый дом, но не успевают толком распаковать вещи, как начинаются странные
              события. Необъяснимо перемещаются предметы, в детской звучат странные звуки… Но в настоящий ужас приходят родители,
              когда их десятилетний сын Далтон впадает в кому. Все усилия врачей в больнице помочь мальчику безуспешны.
            </p>
          </div>
          <div class="card">
            <img class="card__image" src="images/gravity.jpg" alt="Кадр из фильма Гравитация">
            <h4 class="card__title">Гравитация</h4>
            <p class="card__text">
              Доктор Райан Стоун, блестящий специалист в области медицинского инжиниринга, отправляется в свою первую
              космическую миссию под командованием ветерана астронавтики Мэтта Ковальски, для которого этот полет — последний
              перед отставкой. Но во время, казалось бы, рутинной работы за бортом случается катастрофа. Шаттл уничтожен,
              а Стоун и Ковальски остаются совершенно одни; они находятся в связке друг с другом, и все, что они могут, — 
              это двигаться по орбите в абсолютно черном пространстве без всякой связи с Землей и какой-либо надежды на спасение.
            </p>
          </div>
        </div>
        <button class="button cards-button ">Все фильмы</button>
      </section>
      <section class="bottom-container">
        <div class="form-title" id="write-me">
          <hr class="form-title__line" />
          <h2 class="form-title__text">Напиши мне</h2>
          <hr class="form-title__line" />
        </div>
        <form class="form" method="post" action="index.php#write-me">
          <? if(isset($args['save_status'])): ?>
            <div class="form__info-box">
              <?= $args['save_status']; ?>
            </div>
          <? endif; ?>
          <label class="form__label form__label_required">Ваше имя</label>
          <input class="form__input" type="text" name="name" value="<?= $args['name'] ?? ''; ?>" />
          <? if(isset($args['name_error_msg'])): ?>
            <p class="form__text_error"><?= $args['name_error_msg']; ?></p>
          <? endif; ?>

          <label class="form__label form__label_required">Ваш email</label>
          <input class="form__input" type="email" name="email" value="<?= $args['email'] ?? ''; ?>" />
          <? if(isset($args['email_error_msg'])): ?>
            <p class="form__text_error"><?= $args['email_error_msg']; ?></p>
          <? endif; ?>

          <label class="form__label">Откуда вы?</label>
          <select class="form__select" name="country">
            <option class="form__select-option" value="Россия" 
            <?= isset($args['country']) && $args['country'] === 'Россия' ? 'selected' : ''; ?>>
              Россия
            </option>
            <option class="form__select-option" value="Украина"
            <?= isset($args['country']) && $args['country'] === 'Украина' ? 'selected' : ''; ?>>
              Украина
            </option>
            <option class="form__select-option" value="Беларусь"
            <?= isset($args['country']) && $args['country'] === 'Беларусь' ? 'selected' : ''; ?>>
              Беларусь
            </option>
          </select>

          <label class="form__label form__radio-label">Ваш пол</label>
          <div class="form__radio-box">
            <input type="radio" name="gender" id="male" value="male" checked />
            <label class="form__radio-box_label" for="male">Мужской</label>
            <input type="radio" name="gender" id="female" value="female"
              <?= isset($args['gender']) && $args['gender'] === 'female' ? 'checked' : ''; ?> />
            <label class="form__radio-box_label" for="female">Женский</label>
          </div>

          <label class="form__label form__label_required">Ваше сообщение</label>
          <textarea class="form__textarea" name="message"><?= $args['message'] ?? ''; ?></textarea>
          <? if(isset($args['message_error_msg'])): ?>
            <p class="form__text_error"><?= $args['message_error_msg']; ?></p>
          <? endif; ?>
          <div class="form__button-box" >
            <button class="button" type="submit">Отправить</button>
          </div>
        </form>
      </section>
    </main>
    <footer class="footer">
      <p class="footer__text">&copy; 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»</p>
    </footer>
  </body>
</html>