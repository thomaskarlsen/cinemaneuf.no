    <?php get_template_part('templates/content', 'frontpage'); ?>
    <div class="container">
    <h2 class="seksjon">Aktuelt</h2>
<div class="row">
<?php while (have_posts()) : the_post(); ?>
  <div class="col-md-4">
  <article <?php post_class(); ?>>
    <header>
    <span class="entry-date"> <?php echo get_the_date(); ?></span>
      <h1 class="entry-title"><a class="giffy" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="giffy-img"><img src="https://media.giphy.com/media/AuWpSLlXqywaA/giphy.gif"></div>
<?php the_post_thumbnail('', array(
'class' => 'img-fluid'

)); ?>      
    </header>

    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
  </article>
  </div>
<?php endwhile; ?>
</div></div>
<div class="container-fluid footer">
<div class="container">
<div class="row">
  <div class="col-md-4">
  <h5>Bli med i vår forening!</h5>
  <p>Å være med i en studentforening er noe av det smarteste du kan gjøre i løpet av studietiden din. Vi i Cinema Neuf har et trivelig og aktivt miljø, hvor du kan lære om kinodrift, samtidig som du kan ta del i et flott fellesskap.</p>
  <p>Les mer her!</p></div>
   <div class="col-md-4">
    <h5>Praktisk info</h5>
    <p>Vi viser filmer nesten hver mandag, tirsdag og torsdag, klokken 19.</p><p> Våre visninger har 18 års aldersgrense, men er ellers åpent for alle – om du er student eller ei!</p></div>
    <div class="col-md-2 offset-md-2">
    <h5>Kontakt</h5>
    Styret@cinemaneuf.no
    <p></p>
    <h5>Adresse</h5>
    Chateau Neuf, Slemdalsveien 15, 0369 Oslo
    </div>
    </div>
</div></div>