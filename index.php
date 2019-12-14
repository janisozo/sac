<?php get_header(); ?>
<div class="container">
  <main role="main">

    <section class="jumbotron text-center">
      <?php wp_nav_menu() ?>
      <nav class= "navbar rounded-custom">
        <!-- <div class="collapse navbar-collapse"> -->
          <ul class="navbar-nav mx-auto">
            <li class="nav-item btn btn-secondary">
              <a class="nav-link" href="#">Sākumlapa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item btn btn-secondary btn btn-primary">
              <a class="nav-link" href="#">Par Mums</a>
            </li>
            <li class="nav-item btn btn-secondary">
              <a class="nav-link" href="#">Centra Pakalpojumi</a>
            </li>
            <li class="nav-item btn btn-secondary dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown05">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        <!-- </div> -->
      </nav>
      <img src="wp-content/themes/janis-test/house-cut.jpg" alt="house" class="img-fluid">
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
        <?php
        if(have_posts()) {
          while(have_posts()) : the_post();
          ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <!-- CUSTOM STUFF -->
              <div class="janis-post">
                <h2 class="janis-post-title"><? the_title(); ?></h2>
                <p class="janis-post-meta"><? the_date(); ?> by <? the_author(); ?></p>
                <?php the_content(); ?>
              </div>
              <!-- CUSTOM STUFF ENDS -->
            </div>
          </div>
        <?php
        endwhile;
        }
        ?>
        </div>
        <!-- CUSTOM NAV -->
        <!-- <nav>
          <ul class="pager">
            <li><? next_posts_link('Previous') ?></li>
            <li><? previous_posts_link('Next') ?></li>
          </ul>
        </nav> -->
        <!-- CUSTOM NAV ENDS -->
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>