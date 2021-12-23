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
        <div class="line-section line-section-offer">
          <div class="line">
            <div class="line-text">
              <p class="mdl-typography--headline mdl-typography--font-light">
                Možná se právě tato nabídka může stát vaší osudovou.
              </p>
            </div>
          </div>
        </div>

        <main class="main_offer mdl-grid">
            <div class="detail mdl-cell mdl-cell--8-col">
                <h2>Vývojář (Node.js, Angular 6)</h2>
                <p>„Hledáme vývojáře, které přitahuje práce na náročných systémech.“
                    
                Vyvíjíme a provozujeme webové aplikace pro správu reklamního prostoru na internetu. Naše škálovatelné aplikace pracují v režimu 24x7 a zpracovávají stovky milionů požadavků denně. Vývoj těchto aplikací stavíme na JavaScriptu / TypeScriptu, Node.js a Angularu 2. Pokud tyto technologie již znáš, nebo se s nimi chceš důkladně seznámit, určitě čti dál.</p>
                <h4>Jaké tvoje znalosti u nás oceníme?</h4>
                <ul>
                    <li>JavaScript, TypeScript</li> 
                    <li>Node.js a asynchronní programování</li> 
                    <li>Angular 6</li> 
                    <li>NoSQL databáze (MongoDB, Cassandra)</li> 
                    <li>Big Data technologie (Kafka, Druid, Samza)</li> 
                    <li>Clean code, TDD</li> 
                    <li>Event sourcing, CQRS, Microservices</li> 
                    <li>Vagrant, Docker</li> 
                    <li>Zkušenosti s vývojem škálovatelných aplikací</li> 
                    <li>Angličtina (samostatná aktivní komunikace)</li>
                </ul>
                <h4>Na co se u nás můžeš těsit?</h4>
                <ul>                   
                    <li>Jsme moderní firma s přátelským a neformálním pracovním prostředím</li>
                    <li>Věříme ve firemní kulturu důvěry namísto neustálé kontroly</li>
                    <li>Kromě dovolené budeš mít k dispozici dalších 10 dní placeného volna pro tvou osobní </li>potřebu
                    <li>Budeš mít pružnou pracovní dobu, v případě potřeby i homeoffice</li>
                    <li>Tví kolegové budou špičkoví specialisté, kteří urychlí i tvůj osobní rozvoj</li>
                    <li>Jako náš zaměstnanec budeš mít k dispozici jarní vilu v Portugalsku a podzimní vilu na </li>ize. <li>Můžeš tak pracovat pěkně v teple.</li>
                    <li>Naše programátory podporujeme v účasti na všech významných IT událostech jako například, </li><li>bExpo, konference Devel.cz, BarCampy v Ostravě a Brně, atd.</li>
                    <li>Máme ergonomická pracoviště s polohovatelnými stoly</li>
                    <li>Pořádáme firemní akce a výlety v ČR i do zahraničí</li>
                    <li>Vyplácíme bonusy na základě hospodářských výsledků firmy</li>
                    <li>Disponujeme stabilním zázemím; jsme součástí mezinárodní skupiny Ströer s obratem přes 3d. EUR</li>
                    <li>Máme i další zaměstnanecké a sociální výhody - firemní výuka jazyků, stravenky, příspěvek na penzijní připojištění</li>
                </ul>
                        <h4>Informace o pozici</h4>
                        <ul>
                            <li>Společnost</li>
                <li>Internet BillBoard a.s.</li>
                <li>Adresa</li>
                <li>Třebovická 5080/41, Ostrava – Třebovice</li>
                <li>Požadované vzdělání: Vzdělání není podstatné</li>
                <li>Požadované jazyky: Angličtina (Středně pokročilá)</li>
                <li>Benefity: Bonusy/prémie, Notebook, Příspěvek na penzijní/životní připojištění, Flexibilní začátek/konec pracovní doby, Stravenky/příspěvek na stravování, Firemní rekreační zařízení, Vzdělávací kurzy, školení, Občerstvení na pracovišti, Možnost občasné práce z domova, Firemní akce, Možnost si napracovat hodiny, Dovolená více než 5 týdnů, Možnost delšího neplaceného volna, Dog-friendly office, Účast na zahraničních konferencích, Vyhrazený čas na inovace
                    <li>Zařazeno: IS/IT: Vývoj aplikací a systémů, Programátor</li>
                    <li>Typ pracovního poměru</li>
                    <li>Typ pracovního poměru: Práce na plný úvazek</li>
                    <li>Délka pracovního poměru</li>
                    <li>Délka pracovního poměru: Na dobu neurčitou</li>
                    <li>Typ smluvního vztahu</li>
                    <li>Typ smluvního vztahu: pracovní smlouva, práce na živnostenský list/IČO</li>
                    <li>Zadavatel: Zaměstnavatel</li>
                </ul>
            </div>
            <div class="company mdl-cell mdl-cell--4-col">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                    </div>
                    <div class="mdl-card__supporting-text">
                            „Hledáme vývojáře, které přitahuje práce na náročných systémech.“
    
                            Vyvíjíme a provozujeme webové aplikace pro správu reklamního prostoru na internetu. Naše škálovatelné aplikace pracují v režimu 24x7 a zpracovávají stovky milionů požadavků denně. Vývoj těchto aplikací stavíme na JavaScriptu / TypeScriptu, Node.js a Angularu 2. Pokud tyto technologie již znáš, nebo se s nimi chceš důkladně seznámit, určitě čti dál.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="__contact-us mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        Napište nám
                        </a>
                    </div>
                    </div>
                </div>

        </main>
            <!-- footer -->
            <footer class="footer mdl-mega-footer">
                <div class="mdl-mega-footer--top-section">
                    <div class="mdl-mega-footer--left-section">
                        <button class="mdl-mega-footer--social-btn sb1"
                        aria-label="paticka social"></button>
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

    <div id="status">
      <span id="status-text">Nabídka práce byla úspěšně vytvořena.</span>
    </div>
    
    <!-- js -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- handles status div -->
    <script>
      $(function() {
        const urlParams = new URLSearchParams(window.location.search);

        if (urlParams.has('status') && urlParams.get('status') == 0) {
          $('#status').slideDown();
        }

        // wait 5 second then hide status bar
        setTimeout(
          function() {
            $('#status').slideUp();
          },
          5000
        );

      });
    </script>

  </body>

</html>
