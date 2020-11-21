<?php get_header() ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Blog</h1>
        <?php 
          while (have_posts()): the_post();
        ?>
            <div class="card">
              <h2><?php the_title(); ?></h2>
              <div><?php the_content(); ?></div>
            </div>
        <?php
          endwhile;
        ?>
      </div>
    </div>
  </div>
<?php get_footer() ?>
