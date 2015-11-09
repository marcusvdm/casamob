<?php
  $query = new WP_Query('pagename=diferenciais');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
     $id = get_the_ID();
?>

<section class="step showcase <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2><span class="lt-acqua"><?php the_title();?></span></h2>
        <div class="intro"><?php the_content();?></div>
      </div>

      <div class="content">
        
        <figure class="img-slider"
            data-featherlight-gallery 
            data-featherlight-filter="a"
        >
        <?php 
          $query_args = array (
            'showposts' => -1,
            'post_parent' => $id,
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order'   => 'ASC'
          );
          query_posts($query_args);
          while (have_posts() ) { the_post();
          $childSlug = basename(get_permalink());
        ?>
          <a href="<?php bloginfo('template_url');?>/assets/images/diferenciais/lightbox-dif-<?php echo $childSlug; ?>.jpg" title="<?php the_title();?>">
            <img data-lazy="<?php bloginfo('template_url');?>/assets/images/diferenciais/slide-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
          </a>
        <?php } ?>
        </figure>
        
        <aside class="txt-slider">
        <?php 
          query_posts($query_args);
          while (have_posts() ) {
            the_post();
        ?>
          <div class="txt-content">
            <h3><?php the_title();?></h3>
            <?php the_content();?>
          </div>
        
        <?php } ?>
        </aside>
        
        
        <figure class="thumbs" >
        <?php 
          $i = 0;
          query_posts($query_args);
          while (have_posts() ) { the_post();
          $childSlug = basename(get_permalink());
        ?>
          <a class="thumb" data-slick-index="<?php echo $i; ?>" href="<?php bloginfo('template_url');?>/#<?php echo $childSlug; ?>" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/diferenciais/thumb-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
          </a>

        <?php $i++; } ?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>
