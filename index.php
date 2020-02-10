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
    <div class="jumbotron main-jumbo">
      <div class="row">
        <div class="col">1 of 3</div>
        <div class="col">2 of 3</div>
        <div class="col">3 of 3</div>
      </div>
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
          <!-- Section 2 - Par mums -->
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
