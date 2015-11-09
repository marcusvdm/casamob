<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=contato');
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
        <h2><span class="lt-blue"><?php the_title();?></span></h2>
        <div class="intro"><?php the_content();?></div>
      </div>
      
      <div class="content content--limited form">
        <?php echo do_shortcode('[contact-form-7 id="186" title="Contato"]'); ?>
      </div>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>