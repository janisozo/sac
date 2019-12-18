<?php get_header(); ?>
<div class="container">
  <main role="main">
    <!-- Navbar -->
    <nav class="navbar sticky-top">
      <?php wp_nav_menu() ?>
      <form class="menu-item-header-menu float-right">
        <input type="text" placeholder="Meklēt">
      </form>
    </nav>
    <!-- Jumbotron -->
    <div class="jumbotron">
      <img src="https://lh3.googleusercontent.com/3EMslx_AxBfLET24-py1yYurS1-8TLIRbN5necXXeHplOGv48dz8P1nN-q66FjMQXQB4UQC2XiVgygO7X911DE8pzZj8jyIfaSbIAmLUxGcbc73dojMK6LRPU35dJCZFDxCKstHt6uRt61KXrFnStMAojq0S2nxRiC6_5dmmzcsbOkY7SKY2PqUNVhjhALZxc41FRBuYpLrAD3rflMaEo36WatjFxATP-b96wlWpNqw6yHieJVKkn9SOAfEjeDX2lPbc0aW0ORVjsn7vsYRT7R5pExnCHfCMLWHqC5gsw9bEW6Zxkafqqv_Cm39zTXv-uOpr18Li28BpiZnsPCL79pFZUanHh4D9P-WJt6PwTCmlB3GGFmxV9md8mOgsJfCDqE9mJGYudcPOhCmNn__3DoQYLCl_QQ6DLM7rrudjudeSgk5htFOR0zHU8vm1C_vIVJPcGEsQ4XEldKexMYKu795nxGWGCzFelaou0LIdNwRLx0uUl6mwspJWg-eXFnhsNTsfnIj4d9Q4jtwdUTQ7v4LfX14ZLqj363uAeTZdMlRxmOEt2iqGI_mVc8lWOkKrkR84BGlxqq5DXJElXnjl9v0UL8OUKHqhOrxnBlaEmz1ZKKK_s2EWHKKNabXdONMXWOvbeAmLj_N-8CI433O1v9ROgRmMElkKviGB4BTTEUqyk62AuymWSU0=w635-h220-no" class="img-fluid w-100">
    </div>
    <div class="container bg-light">
      <div class="container">
        <div class="row">
          <?php
            $posts = get_posts();
            if(have_posts()) {
              while(have_posts()) {
                the_post(); ?>
                  <div class="card p-3 mt-3 mb-4">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_date(); ?><br><?php the_author(); ?></p>
                    <?php the_content(); ?>
                  </div>
              <?php
              }
            }
          ?>
          <!-- Section 2 -->
          <div id="section-2" class="card">
            <div class="card-body">  
              <h3 class="card-title">Par mums</h3>
              <p class="card-text">Sociālās aprūpes centrs „Ziedugravas” ir aprūpes iestāde, kas izveidota ar mērķi sniegt sociālās aprūpes un sociālās rehabilitācijas pakalpojumus.</p>
              <p class="card-text">Skaista, sakopta vide, draudzīga un mīļa attieksme ir mūsu ceļabiedrs, ik dienu apkalpojot 120 klientus – gan čaklus un darbīgus kungus un dāmas, gan  arī cilvēkus, kuriem slimība vai vecuma nespēks vairs neļauj būt tik aktīviem, cik gribētos.</p>
              <h5 class="card-subtitle mb-1">Kādēļ izvēlēties mūs?</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Atrodamies skaistā vietā ekoloģiski tīrā vidē kalna galā, meža ielokā, ārpus pilsētas burzmas. </li>
                <li class="list-group-item">Mūs var viegli atrast – nepilna puskilometra attālumā ir autošoseja Rīga – Daugavpils.</li>
                <li class="list-group-item">Ārējā un iekšējā vide pielāgota cilvēkiem ar īpašām vajadzībām.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
