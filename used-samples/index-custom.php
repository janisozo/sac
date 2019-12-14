<?php get_header(); ?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
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
<?php get_footer(); ?>