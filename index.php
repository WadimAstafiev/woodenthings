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
    <section id="main" class="first">
      <div class="container">
        <div class="row align-items-center justify-content-center first__row">
          <div class="col-lg-6 col-md-6 first__left">
            <h1 class="first__title text-reset">
              Отличная ручная работа из&nbsp;натурального дерева
            </h1>
            <a href="catalog.html" class="btn-reset first__btn hvr-radial-in">
              Посмотреть весь каталог
            </a>
          </div>
          <div class="col-lg-6 col-md-6 first__picture">
            <picture>
              <source media="(max-width: 567px)" srcset="img/igruchi_320.png" />
              <source media="(max-width: 768px)" srcset="img/igruchi_567.png" />
              <img src="img/igruchi_996.png" alt="" aria-hidden="true" />
            </picture>
          </div>
        </div>
      </div>
    </section>

    <section class="sample" id="sample">
      <div class="container">
        <h2 class="sample__title common-title text-reset">Образцы</h2>
        <ul class="row sample__row list-reset sample__list">
          <li class="col-lg-4 col-sm-12 li-reset sample__li">
            <div class="sample__card sample__card-one">
              <div class="sample__descr">
                <span class="sample_selected">Избранное</span>
                <h3 class="sample__caption">Деревянная тарелка</h3>
              </div>
              <button href="#sample" id="sample-btn1" class="btn-reset hvr-radial-in sample__btn" onclick="sampleBtn()">
                Купить
              </button>
            </div>
          </li>
          <li class="col-lg-4 col-sm-12 li-reset sample__li">
            <div class="sample__card sample__card-two">
              <div class="sample__descr">
                <span class="sample_selected">Избранное</span>
                <h3 class="sample__caption">Старинная маска</h3>
              </div>
              <a href="#sample-btn2" id="sample-btn2" class="btn-reset hvr-radial-in sample__btn" onclick="sampleBtn()">
                Купить
              </a>
            </div>
          </li>
          <li class="col-lg-4 col-sm-12 li-reset sample__li">
            <div class="sample__card sample__card-three">
              <div class="sample__descr">
                <span class="sample_selected">Избранное</span>
                <h3 class="sample__caption">
                  Прикольные<br />номера<br />квартиры
                </h3>
              </div>
              <a href="#sample-btn3" id="sample-btn3" class="btn-reset hvr-radial-in sample__btn" onclick="sampleBtn()">
                Купить
              </a>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <?php include("footer.php"); ?>

</body>

</html>