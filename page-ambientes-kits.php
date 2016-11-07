<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=kits');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step showcase linhas <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <a href="<?php echo home_url(); ?>#kits">
            <small class="white">
               <?php _e(
          "<!--:en-->Line<!--:--> 
          
          <!--:pb-->Linha<!--:-->
          
          <!--:es-->Línea<!--:-->
          
          <!--:fr-->Ligne<!--:-->" ); ?>
            </small>
            <span class="lt-violet"><?php the_title();?></span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/caracteristicas-kits"><?php _e("<!--:en-->CHARACTERISTICS<!--:--><!--:pb-->CARACTERÍSTICAS<!--:--><!--:es-->CARACTERÍSTICAS<!--:--><!--:fr-->CARACTÉRISTIQUES<!--:-->" ); ?></a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-kits"><?php _e("<!--:en-->MODULES<!--:--><!--:pb-->Módulos<!--:--><!--:es-->MÓDULOS<!--:--><!--:fr-->MODULES<!--:-->" ); ?></a>
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/ambientes-kits"><?php _e("<!--:en-->ENVIRONMENTS<!--:--><!--:pb-->Ambientes<!--:--><!--:es-->AMBIENTES<!--:--><!--:fr-->AMBIANCES<!--:-->" ); ?></a>
        </nav>
        
        <figure class="thumbs ambientes"
            data-featherlight-gallery 
            data-featherlight-filter="a">
        <?php 
          $exceptions = array();
          $remove = array(2,3,4,5,6,7,10,11,12,13,16,17);
          
          for ($i = 0; $i <= 19; $i++) { 
            
          if (!in_array($i, $remove)) {
            if (!in_array($i, $exceptions)) {
        ?>
          <a class="thumb" href="<?php bloginfo('template_url');?>/assets/images/kits/lightbox-coz-kits-amb-<?php echo $i; ?>.jpg" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/kits/thumb-coz-kits-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </a>
        <?php } else { ?>
          <span class="thumb thumb-capa">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/kits/thumb-coz-kits-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </span>
        <?php } } } ?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>