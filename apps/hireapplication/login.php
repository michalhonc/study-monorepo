<?php
    session_start();
?>
<!doctype html>
<html lang="cs">

  <head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Nejpopulárnější IT HR aplikace">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hirepplication</title>

    <!-- links -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">

  </head>

  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <!-- header -->
      <div class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">

          <!-- logo -->
          <span class="title mdl-layout-title">
            <a href="index.php"><img class="logo-image" src="images/logo.png" alt="logo"></a>
          </span>

          <!-- menu -->
          <div class="navigation-container">
            <nav class="navigation mdl-navigation">

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Domů</a>

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="offers.php">Nabídky</a>

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="contacts.php">Kontakt</a>

              <?php
                if($_SESSION['login']!=""){
                  echo'<a class="mdl-navigation__link mdl-typography--text-uppercase" href="add-offer.php">Přidat nabídku</a>'
                    . '<a class="mdl-navigation__link mdl-typography--text-uppercase" href="./php/logout.php">Odhlásit se</a>';
                } else {
                  echo'<a class="mdl-navigation__link mdl-typography--text-uppercase" href="login.php">Přihlásit se</a>';
                }
              ?>

            </nav>
          </div>

        </div>
      </div>

      <div class="content mdl-layout__content">

        <div class="be-together-section mdl-typography--text-center">

          <div class="be-together-section-background">

          </div>

          <div class="slogans">
            <div class="logo-font slogan">Je to jednoduché... </div>
            <div class="logo-font sub-slogan">Stačí se přihlásit a získat tak <span class="__sub_sloga-highlight">neomezený přístup</span> k novým pracovním příležitostem.</div>
          </div>

        </div>

        <!-- section -->
        <div id="more" class="more-section">

          <div class="login-section-title mdl-typography--display-1-color-contrast">Přihlášení</div>

          <div class="login-card-container mdl-grid">

            <div class="mdl-cell mdl-cell--6-col mdl-cell--10-col-phone mdl-card mdl-shadow--3dp">
 
              <div class="form">
                <form class="register-form" action="php/register.php"  method="post">
                  <input name="login" type="text" placeholder="Přihlašovací jméno"/>
                  <input name="password" type="password" placeholder="Heslo"/>
                  <button aria-label="Vytvorit">Vytvořit</button>
                  <p class="message">Už máte účet? <a href="#">Přihlásit se</a></p>
                </form>
                <form class="login-form" action="php/login.php" method="post">
                  <input name="login" type="text" placeholder="Přihlašovací jméno"/>
                  <input name="password" type="password" placeholder="Heslo"/>
                  <button aria-label="prihlasit">Přihlásit</button>
                  <p class="message">Nejste registrováni? <a href="#">Vytvořit účet</a></p>
                </form>
              </div>

            </div>

          </div>

        </div>

        <!-- footer -->
        <footer class="footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn sb1" aria-label="paticka social"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn sb2" aria-label="paticka social"></button>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Hirepplication team © 2018</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="link mdl-typography--font-light" href="conditions.php">Všeobecné podmínky</a>
          </div>

        </footer>

      </div>
    </div>
    
    <!-- js -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- login -->
    <script>
    $('.message a').click(function() {
      $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    </script>

  </body>

</html>
