<?php get_header(); ?>
<div class="container">
  <main role="main">
    <!-- Navbar -->
    <nav class="navbar sticky-top">
      <?php wp_nav_menu() ?>
      <form class="menu-item-janis-custom-menu float-right">
        <input type="text" placeholder="Meklēt">
      </form>
    </nav>
    <!-- Jumbotron -->
    <div class="jumbotron">
      <img src="wp-content/themes/janis-test/house-cut.jpg" class="img-fluid">
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
        </div>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>