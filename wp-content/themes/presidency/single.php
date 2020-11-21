<?php get_header() ?>

<div class="hero">
  <img src="https://www.nporadio1.nl/images/2020/11/18_50a613ce4e_ANP-424936610.jpg" alt="">
</div>

<div class="container">
  <a class="back" href="<?= get_home_url() ?>">Ga terug</a>
  <h1><?php the_title() ?></h1>
  <div><?php the_content() ?></div>
</div>

<?php get_footer() ?>