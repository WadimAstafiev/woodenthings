<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Магазин деревянных шедевров</title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="css/bootstrap-grid.css" />
  <link rel="stylesheet" href="css/hover.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/media.css" />
  <link type="image/x-icon" href="img/favicon.png" rel="shortcut icon" />
  <script src="js/script.js"></script>
</head>

<body>

  <?php include("header.php"); ?>

  <main>
    <section id="main" class="contacts">
      <div class="container">
        <div class="row align-items-center d-flex contacts__row">
          <h1 class="contacts__title common-title text-reset">
            Обратная связь
          </h1>
          <div class="col-lg-4 col-md-12">
            <div class="contacts-block form-left">
              <div class="cont-subblock">
                <h3 class="text-reset cont-text">Телефон:</h3>
                <a href="tel:8000000000">+8-000-000-000</a>
              </div>
              <div class="cont-subblock">
                <h3 class="text-reset cont-text">Электропочта:</h3>
                <a href="mailto:mail@mail.by">mail@mail.by</a>
              </div>
              <div class="cont-subblock">
                <h3 class="text-reset cont-text">Телеграм:</h3>
                <a href="https://t.me/mytelegram">@mytelegram</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <form action="action.php" method="post" class="contacts__form d-flex contacts-block">
              <div class="d-flex form-right">
                <div class="contacts__fields">
                  <input class="contacts__input" type="text" name="name" placeholder="Имя" required />
                  <input class="contacts__input" type="email" name="email" placeholder="Электропочта" required />
                  <input class="contacts__input" type="tel" name="phone" placeholder="Телефон" required />
                </div>
                <div class="contacts__fields">
                  <textarea class="contacts-textarea contacts__input" name="comment"
                    placeholder="Комментарий"></textarea>
                </div>
              </div>
              <div class="form-bottom">
                <div class="form-wrapper">
                  <button class="btn btn-reset contacts__btn hvr-radial-in">
                    Отправить
                  </button>
                  <label class="form-check">
                    <input type="checkbox" required />
                    Я согласен с условиями <a href="#">обработки данных</a>
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-fixed">
        <?php include("footer.php"); ?>
      </div>
    </section>
  </main>
</body>

</html>