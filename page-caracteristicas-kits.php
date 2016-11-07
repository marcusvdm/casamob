<?php get_header(); ?>

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
          <a href="<?php echo home_url(); ?>#kits">
            <small class="white">Linha</small>
            <span class="lt-violet"><?php the_title();?></span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/caracteristicas-kits"><?php _e("<!--:en-->CHARACTERISTICS<!--:--><!--:pb-->CARACTERÍSTICAS<!--:--><!--:es-->CARACTERÍSTICAS<!--:--><!--:fr-->CARACTÉRISTIQUES<!--:-->" ); ?></a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modelos-kits"><?php _e("<!--:en-->MODULES<!--:--><!--:pb-->Módulos<!--:--><!--:es-->MÓDULOS<!--:--><!--:fr-->MODULES<!--:-->" ); ?></a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-kits"><?php _e("<!--:en-->ENVIRONMENTS<!--:--><!--:pb-->Ambientes<!--:--><!--:es-->AMBIENTES<!--:--><!--:fr-->AMBIANCES<!--:-->" ); ?></a>
        </nav>
        
        <figure class="img-slider"
            data-featherlight-gallery 
            data-featherlight-filter="a"
        >
        <?php 
          $query_args = array (
            'showposts' => -1,
            'post_parent' => get_id_by_slug('caracteristicas-kits'),
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order'   => 'ASC'
          );
          query_posts($query_args);
          while (have_posts() ) { the_post();
          $childSlug = basename(get_permalink());
        ?>
          <a href="<?php bloginfo('template_url');?>/assets/images/kits/diferenciais/lightbox-dif-<?php echo $childSlug; ?>.jpg" title="<?php the_title();?>">
            <img data-lazy="<?php bloginfo('template_url');?>/assets/images/kits/diferenciais/slide-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
          </a>
        <?php } ?>
        </figure>
        
        <aside class="txt-slider">
        <?php 
          //query_posts($query_args);
          //while (have_posts() ) {
           // the_post();
        ?>
          <div class="txt-content">
            <h3><?php //the_title();?>CARACTERÍSTICAS</h3>
            <?php //the_content();?>
            <ul>
              <li class="caract-li">Dobradiças 35 slow motion</li>
              <li class="caract-li">Puxadores e pés em alumínio</li>
            </ul>
          </div>
        
        <?php //} ?>
        </aside>
        
        <figure class="thumbs" >
        <?php 
          $i = 0;
          query_posts($query_args);
          while (have_posts() ) { the_post();
          $childSlug = basename(get_permalink());
        ?>
          <a class="thumb" data-slick-index="<?php echo $i; ?>" href="<?php bloginfo('template_url');?>/#<?php echo $childSlug; ?>" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/kits/diferenciais/thumb-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
          </a>

        <?php $i++; } ?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>