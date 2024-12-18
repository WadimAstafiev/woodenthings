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
    <section class="story">
      <div class="container">
        <div class="row align-items-center story__row">
          <div class="col-lg-4 col-md-5">
            <picture>
              <source media="(max-width: 767px)" srcset="img/vitek_576.png" />
              <source media="(max-width: 992px)" srcset="img/vitek_768.png" />
              <img src="img/vitek.png" class="about__pics" alt="" aria-hidden="true" />
            </picture>
          </div>
          <div class="col-lg-8 col-md-7 col-sm-12 story__right">
            <h1 class="story__title text-reset">Наши мастера</h1>
            <p class="text-reset about__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Similique mollitia fugit at sapiente nulla nam magni minima vel
              dolores enim explicabo, dolor officiis voluptates fugiat dolorem
              ratione obcaecati placeat libero! Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Beatae natus omnis assumenda at ab
              ratione odit et rerum eveniet reprehenderit? Facere officia nemo
              quis quae provident quas alias assumenda deserunt.
            </p>
          </div>
        </div>
        <div class="row align-items-center story__row">
          <div class="col-lg-8 col-md-7 col-sm-12 story__right">
            <h1 class="story__title text-reset">Наша работа</h1>
            <p class="text-reset about__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Similique mollitia fugit at sapiente nulla nam magni minima vel
              dolores enim explicabo, dolor officiis voluptates fugiat dolorem
              ratione obcaecati placeat libero! Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Beatae natus omnis assumenda at ab
              ratione odit et rerum eveniet reprehenderit? Facere officia nemo
              quis quae provident quas alias assumenda deserunt.
            </p>
          </div>
          <div class="col-lg-4 col-md-5">
            <picture>
              <source media="(max-width: 767px)" srcset="img/sveta_576.png" />
              <source media="(max-width: 992px)" srcset="img/sveta_768.png" />
              <img src="img/sveta.png" class="about__pics" alt="" aria-hidden="true" />
            </picture>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include("footer.php"); ?>

</body>

</html>