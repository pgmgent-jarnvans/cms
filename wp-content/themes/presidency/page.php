<?php get_header(); ?>

<div class= "container">
    <h1>page:
    <?php if (is_home()) {
    echo 'Home';
}  ?>
    <?php the_title(); ?>
    </h1>
</div>

<?php get_footer(); ?>