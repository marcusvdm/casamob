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
          <!--<small class="white">Linha</small>-->
          <span class="lt-purple"><?php //the_title();?>
          <?php _e(
          "<!--:en-->LINE<br>COMPLEMENTS<!--:--> 
          
          <!--:pb-->COMPLEMENTOS<br>DE LINHAS<!--:-->
          
          <!--:es-->COMPLEMENTOS<br>DE LÍNEAS<!--:-->
          
          <!--:fr-->COMPLÉMENTS<br>DE GAMMES<!--:-->" ); ?></span>
        </h2>
        <div class="intro">
          <?php the_content();?>
          
          <?php //require_once('destaques-complementos.php') ?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/diferenciais-complementos">Características</a>-->
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-complementos">
            
           <?php _e(
          "<!--:en-->MODULES<!--:--> 
          
          <!--:pb-->Módulos<!--:-->
          
          <!--:es-->MÓDULOS<!--:-->
          
          <!--:fr-->MODULES<!--:-->" ); ?>
          </a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-complementos">Acessórios</a>-->
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-complementos">
            <?php _e(
          "<!--:en-->ENVIRONMENTS<!--:--> 
          
          <!--:pb-->Ambientes<!--:-->
          
          <!--:es-->AMBIENTES<!--:-->
          
          <!--:fr-->AMBIANCES<!--:-->" ); ?></a>
        </nav>
         <?php
         $caminho  = $_SERVER['REQUEST_URI'];
          $pieces = explode("/", $caminho);
          $idioma = $pieces[1];
          //echo "Escreve idioma; ".$idioma;
        ?>
        <figure class="img-slider"
            data-featherlight-gallery 
            data-featherlight-filter="a"
        >
        <?php 
          for ($i = 0; $i <= 5; $i++) {
        
        if ($idioma == 'pb'){ ?>
                  <a href="<?php bloginfo('template_url');?>/assets/images/complementos/lightbox-coz-complementos-<?php echo $i; ?>.jpg" title="">
                    <img data-lazy="<?php bloginfo('template_url');?>/assets/images/complementos/slide-coz-complementos-<?php echo $i; ?>.jpg" alt="" />
                  </a>
            <?php }
            
            if ($idioma == 'es'){ ?>
                <a href="<?php bloginfo('template_url');?>/assets/images/complementos/lightbox-coz-complementos-<?php echo $i; ?>-es.jpg" title="">
                  <img data-lazy="<?php bloginfo('template_url');?>/assets/images/complementos/slide-coz-complementos-<?php echo $i; ?>-es.jpg" alt="" />
                </a>
            <?php }
            if ($idioma == 'en'){ ?>
                  <a href="<?php bloginfo('template_url');?>/assets/images/complementos/lightbox-coz-complementos-<?php echo $i; ?>-en.jpg" title="">
                    <img data-lazy="<?php bloginfo('template_url');?>/assets/images/complementos/slide-coz-complementos-<?php echo $i; ?>-en.jpg" alt="" />
                  </a>
            <?php }
            if ($idioma == 'fr'){ ?>
                <a href="<?php bloginfo('template_url');?>/assets/images/complementos/lightbox-coz-complementos-<?php echo $i; ?>-fr.jpg" title="">
                  <img data-lazy="<?php bloginfo('template_url');?>/assets/images/complementos/slide-coz-complementos-<?php echo $i; ?>-fr.jpg" alt="" />
                </a>
            <?php }
        ?>
        
        <?php } ?>
        </figure>
        
        <figure class="thumbs" >
        <?php 
          for ($i = 0; $i <= 5; $i++) {
        ?>
          <a class="thumb" data-slick-index="<?php echo $i; ?>" href="<?php bloginfo('template_url');?>/#<?php echo $i; ?>" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/complementos/thumb-coz-complementos-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          </a>

        <?php } ?>
          
          <a class="thumb-mais" href="<?php echo home_url(); ?>/ambientes-complementos" title="<?php the_title();?>">
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/icons/icon-mais.svg" alt="<?php the_title();?>" />
          </a>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>