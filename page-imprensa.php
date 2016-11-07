<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=imprensa');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <span class="red"><?php _e(
          "<!--:en-->PRESS<!--:--> 
          
          <!--:pb-->imprensa<!--:-->
          
          <!--:es-->PRENSA <!--:-->
          
          <!--:fr-->PRESSE  <!--:-->"
          ); ?></span>
          <span class="white"><?php _e(
          "<!--:en-->&amp;<!--:--> 
          
          <!--:pb-->&amp;<!--:-->
          
          <!--:es-->Y<!--:-->
          
          <!--:fr-->& <!--:-->"
          ); ?></span>
          <span class="lt-purple"><?php _e(
          "<!--:en-->MEDIA<!--:--> 
          
          <!--:pb-->Mídia<!--:-->
          
          <!--:es-->MEDIOS DE COMUNICACIÓN<!--:-->
          
          <!--:fr-->MÉDIA<!--:-->"
          ); ?></span>
        </h2>
        <div class="intro">
          <?php the_content();?>
          <p class="email">
            <!--<i class="icone-email"></i>-->
            <a href="mailto://assessoria@casamob.com.br" class="mail-link">assessoria@casamob.com.br</a>
          </p>
        </div>
      </div>
      <?php
            $caminho  = $_SERVER['REQUEST_URI'];
            $pieces = explode("/", $caminho);
            $idioma = $pieces[1];
            
            if ($idioma == 'pb'){
              
              echo "<div class='content content--limited slideshow'>";
              echo do_shortcode('[wonderplugin_slider id="1"]');
              echo "</div>";
                  
            }
            if ($idioma == 'es'){
                  //nada
            }
            if ($idioma == 'en'){
                 //nada
            }
            if ($idioma == 'fr'){
                  //nada
            }
      ?>
      
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>


<?php get_footer(); ?>