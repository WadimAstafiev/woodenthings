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
    <section class="catalog d-flex">
      <div class="container">
        <ul class="row list-reset catalog__row d-flex align-content-center">
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/krug.png" alt="Тарелка" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">
                    Деревянная тарелка
                  </h3>
                  <span class="text-reset">1000 &#8381;</span>
                </div>
                <button id="catalogBtn1" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/mask.png" alt="Маска" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">Старинная маска</h3>
                  <span class="text-reset">1500 &#8381;</span>
                </div>
                <button id="catalogBtn2" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/igruchi.png" alt="Ёлочные игрушки" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">Ёлочные игрушки</h3>
                  <span class="text-reset">700 &#8381; / шт.</span>
                </div>
                <button id="catalogBtn3" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/grape.png" alt="Украшение" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">
                    Растительный орнамент №1
                  </h3>
                  <span class="text-reset">900 &#8381;</span>
                </div>
                <button id="catalogBtn4" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/decorate01.png" alt="Растительный орнамент" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">
                    Растительный орнамент №2
                  </h3>
                  <span class="text-reset">800 &#8381;</span>
                </div>
                <button id="catalogBtn5" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/cifrykotiki_1.png" alt="Цифры-звери" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">
                    Цифры в&nbsp;виде зверей
                  </h3>
                  <span class="text-reset catalog__price">1100 &#8381;</span>
                </div>
                <button id="catalogBtn6" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/doska.png" alt="Разделочная доска" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">Разделочная доска</h3>
                  <span class="text-reset catalog__price">1100 &#8381;</span>
                </div>
                <button id="catalogBtn7" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
          <li class="li-reset col-lg-3 col-md-6 col-sm-12 catalog__li">
            <div class="catalog__card d-flex align-items-center">
              <a class="d-flex align-items-center catalog__link">
                <img src="img/serdeczki.png" alt="Кулоны" class="catalog__img" />
              </a>
              <div class="catalog__descr d-flex align-items-center">
                <div class="catalog__product">
                  <h3 class="catalog__title text-reset">Кулоны</h3>
                  <span class="text-reset catalog__price">600 &#8381;</span>
                </div>
                <button id="catalogBtn8" href="catalog.php" class="btn-reset catalog__btn hvr-radial-in"
                  onclick="catalogBtn()">
                  В корзину
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <?php include("footer.php"); ?>

</body>

</html>