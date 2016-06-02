<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=unica');
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
          <a href="<?php echo home_url(); ?>#unica">
            <small class="white">Linha</small>
            <span class="purple"><?php the_title();?></span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
          
          <?php require_once('destaques-unica.php') ?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/caracteristicas-unica">Características</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-unica">Módulos</a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-unica">Acessórios</a>-->
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/ambientes-unica">Ambientes</a>
        </nav>
        
        <figure class="thumbs ambientes"
            data-featherlight-gallery 
            data-featherlight-filter="a">
        <?php 
          $exceptions = array(0, 3, 5);
          $remove = array(7,8);
          
          for ($i = 0; $i <= 8; $i++) {
            
          if (!in_array($i, $remove)) {  
            if (!in_array($i, $exceptions)) {
        ?>
          <a class="thumb" href="<?php bloginfo('template_url');?>/assets/images/unica/lightbox-coz-unica-amb-<?php echo $i; ?>.jpg" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/unica/thumb-coz-unica-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </a>
        <?php } else { ?>
          <span class="thumb thumb-capa">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/unica/thumb-coz-unica-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </span>
        <?php } } }?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>