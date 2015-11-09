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
          <span class="red">Quem</span>
          <span class="lt-purple">Somos</span>
        </h2>
        <!--<div class="intro"></div>-->
      </div>
      <div class="content content--special">
        <div class="scrollpane"><?php the_content();?></div>
        <hr>
        <img class="logos-grupo" src="<?php bloginfo('template_url');?>/assets/images/quem/logos-grupo.png" alt="">

        <p class="endereco">
          <i class="icone-endereco icon-endereco"></i>
          <strong>Escritório Comercial:</strong><br>
          rua alfredo mário pizzotti, 51 - vl. guilherme - são paulo - sp - brasil - cep 02060-040
        </p>

        <p class="endereco">
          <i class="icone-fabrica icon-fabrica"></i>
          <strong>Unidade Fabril:</strong><br>
          rod. prefeito aristeu vieira vilela, km 181,2 - guaratinguetá - sp - cep 12522-010
        </p>
      </div>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>