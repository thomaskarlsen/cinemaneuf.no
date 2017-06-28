<?php
/**
 * Template Name: Arrangement Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page-film'); ?>
<?php endwhile; ?>
