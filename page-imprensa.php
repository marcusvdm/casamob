<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=imprensa');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <span class="red">imprensa</span>
          <span class="white">&amp;</span>
          <span class="lt-purple">Mídia</span>
        </h2>
        <div class="intro">
          <?php the_content();?>
          <p class="email">
            <!--<i class="icone-email"></i>-->
            <a href="mailto://assessoria@casamob.com.br" class="mail-link">assessoria@casamob.com.br</a>
          </p>
        </div>
      </div>
      <div class="content content--limited slideshow">
        <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
      </div>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>


<?php get_footer(); ?>