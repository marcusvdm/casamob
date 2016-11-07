<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=quem');
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
          "<!--:en-->ABOUT<!--:--> 
          
          <!--:pb-->Quem<!--:-->
          
          <!--:es-->QUIENES<!--:-->
          
          <!--:fr-->QUI<!--:-->" ); ?></span>
           <!--<span ES class="red">QUIENES SOMOS</span>-->
            <!--<span EN class="red">ABOUT US</span>-->
             <!--<span FR class="red">QUI SOMMES-NOUS</span>-->
          <span class="lt-purple"><?php _e(
          "<!--:en-->US<!--:--> 
          
          <!--:pb-->Somos<!--:-->
          
          <!--:es-->SOMOS<!--:-->
          
          <!--:fr-->SOMMES-NOUS<!--:-->" ); ?></span>
        </h2>
        <!--<div class="intro"></div>-->
      </div>
      <div class="content content--special">
        <div class="scrollpane"><?php the_content();?></div>
        <hr>
        <img class="logos-grupo" src="<?php bloginfo('template_url');?>/assets/images/quem/logos-grupo.png" alt="">

        <p class="endereco">
          <i class="icone-endereco icon-endereco"></i>
          <strong>
            <?php _e(
          "<!--:en-->Commercial Office:<!--:--> 
          
          <!--:pb-->Escritório Comercial:<!--:-->
          
          <!--:es-->Oficina Comercial:<!--:-->
          
          <!--:fr-->Siège Commercial:<!--:-->" ); ?></strong><br>
          <?php _e(
          "<!--:en-->51, alfredo mário pizzotti street  - vila guilherme - são paulo - sp - brazil - zip code 02060-040<!--:--> 
          
          <!--:pb--> rua alfredo mário pizzotti, 51 - vl. guilherme - são paulo - sp - brasil - cep 02060-040<!--:-->
          
          <!--:es-->rua alfredo mário pizzotti, 51 - vl. guilherme - são paulo - sp - brasil - cep 02060-040<!--:-->
          
          <!--:fr-->rua alfredo mário pizzotti, 51 - vl. guilherme - sao paulo - sp - brésil - cep 02060-040<!--:-->" ); ?>
         
        </p>

        <p class="endereco">
          <i class="icone-fabrica icon-fabrica"></i>
          <strong>
          <?php _e(
          "<!--:en-->Manufacturing Unit:<!--:--> 
          
          <!--:pb-->Unidade Fabril:<!--:-->
          
          <!--:es-->Unidad Fabril:<!--:-->
          
          <!--:fr-->Unité Industrielle:<!--:-->" ); ?>
          </strong><br><?php _e(
          "<!--:en-->prefeito aristeu vieira vilela road, km 181,2 - guaratinguetá - sp - zip code 12522-010 - Brazil<!--:--> 
          
          <!--:pb-->rod. prefeito aristeu vieira vilela, km 181,2 - guaratinguetá - sp - cep 12522-010<!--:-->
          
          <!--:es-->rod. prefeito aristeu vieira vilela, km 181,2 - guaratinguetá - sp - cep 12522-010<!--:-->
          
          <!--:fr-->MÓDrod. prefeito aristeu vieira vilela, km 181,2 - guaratinguetá - sp  - cep 12522-010ULOS - Brazil<!--:-->" ); ?>
        </p>
        <!--ESPANHOL-->
        <!-- <p class="endereco">-->
        <!--  <i class="icone-endereco icon-endereco"></i>-->
        <!--  <strong>Oficina Comercial:</strong><br>-->
        <!--  rua alfredo mário pizzotti, 51 - vl. guilherme - são paulo - sp - brasil - cep 02060-040-->
        <!--</p>-->

        <!--<p class="endereco">-->
        <!--  <i class="icone-fabrica icon-fabrica"></i>-->
        <!--  <strong>Unidad Fabril:</strong><br>-->
        <!--  rod. prefeito aristeu vieira vilela, km 181,2 - guaratinguetá - sp - cep 12522-010-->
        <!--</p>-->
        
        <!--ENGLISH-->
        <!-- <p class="endereco">-->
        <!--  <i class="icone-endereco icon-endereco"></i>-->
        <!--  <strong>Commercial Office:</strong><br>-->
        <!--  51, alfredo mário pizzotti street  - vila guilherme - são paulo - sp - brazil - zip code 02060-040-->
        <!--</p>-->

        <!--<p class="endereco">-->
        <!--  <i class="icone-fabrica icon-fabrica"></i>-->
        <!--  <strong>Manufacturing Unit:</strong><br>-->
        <!--  road prefeito aristeu vieira vilela road, km 181,2 - guaratinguetá - sp - zip code 12522-010-->
        <!--</p>-->
        
        <!--FRANCES-->
        <!-- <p class="endereco">-->
        <!--  <i class="icone-endereco icon-endereco"></i>-->
        <!--  <strong>Siège Commercial:</strong><br>-->
        <!--  rua alfredo mário pizzotti, 51 - vl. guilherme - são paulo - sp - brasil - cep 02060-040-->
        <!--</p>-->

        <!--<p class="endereco">-->
        <!--  <i class="icone-fabrica icon-fabrica"></i>-->
        <!--  <strong>Unité Industrielle:</strong><br>-->
        <!--  rod. prefeito aristeu vieira vilela, km 181,2 - guaratinguetá - sp - cep 12522-010-->
        <!--</p>-->
      </div>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>