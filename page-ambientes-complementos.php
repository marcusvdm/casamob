<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=complementos');
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
          <a href="<?php echo home_url(); ?>#complementos">
            <!--<small class="white">Linha</small>-->
            <span class="lt-purple"><?php //the_title();?>Complementos<br>de linhas</span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
          
          <?php //require_once('destaques-complementos.php') ?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/diferenciais-complementos">Características</a>-->
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-complementos">Módulos</a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-complementos">Acessórios</a>-->
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/ambientes-complementos">Ambientes</a>
        </nav>
        
        <figure class="thumbs ambientes"
            data-featherlight-gallery 
            data-featherlight-filter="a">
        <?php 
          
          for ($i = 0; $i <= 10; $i++) { ?>
         
          <a class="thumb" href="<?php bloginfo('template_url');?>/assets/images/complementos/lightbox-coz-complementos-amb-<?php echo $i; ?>.jpg" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/complementos/thumb-coz-complementos-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </a>
        <?php }?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>