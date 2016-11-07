<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=smart');
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
          <a href="<?php echo home_url(); ?>#smart">
            <small class="white">
               <?php _e(
          "<!--:en-->Line<!--:--> 
          
          <!--:pb-->Linha<!--:-->
          
          <!--:es-->Línea<!--:-->
          
          <!--:fr-->Ligne<!--:-->" ); ?>
            </small>
            <span class="petroleum"><?php the_title();?></span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
          
          <?php require_once('destaques-smart.php') ?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/caracteristicas-smart"><?php _e("<!--:en-->CHARACTERISTICS<!--:--><!--:pb-->CARACTERÍSTICAS<!--:--><!--:es-->CARACTERÍSTICAS<!--:--><!--:fr-->CARACTÉRISTIQUES<!--:-->" ); ?></a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-smart"><?php _e("<!--:en-->MODULES<!--:--><!--:pb-->Módulos<!--:--><!--:es-->MÓDULOS<!--:--><!--:fr-->MODULES<!--:-->" ); ?></a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-smart">Acessórios</a>-->
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/ambientes-smart"><?php _e("<!--:en-->ENVIRONMENTS<!--:--><!--:pb-->Ambientes<!--:--><!--:es-->AMBIENTES<!--:--><!--:fr-->AMBIANCES<!--:-->" ); ?></a>
        </nav>
         <?php
         $caminho  = $_SERVER['REQUEST_URI'];
          $pieces = explode("/", $caminho);
          $idioma = $pieces[1];
          //echo "Escreve idioma; ".$idioma;
        ?>
        <figure class="thumbs ambientes"
            data-featherlight-gallery 
            data-featherlight-filter="a">
        <?php 
          $exceptions = array(0, 3, 5);
          //$remove = array(10,19,20);
          
          for ($i = 0; $i <= 13; $i++) {
            
          
            if (!in_array($i, $exceptions)) {
        ?>
          <a class="thumb" href="<?php bloginfo('template_url');?>/assets/images/smart/lightbox-coz-smart-amb-<?php echo $i; ?>.jpg" title="<?php the_title();?>">
            <?php if (($i == 0) || ($i == 3)) { 
          
            if ($idioma == 'pb'){ ?>
                  <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
            <?php }
            
            if ($idioma == 'es'){ ?>
                  <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>-es.jpg" alt="<?php the_title();?>" />  
            <?php }
            if ($idioma == 'en'){ ?>
                   <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>-en.jpg" alt="<?php the_title();?>" />
            <?php }
            if ($idioma == 'fr'){ ?>
                  <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>-fr.jpg" alt="<?php the_title();?>" />
            <?php }
          
          } else { ?>
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          <?php } ?>
          </a>
        <?php } else { ?>
          <span class="thumb thumb-capa">
            <?php if (($i == 0) || ($i == 3)) { 
          
            if ($idioma == 'pb'){ ?>
                  <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
            <?php }
            
            if ($idioma == 'es'){ ?>
                  <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>-es.jpg" alt="<?php the_title();?>" />  
            <?php }
            if ($idioma == 'en'){ ?>
                   <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>-en.jpg" alt="<?php the_title();?>" />
            <?php }
            if ($idioma == 'fr'){ ?>
                  <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>-fr.jpg" alt="<?php the_title();?>" />
            <?php }
          
          } else { ?>
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/thumb-coz-smart-amb-<?php echo $i; ?>.jpg" alt="<?php the_title();?>" />
          <?php } ?>
          </span>
        <?php } }?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>