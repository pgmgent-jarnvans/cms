<?php get_header() ?>

<div class="container">
  <h1>Dit is de frontpage</h1>
  <?php 
    while (have_posts()): the_post();
  ?>
      <a href="<?php the_permalink() ?>" class="card">
        <h2><?php the_title(); ?></h2>
        <?php 
        if (has_excerpt()) {
          the_excerpt();
        } else {
          echo wp_trim_words(get_the_content(), 5);
        }
        ?>
      </a>
  <?php
    endwhile;
  ?>
</div>

<?php get_footer() ?>