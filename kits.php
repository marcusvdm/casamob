<?php
  $query = new WP_Query('pagename=kits');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step showcase linhas <?php echo $slug; ?> <?php echo $slug; ?>-dif" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <small class="white">Linha</small>
          <span class="lt-violet"><?php the_title();?></span>
        </h2>
        <div class="intro">
          <?php the_content();?>
          <?php require_once('destaques-kits.php') ?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modelos-kits">Modelos</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-kits">Ambientes</a>
        </nav>
        
        <figure class="img-slider"
            data-featherlight-gallery 
            data-featherlight-filter="a"
        >
        <?php 
          for ($i = 0; $i <= 1; $i++) {
        ?>
          <a href="<?php bloginfo('template_url');?>/assets/images/kits/lightbox-coz-kits-<?php echo $i; ?>.jpg" title="">
            <img data-lazy="<?php bloginfo('template_url');?>/assets/images/kits/slide-coz-kits-<?php echo $i; ?>.jpg" alt="" />
          </a>
        <?php } ?>
        </figure>
        
        <figure class="thumbs" >
        <?php 
          for ($i = 0; $i <= 1; $i++) {
        ?>
          <a class="thumb" data-slick-index="<?php echo $i; ?>" href="<?php bloginfo('template_url');?>/#<?php echo $i; ?>" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/kits/thumb-coz-kits-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </a>

        <?php } ?>
          
          <a class="thumb-mais" href="<?php echo home_url(); ?>/ambientes-kits" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/icons/icon-mais.svg" alt="<?php the_title();?>" />
          </a>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>