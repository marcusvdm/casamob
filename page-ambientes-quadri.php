<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=quadri');
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
          <a href="<?php echo home_url(); ?>#quadri">
            <small class="white">Linha</small>
            <span class="lt-purple"><?php the_title();?></span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
          
          <?php require_once('destaques-quadri.php') ?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/diferenciais-quadri">Características</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-quadri">Módulos</a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-quadri">Acessórios</a>-->
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/ambientes-quadri">Ambientes</a>
        </nav>
        
        <figure class="thumbs ambientes"
            data-featherlight-gallery 
            data-featherlight-filter="a">
        <?php 
          //$exceptions = array(0, 4, 8);
          //$remove = array(10,19,20);
          
          for ($i = 0; $i <= 5; $i++) {
            
          if (!in_array($i, $remove)) {  
            if (!in_array($i, $exceptions)) {
        ?>
          <a class="thumb" href="<?php bloginfo('template_url');?>/assets/images/quadri/lightbox-coz-quadri-amb-<?php echo $i; ?>.jpg" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/quadri/thumb-coz-quadri-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </a>
        <?php } else { ?>
          <span class="thumb thumb-capa">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/quadri/thumb-coz-quadri-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </span>
        <?php } } }?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>