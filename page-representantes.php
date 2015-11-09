<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=representantes');
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
          <span class="lt-blue">Repre</span>
          <span class="lt-blue">sentantes</span>
        </h2>
        <div class="intro"><?php the_content();?></div>
        <!-- POPUP REPRESENTANTES -->
        <div class="popup">
          <a href="#" class="close">X</a>
          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="173" height="173" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0">
            <param name="name" value="movelsul" />
            <param name="src" value="/wp-content/themes/casamob/assets/images/movelsul-173x173-pt.swf" />
            <param name="allowfullscreen" value="false" />
            <param name="quality" value="high" />
            <embed type="application/x-shockwave-flash" width="173" height="173" src="/wp-content/themes/casamob/assets/images/movelsul-173x173-pt.swf"></embed>
          </object>
        </div>
        <!-- FIM POPUP REPRESENTANTES -->
      </div>
      <div class="content">
        <!-- PRINT THE LOCATIONS LIST -->
        <ul class="regioes accordion accordion--location">
          <?php
      
            $postsOnde = get_posts(array(
                'post_type'   => 'representantes',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'fields' => 'ids'
                )
            );
      
            foreach($postsOnde as $p){
      
                $entryOnde['regiao']    = get_post_meta($p, 'região', true);
                $entryOnde['estado']    = get_post_meta($p, 'estado', true);
                $entryOnde['cobertura']    = get_post_meta($p, 'cobertura', true);
                $entryOnde['escritorio']  = get_post_meta($p, 'escritorio', true);
                $entryOnde['telefones']  = get_post_meta($p, 'telefones', true);
                $entryOnde['email']  = get_post_meta($p, 'email', true);
                $entryOnde['titulo']    = get_the_title($p);
      
                $arrayOnde[] = $entryOnde;
            }
      
            $regiao     = array();
            $estado     = array();
            $cobertura  = array();
      
            foreach ($arrayOnde as $e => $value) {
      
              if ( !in_array($value['regiao'], $regiao) ) {
                $regiao[] = $value['regiao'];
                $regiao[$value['regiao']] = search($arrayOnde, 'regiao', $value['regiao']);
                $cssregiao = preg_replace('/\W+/','',strtolower($value['regiao']));
                echo '<li><a href="#'.$cssregiao.'"class="regiao '.$cssregiao.'">'.$value['regiao'].'</a><ul class="ul-'.$cssregiao.'">';
      
      
                foreach ($regiao[$value['regiao']] as $key => $value) {
      
                  if ( !in_array($value['estado'], $estado) ) {
                    $estado[] = $value['estado'];
                    $estado[$value['estado']] = search($arrayOnde, 'estado', $value['estado']);
                    $cssestado = preg_replace('/\W+/','',strtolower($value['estado']));
                    echo '<li><a href="#'.$cssregiao.'-'.$cssestado.'" class="estado '.$cssestado.'">'.$value['estado'].'</a><ul><div class="scrollpane">';
      
      
                      foreach ($estado[$value['estado']] as $key => $value) {
      
                        if ( !in_array($value['cobertura'], $cobertura) ) {
                          $cobertura[] = $value['cobertura'];
                          $cobertura[$value['cobertura']] = search($arrayOnde, 'cobertura', $value['cobertura']);
                          $csscobertura = preg_replace('/\W+/','',strtolower($value['cobertura']));
                          echo '<li><a href="#'.$cssregiao.'-'.$cssestado.'-'.$csscobertura.'" class="cobertura"><strong>+</strong> '.$value['cobertura'].'</a><ul>';
      
                            foreach ($cobertura[$value['cobertura']] as $key => $value) {
                              echo '<li class="location-info">';
                                echo '<p><strong>'.$value['titulo'].'</strong></p>';
                                echo '<p>'.$value['escritorio'].'</p>';
                                echo '<p>'.implode("<br>", explode(",", $value['telefones'])).'</p>';
                                echo '<p>'.implode("<br>", explode(",", $value['email'])).'</p>';
                              echo '</li>';
                            }
      
                          echo '</ul>';
                        }
                      }
      
      
                    echo '</div></ul>';
                  }
                }
      
      
                echo '</ul>';
              }
            }
          ?>
        </ul><!-- /.regioes -->
        
        
      </div>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>

<?php get_footer(); ?>