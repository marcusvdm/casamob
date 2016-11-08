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
          
          <!--:fr-->Ligne <!--:-->"
          ); ?>
              </small>
            <span class="petroleum"><?php the_title();?></span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/caracteristicas-smart"><?php _e(
          "<!--:en-->CHARACTERISTICS<!--:--> 
          
          <!--:pb-->Características<!--:-->
          
          <!--:es-->CARACTERÍSTICAS<!--:-->
          
          <!--:fr-->CARACTÉRISTIQUES<!--:-->" ); ?></a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-smart"><?php _e(
          "<!--:en-->MODULES<!--:--> 
          
          <!--:pb-->Módulos<!--:-->
          
          <!--:es-->MÓDULOS<!--:-->
          
          <!--:fr-->MODULES<!--:-->" ); ?></a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-smart">Acessórios</a>-->
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-smart"><?php _e(
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
          $query_args = array (
            'showposts' => -1,
            'post_parent' => get_id_by_slug('caracteristicas-smart'),
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order'   => 'ASC'
          );
          query_posts($query_args);
          while (have_posts() ) { the_post();
          $childSlug = basename(get_permalink());
        
        if ($idioma == 'pb'){ ?>
                  <a href="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/lightbox-dif-<?php echo $childSlug; ?>.jpg" title="<?php the_title();?>">
                    <img data-lazy="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/slide-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
                  </a>
            <?php }
            
            if ($idioma == 'es'){ ?>
                 <a href="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/lightbox-dif-<?php echo $childSlug; ?>-es.jpg" title="<?php the_title();?>">
                    <img data-lazy="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/slide-dif-<?php echo $childSlug; ?>-es.jpg" alt="<?php the_title();?>" />
                  </a>
            <?php }
            if ($idioma == 'en'){ ?>
                   <a href="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/lightbox-dif-<?php echo $childSlug; ?>-en.jpg" title="<?php the_title();?>">
                    <img data-lazy="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/slide-dif-<?php echo $childSlug; ?>-en.jpg" alt="<?php the_title();?>" />
                  </a>
            <?php }
            if ($idioma == 'fr'){ ?>
                 <a href="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/lightbox-dif-<?php echo $childSlug; ?>-fr.jpg" title="<?php the_title();?>">
                  <img data-lazy="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/slide-dif-<?php echo $childSlug; ?>-fr.jpg" alt="<?php the_title();?>" />
                </a>
            <?php }
        ?>
        <?php } ?>
        </figure>
        
        <aside class="txt-slider">
        <?php 
          //query_posts($query_args);
         // while (have_posts() ) {
          //  the_post();
        ?>
          <div class="txt-content">
            <h3><?php //the_title();?>
            <?php _e(
          "<!--:en-->CHARACTERISTICS<!--:--> 
          
          <!--:pb-->Características<!--:-->
          
          <!--:es-->CARACTERÍSTICAS<!--:-->
          
          <!--:fr-->CARACTÉRISTIQUES<!--:-->" ); ?></h3>
            <?php //the_content();?>
            <ul>
              <li class="caract-li">
              <?php _e(
          "<!--:en-->35 slow motion hinges <!--:--> 
          
          <!--:pb-->Dobradiças 35 slow motion<!--:-->
          
          <!--:es-->Bisagras 35 slow motion<!--:-->
          
          <!--:fr-->Glissières 35 slow motion<!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Aluminum Handles and feet <!--:--> 
          
          <!--:pb-->Puxadores e pés em alumínio<!--:-->
          
          <!--:es-->Manijaes y patas en aluminio<!--:-->
          
          <!--:fr-->Poignées et pieds en aluminium <!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Tempered glass doors with aluminum frame <!--:--> 
          
          <!--:pb-->Portas em vidro temperado com esquadria de alumínio<!--:-->
          
          <!--:es-->Puertas en vidrio templado con perfil de aluminio<!--:-->
          
          <!--:fr-->Portes en verre trempé composés d’un cadrage en aluminium  <!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Shelves in steel with glass sliding door<!--:--> 
          
          <!--:pb-->Prateleira em aço com porta de correr em vidro<!--:-->
          
          <!--:es-->Los estantes de acero con puerta corredera de cristal<!--:-->
          
          <!--:fr-->Etagères en acier avec porte coulissante en verre<!--:-->"
          ); ?></li>
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
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/smart/diferenciais/thumb-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
          </a>

        <?php $i++; } ?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>