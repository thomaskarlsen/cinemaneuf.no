<?php
/**
 * Template Name: Aktuelt
 */
?>


<?php wp_get_archives('type=postbypost&limit=1000'); ?>
<?php the_post_thumbnail('', array(
'class' => 'img-fluid'

)); ?>      
