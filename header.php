<header class="header">
  <div class="container">
    <div class="row header__row">
      <div class="col-lg-3 col-sm-5 d-flex justify-content-start header__logo">
        <a href="index.php" class="logo">
          <img src="img/Svitie.png" alt="Логотип Svitie" width="140" height="48" />
        </a>
      </div>
      <div class="col-lg-9 col-sm-3 d-flex justify-content-end">
        <nav class="header__nav" aria-label="Главное меню">
          <ul class="list-reset header__menu">
            <li class="header__item">
              <a href="index.php" class="header__link">Главная</a>
            </li>
            <li class="header__item">
              <a href="about.php" class="header__link">О&nbsp;нас</a>
            </li>
            <li class="header__item">
              <a href="catalog.php" class="header__link">Каталог</a>
            </li>
            <li class="header__item">
              <a href="contacts.php" class="header__link">Контакты</a>
            </li>
            <li class="header__item bag">
              <span id="bag-id" class="bought-items">0</span>
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                <defs>
                  <style>
                    .cls-1 {
                      fill: none;
                    }
                  </style>
                </defs>
                <title />
                <g data-name="Layer 2" id="Layer_2" fill="grey" stroke-width="0.5px">
                  <path
                    d="M23.52,29h-15a5.48,5.48,0,0,1-5.31-6.83L6.25,9.76a1,1,0,0,1,1-.76H24a1,1,0,0,1,1,.7l3.78,12.16a5.49,5.49,0,0,1-.83,4.91A5.41,5.41,0,0,1,23.52,29ZM8,11,5.11,22.65A3.5,3.5,0,0,0,8.48,27h15a3.44,3.44,0,0,0,2.79-1.42,3.5,3.5,0,0,0,.53-3.13L23.28,11Z" />
                  <path d="M20,17a1,1,0,0,1-1-1V8a3,3,0,0,0-6,0v8a1,1,0,0,1-2,0V8A5,5,0,0,1,21,8v8A1,1,0,0,1,20,17Z" />
                </g>
                <g id="frame">
                  <rect class="cls-1" height="32" width="32" />
                </g>
              </svg>
            </li>
          </ul>
        </nav>
        <div class="header__burger" onclick="burgerMenu()">
          <span class="burger-span"></span>
        </div>
      </div>
    </div>
  </div>
</header>