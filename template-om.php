<?php
/**
 * Template Name: Om Filmklubben
 */
?>

<div class="row"><div class="col-md-3"><?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
</div>
<?php endwhile; ?>

<div class="col-md-7 offset-md-2">
  <?php get_template_part('templates/content', 'page'); ?>
	</div>
	</div>
	<div class="row space">
<div class="col-md-12 item-image">
	<img src="<?php the_field('om-bilde-2'); ?>" class="img-fluid">
	</div>
</div>
<div class="row">	
<div class="col-md-4">	
<h3 class="sub-seksjon">Formål</h3><?php the_field('om-1'); ?>
</div>
		<div class="col-md-7 offset-md-1">
			<h3 class="sub-seksjon">Våre dagskonsepter</h3>
			<?php the_field('om-2'); ?>
		<div class="row sub-seksjon"><div class="col-md-4">
		<h5>Supermandag</h5>
		<img src="http://www.geekchicelite.com/wp-content/uploads/2016/02/o-BILL-facebook.jpg" class="img-fluid om-img">
		<?php the_field('om-4-supermandag'); ?>
	</div>
	<div class="col-md-4">
		<h5>Tidsbilde</h5>
		<img src="http://www.geekchicelite.com/wp-content/uploads/2016/02/o-BILL-facebook.jpg" class="img-fluid om-img">
		<?php the_field('om-4-tidsbilde'); ?>
	</div>
	<div class="col-md-4">
		<h5>Filmrulltorsdag</h5>
		<img src="http://www.geekchicelite.com/wp-content/uploads/2016/02/o-BILL-facebook.jpg" class="img-fluid om-img">
		<?php the_field('om-4-filmrulltorsdag'); ?>
		</div></div>



	</div></div>

	<div class="row space">
	<div class="col-md-6">
		<img src="<?php the_field('om-bilde-3'); ?>" class="img-fluid">
		</div>	<div class="col-md-6">
		<img src="<?php the_field('om-bilde-3'); ?>" class="img-fluid">
		</div>
		</div>
		<div class="row">
		<div class="col-md-12"><h3 class="sub-seksjon">Billettsystem</h3></div>
		</div>
		
		<div class="row">
		<div class="col-md-4">
			<h5>Priser</h5>
			<?php the_field('om-priser'); ?>
		</div>
		<div class="col-md-4">
			<h5>Medlemskontingent</h5>
			<?php the_field('om-nfk'); ?>
		</div>
		<div class="col-md-4">
			<h5>Studentersamfundet</h5>
			<?php the_field('om-dns'); ?>
		</div>
		</div>
</div></div></div></div>
		<div class="container-fluid historietime">
		<div class="container">
		<div class="row"><div class="col-md-4 space"><h1>Historietime</h1></div></div>
		<div class="row">
		<div class="col-md-3 offset-md-3"><span class="sub">Ved Tomas Bjerke Holen</span></div>
      <div class="col-md-3 offset-md-2"><span class="sub">Foto: Bjørnar Berge</span></div></div>
		<div class="row item-image space">			<img src="<?php the_field('historietime-bilde'); ?>" class="img-fluid space"></div>
		<div class="row"><div class="col-md-6 offset-md-3">
		<?php the_field('historietime-p-1'); ?></div></div>
		<div class="row">
		<div class="col-md-6"><img src="<?php the_field('historietime-bilde-2'); ?>" class="img-fluid space"></div>
		<div class="col-md-6"><img src="<?php the_field('historietime-bilde-3'); ?>" class="img-fluid space"></div>
		</div>
		<div class="row"><div class="col-md-6 offset-md-3">
		<?php the_field('historietime-p2'); ?>
		<div class="space"><img src="<?php the_field('historietime-bilde-4'); ?>" class="img-fluid"></div></div></div>

</div>


	
