<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=play');
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
          <a href="<?php echo home_url(); ?>#play">
            <small class="white"><?php _e(
          "<!--:en-->Line<!--:--> 
          
          <!--:pb-->Linha<!--:-->
          
          <!--:es-->Línea<!--:-->
          
          <!--:fr-->Ligne <!--:-->"
          ); ?></small>
            <span class="lt-purple"><?php the_title();?></span>
          </a>
        </h2>
        <div class="intro">
          <?php the_content();?>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/caracteristicas-play">
             <?php _e(
          "<!--:en-->CHARACTERISTICS<!--:--> 
          
          <!--:pb-->Características<!--:-->
          
          <!--:es-->CARACTERÍSTICAS<!--:-->
          
          <!--:fr-->CARACTÉRISTIQUES<!--:-->" ); ?>
          
          </a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-play">
            <?php _e(
          "<!--:en-->MODULES<!--:--> 
          
          <!--:pb-->Módulos<!--:-->
          
          <!--:es-->MÓDULOS<!--:-->
          
          <!--:fr-->MODULES<!--:-->" ); ?>
          </a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-play">Acessórios</a>-->
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-play">
            <?php _e(
          "<!--:en-->ENVIRONMENTS<!--:--> 
          
          <!--:pb-->Ambientes<!--:-->
          
          <!--:es-->AMBIENTES<!--:-->
          
          <!--:fr-->AMBIANCES<!--:-->" ); ?>
          
          </a>
        </nav>
        
        <figure class="img-slider"
            data-featherlight-gallery 
            data-featherlight-filter="a"
        >
        <?php 
          $query_args = array (
            'showposts' => -1,
            'post_parent' => get_id_by_slug('caracteristicas-play'),
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order'   => 'ASC'
          );
          query_posts($query_args);
          while (have_posts() ) { the_post();
          $childSlug = basename(get_permalink());
        ?>
          <a href="<?php bloginfo('template_url');?>/assets/images/play/diferenciais/lightbox-dif-<?php echo $childSlug; ?>.jpg" title="<?php the_title();?>">
            <img data-lazy="<?php bloginfo('template_url');?>/assets/images/play/diferenciais/slide-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
          </a>
        <?php } ?>
        </figure>
        
        <aside class="txt-slider">
        <?php 
          //query_posts($query_args);
          //while (have_posts() ) {
            //the_post();
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
              <li class="caract-li"><?php _e(
          "<!--:en-->35 slow motion hinges <!--:--> 
          
          <!--:pb-->Dobradiças 35 slow motion<!--:-->
          
          <!--:es-->Bisagras 35 slow motion<!--:-->
          
          <!--:fr-->Glissières 35 slow motion <!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Aluminum Handles and feet <!--:--> 
          
          <!--:pb-->Puxadores e pés em alumínio<!--:-->
          
          <!--:es-->Manijas y patas de aluminio<!--:-->
          
          <!--:fr-->Poignées et pieds en aluminium <!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Colored on the outside, white on the inside <!--:--> 
          
          <!--:pb-->Colorido por fora, branco por dentro<!--:-->
          
          <!--:es-->Colorido por fuera, blanco por dentro<!--:-->
          
          <!--:fr-->Coloré de l’extérieur, Blanc à l’intérieur <!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Tempered glass doors with aluminum frame <!--:--> 
          
          <!--:pb-->Portas de vidro temperado com esquadria de alumínio<!--:-->
          
          <!--:es-->Puertas de vidrio templado con marcos de aluminio<!--:-->
          
          <!--:fr-->Portes en verre trempé composé d’un cadrage en aluminium <!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Smart skirting <!--:--> 
          
          <!--:pb-->Rodapé inteligente<!--:-->
          
          <!--:es-->Zócalo inteligente<!--:-->
          
          <!--:fr-->Plinthe intelligente <!--:-->"
          ); ?></li>
              <li class="caract-li"><?php _e(
          "<!--:en-->Invisible Base <!--:--> 
          
          <!--:pb-->Base Invisível<!--:-->
          
          <!--:es-->Base Invisible<!--:-->
          
          <!--:fr-->Base Invisible <!--:-->"
          ); ?></li>
              <li class="caract-li">
                <?php _e(
          "<!--:en-->4 color options for tops * <!--:--> 
          
          <!--:pb-->4 opções de cores de tampos*<!--:-->
          
          <!--:es-->4 opciones de colores de encimeras*<!--:-->
          
          <!--:fr-->4 options de couleurs de plateaux* <!--:-->"
          ); ?></li>
            </ul>
            <p>&nbsp;</p>
            <p class="caract-p">*Consulte disponibilidade</p>
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
            <img class="thumb__img" src="<?php bloginfo('template_url');?>/assets/images/play/diferenciais/thumb-dif-<?php echo $childSlug; ?>.jpg" alt="<?php the_title();?>" />
          </a>

        <?php $i++; } ?>
        </figure>
      </div>
    </article>
  </div>
</section>
<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>