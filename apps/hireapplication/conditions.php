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
            <a href="indexd.php"><img class="logo-image" src="images/logo.png" alt="logo"></a>
          </span>

          <!-- menu -->
          <div class="navigation-container">
            <nav class="navigation mdl-navigation">

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="indexd.php">Domů</a>

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="offersd.php">Nabídky</a>

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
            <div class="logo-font slogan">Podmínky jsou jasné a stručné... </div>
            <div class="logo-font sub-slogan">Přečtěte si prosím <span class="__sub_sloga-highlight">všeobecné podmínky</span>, Váš Hirepplication team.</div>
          </div>

        </div>

        <!-- section -->
        <div id="more" class="more-section">
          <div>

            <h2>Popis činnosti</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi eveniet tempora illo doloremque laborum id accusamus quo sit nulla. Mollitia voluptatem animi esse tenetur. Fugit, minima? Eius aut consectetur commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, harum earum blanditiis voluptates aut rerum qui hic, sed ad officia nisi maiores perspiciatis minima dolor. Sed dolor nam eveniet! Tempora.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi eveniet tempora illo doloremque laborum id accusamus quo sit nulla. Mollitia voluptatem animi esse tenetur. Fugit, minima? Eius aut consectetur commodi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, animi ducimus reiciendis distinctio nisi dolores qui voluptates, minus accusantium iure voluptas adipisci harum beatae voluptatum molestiae aliquam laudantium in voluptate? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a, excepturi rerum ullam nemo, quisquam voluptatibus esse accusantium atque deserunt iure deleniti ad doloribus ipsum at dolor molestiae recusandae! Ab.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi eveniet tempora illo doloremque laborum id accusamus quo sit nulla. Mollitia voluptatem animi esse tenetur. Fugit, minima? Eius aut consectetur commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi molestiae at enim, accusantium aliquam, unde fugit praesentium, mollitia atque cupiditate amet earum! Nobis ullam aperiam accusamus quia odio explicabo hic!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi eveniet tempora illo doloremque laborum id accusamus quo sit nulla. Mollitia voluptatem animi esse tenetur. Fugit, minima? Eius aut consectetur commodi.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi eveniet tempora illo doloremque laborum id accusamus quo sit nulla. Mollitia voluptatem animi esse tenetur. Fugit, minima? Eius aut consectetur commodi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum maxime incidunt, velit asperiores molestias sed labore accusamus, eum sunt assumenda nesciunt illo omnis! Maiores, quos accusantium ad veritatis modi ratione?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi eveniet tempora illo doloremque laborum id accusamus quo sit nulla. Mollitia voluptatem animi esse tenetur. Fugit, minima? Eius aut consectetur commodi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, doloribus assumenda? Minus, nisi nostrum ratione ducimus, delectus nesciunt fugiat vitae officiis ex similique, rem accusamus. Quos dicta est dolorum non. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, facilis omnis aliquid expedita in numquam suscipit magnam error quia labore corporis accusamus, tempora cumque. Voluptates ipsam veniam aliquid aut officia!</p>
              
            <h2>Autoři příspěvků</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam atque voluptatum ipsam enim deleniti voluptatibus, aperiam vitae quos, quibusdam error iure itaque? Amet corrupti laudantium voluptate harum nam ullam fugiat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptatum nisi exercitationem ipsam illo maiores itaque ex amet totam dolor cum, eligendi iusto nemo quibusdam, officiis rem eum? Doloremque, error. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim impedit, ullam, quidem dignissimos mollitia doloribus libero eos natus officia quibusdam tempora rem quo ea inventore sapiente, recusandae illo voluptatibus beatae! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, voluptate blanditiis itaque natus consequuntur corrupti excepturi praesentium quia alias temporibus vitae voluptates, aut commodi distinctio nemo accusantium assumenda minima amet.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam atque voluptatum ipsam enim deleniti voluptatibus, aperiam vitae quos, quibusdam error iure itaque? Amet corrupti laudantium voluptate harum nam ullam fugiat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptatum nisi exercitationem ipsam illo maiores itaque ex amet totam dolor cum, eligendi iusto nemo quibusdam, officiis rem eum? Doloremque, error. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem neque voluptatum repudiandae aperiam tempora, blanditiis molestiae incidunt sunt modi qui quisquam aliquam quod sit tempore iure quia magni? Temporibus, commodi?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam atque voluptatum ipsam enim deleniti voluptatibus, aperiam vitae quos, quibusdam error iure itaque? Amet corrupti laudantium voluptate harum nam ullam fugiat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptatum nisi exercitationem ipsam illo maiores itaque ex amet totam dolor cum, eligendi iusto nemo quibusdam, officiis rem eum? Doloremque, error.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam atque voluptatum ipsam enim deleniti voluptatibus, aperiam vitae quos, quibusdam error iure itaque? Amet corrupti laudantium voluptate harum nam ullam fugiat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptatum nisi exercitationem ipsam illo maiores itaque ex amet totam dolor cum, eligendi iusto nemo quibusdam, officiis rem eum? Doloremque, error. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe alias facere architecto fuga. Consectetur, voluptatibus qui iure odit sapiente dicta obcaecati perspiciatis, saepe et provident non repellat modi, eaque esse. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sunt aliquam sapiente possimus laboriosam. Placeat cumque consectetur sed, sequi dolorem, illo facere reprehenderit nulla recusandae cum, error voluptatum iure commodi!</p>

            <h2>Registrovaní uživatelé a registrační podmínky</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate consectetur necessitatibus molestias harum nesciunt amet aliquid, ab id! Cumque laudantium modi eveniet doloremque ab molestias repudiandae earum, necessitatibus voluptatem odio. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum explicabo qui illum sit! Esse dolore voluptates fuga dignissimos necessitatibus, maxime ex recusandae doloremque, sit nihil iste, consequuntur tempora assumenda commodi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse incidunt aliquam doloribus, tenetur et cumque explicabo praesentium tempora voluptatibus aperiam possimus, libero distinctio unde necessitatibus animi nesciunt at! Rerum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse incidunt aliquam doloribus, tenetur et cumque explicabo praesentium tempora voluptatibus aperiam possimus, libero distinctio unde necessitatibus animi nesciunt at! Rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam error quo sunt, amet alias quaerat corporis eos aperiam. Quas cumque natus enim asperiores deserunt, est provident voluptates unde a incidunt?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse incidunt aliquam doloribus, tenetur et cumque explicabo praesentium tempora voluptatibus aperiam possimus, libero distinctio unde necessitatibus animi nesciunt at! Rerum.</p>
          
            <h2>Diskuzní fórum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus officiis a eos consequatur tempore atque quae similique, in sint quo laborum vel expedita quis, fuga doloribus! Consequatur molestiae quasi est!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus officiis a eos consequatur tempore atque quae similique, in sint quo laborum vel expedita quis, fuga doloribus! Consequatur molestiae quasi est! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio assumenda iusto exercitationem officia omnis! Exercitationem consequatur expedita sit, obcaecati similique iure eaque labore recusandae eos dignissimos est omnis dolor eligendi!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus officiis a eos consequatur tempore atque quae similique, in sint quo laborum vel expedita quis, fuga doloribus! Consequatur molestiae quasi est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti veritatis eos eligendi aliquid, quos officiis reprehenderit perspiciatis eveniet necessitatibus dolor tempora beatae quam velit placeat aliquam eum doloremque amet excepturi!</p>

          
            <h2>Autorská práva a odpovědnost</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, beatae. Deleniti quia aperiam maxime nostrum voluptatem officia! Porro, sit. Perferendis amet beatae alias enim? Natus voluptatibus repudiandae quis velit illo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, illo laborum eveniet quas in, obcaecati illum autem cumque dolor praesentium incidunt maxime harum consectetur dolorum a reiciendis perferendis aut architecto.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, beatae. Deleniti quia aperiam maxime nostrum voluptatem officia! Porro, sit. Perferendis amet beatae alias enim? Natus voluptatibus repudiandae quis velit illo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, illo laborum eveniet quas in, obcaecati illum autem cumque dolor praesentium incidunt maxime harum consectetur dolorum a reiciendis perferendis aut architecto. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis in provident iste aliquid. Illum quo, maxime repellat quas velit provident corrupti, quis odio deserunt voluptatum vel sequi, ipsa pariatur magnam!</p>
          
            <h2>Závěrečná ustanovení</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate recusandae, laudantium neque assumenda fuga quis, iusto laborum magni pariatur sit ex culpa nam ut doloribus, voluptates modi consequatur labore?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate recusandae, laudantium neque assumenda fuga quis, iusto laborum magni pariatur sit ex culpa nam ut doloribus, voluptates modi consequatur labore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, numquam placeat molestiae ipsa animi amet maiores at ipsum eos suscipit ipsam laudantium aliquam. Dolor, obcaecati enim! Tempore laborum eveniet mollitia.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate recusandae, laudantium neque assumenda fuga quis, iusto laborum magni pariatur sit ex culpa nam ut doloribus, voluptates modi consequatur labore? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est eum, voluptatibus voluptas labore sapiente voluptatum maxime aperiam ullam autem quas! Itaque, corrupti ipsam ab ratione sed quos amet nihil ea. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi accusantium consequuntur doloremque sequi ex at, aliquam numquam magni deleniti maxime ratione corrupti dolorem esse explicabo? Fugiat veniam libero assumenda possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, laudantium enim! Dolorem qui in neque reprehenderit repellendus suscipit architecto ut similique! Inventore officia aspernatur non aliquid, earum voluptatum impedit libero. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nam dolor distinctio consequatur optio facilis mollitia tempore aperiam explicabo natus magni iure in quibusdam enim dolorum, atque reprehenderit, officia fugit!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate recusandae, laudantium neque assumenda fuga quis, iusto laborum magni pariatur sit ex culpa nam ut doloribus, voluptates modi consequatur labore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptatibus iste obcaecati dolorem, rem eveniet tempore laborum voluptatum saepe fugiat neque nam, nemo molestiae, quibusdam minima voluptates illo deserunt. Quia.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate recusandae, laudantium neque assumenda fuga quis, iusto laborum magni pariatur sit ex culpa nam ut doloribus, voluptates modi consequatur labore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repudiandae vitae ipsum dolorum exercitationem dolorem sint odio pariatur cum magni eos necessitatibus voluptatibus itaque ipsam maiores, dignissimos veniam? Eveniet, fugit! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum dolorem vitae dolore laboriosam a voluptas temporibus distinctio minima consequuntur veritatis non doloremque suscipit, saepe earum, sunt unde ab asperiores soluta.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate recusandae, laudantium neque assumenda fuga quis, iusto laborum magni pariatur sit ex culpa nam ut doloribus, voluptates modi consequatur labore? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium ea dolorum reprehenderit excepturi cum architecto illum magnam, ab suscipit accusamus consequuntur explicabo ullam error. Voluptatibus minus molestiae necessitatibus itaque tempora.</p>


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
            <a class="link mdl-typography--font-light" href="conditionsd.php">Všeobecné podmínky</a>
          </div>

        </footer>

      </div>
    </div>
    
    <!-- js -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  </body>

</html>
