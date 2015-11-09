<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=trabalhe');
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
          <span class="lt-beige">Trabalhe</span>
          <span class="acqua">Conosco</span>
        </h2>
        <div class="intro"><?php the_content();?></div>
      </div>
      
      <div class="content content--limited form">
        <?php echo do_shortcode('[contact-form-7 id="192" title="Trabalhe Conosco"]'); ?>
      </div>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>

  <!-- <ul class="accordion mural"> -->

    <?php /*

      $postsVagas = get_posts(array(
          'post_type'       => 'vagas',
          'post_status'     => 'publish',
          'orderby'         => 'post_title',
          'order'           => 'ASC',
          'posts_per_page'  => -1,
          'fields'          => 'ids'
        )
      );

      foreach($postsVagas as $p){

          $entryVagas['area']       = get_post_meta($p, 'área', true);
          $entryVagas['vaga']       = get_the_title($p);
          $entryVagas['descricao']  = get_post_meta($p, 'descricao', true);

          $arrayVagas[] = $entryVagas;
      }

      foreach ($arrayVagas as $key => $value) {
        if ( !in_array($value['area'], $area) ) {
          $area[] = $value['area'];
          $area[$value['area']] = search($arrayVagas, 'area', $value['area']);

          echo '<a href>'.$value['area'].'</b><br>';

          foreach ($area[$value['area']] as $key => $value) {

            echo $value['vaga'].'<br>';
            echo $value['descricao'].'<br>';

          } // foreach

        } // if
      } // foreach

    */?>

  <!-- </ul> -->