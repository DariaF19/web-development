<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../web/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Обратная связь</title>
  </head>
  <body>
    <header class="header">
      <nav class="navbar-feedback">
        <div class="navbar__header">Меню</div>
        <div class="navbar__item navbar__item_close">
          <a class="navbar__link" href="index.php">
            Главная
          </a>
        </div>
      </nav>
    </header>
    <main class="main-feedback">
    <section class="bottom-container">
      <form class="form" method="post">
        <label class="form__label form__label_required">Email пользователя</label>
        <input class="form__input" type="email" name="email" value="<?= $args['email'] ?? ''; ?>" />
        <? if(isset($args['email_error_msg'])): ?>
          <p class="form__text_error"><?= $args['email_error_msg']; ?></p>
        <? endif; ?>
        <div class="form__button-box" >
          <button class="button" type="submit">Отправить</button>
        </div>
      </form>
      <? if(isset($args['name'])):?>
        <div class="feedback-list">
          <p class="feedback-list__item"><b>Имя:</b> <?= $args['name'] ?? ''; ?> </p>
          <p class="feedback-list__item"><b>E-mail:</b> <?= $args['email'] ?? ''; ?> </p>
          <p class="feedback-list__item"><b>Страна:</b> <?= $args['country'] ?? ''; ?> </p>
          <p class="feedback-list__item"><b>Пол:</b> <?= $args['gender'] === 'male' ? 'Мужской' : 'Женский'; ?> </p>
          <p class="feedback-list__item"><b>Сообщение:</b> <?= $args['message'] ?? ''; ?> </p>
        </div>
      <? endif; ?>
      </section>
    </main>
  </body>
</html>