<?php get_header(); ?>

<?php
  
  // Define custom query parameters
  $query_args = array (
    'paged'           => $paged,
    'post_parent'     => get_id_by_slug('acessorios-play'),
    'post_type'       => 'page',
    'posts_per_page'  => 1,
    'orderby'         => 'menu_order',
    'order'           => 'ASC'
  );
  
  // Get current page and append to custom query parameters array
  $query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
  
  // Instantiate custom query
  $query = new WP_Query($query_args);
  
  // Pagination fix
  $temp_query = $wp_query;
  $wp_query   = NULL;
  $wp_query   = $query;
  
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step produtos-page linhas play <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <a href="<?php echo home_url(); ?>#play">
            <small class="white">Linha</small>
            <span class="lt-purple">Play</span>
          </a>
        </h2>
        <h2 class="tipo-modulo">
          
          <?php
            switch ($slug) {
              case 'acessorios':
                echo '<!--<small class="white">Tampos</small>-->
                      <span class="lt-purple">Tampos</span>
                      <span class="lt-cooper">Rodapés<br>& Bases</span>';
                break;
              case 'rodapes-play':
                echo '<!--<small class="white">Acessórios</small>-->
                      <span class="lt-purple">Rodapés</span>
                      <span class="lt-cooper">& Base Inteligênte</span>';
                break;
              case 'nichos-play':
                echo '<!--<small class="white">Acessórios</small>-->
                      <span class="lt-purple">Nichos</span>
                      <span class="lt-cooper">Multifunção</span>';
                break;
            }
          ?>
        </h2>
        <!--<div class="intro">-->
        <!--  <strong>Categorias de Acessórios:</strong><br>-->
          
        <!--  <a class="link-modulos <?php // if($paged === 1 or !$paged) { echo "current"; } ?>" href="<?php // echo home_url(); ?>/acessorios-play/page/1">Tampos &amp; Pia</a>-->
        <!--  | <a class="link-modulos <?php // if($paged === 1) { echo "current"; } ?>" href="<?php // echo home_url(); ?>/acessorios-play/page/1">Rodapés &amp; Base Invisível</a>-->
        <!--  | <a class="link-modulos <?php // if($paged === 3) { echo "current"; } ?>" href="<?php // echo home_url(); ?>/acessorios-play/page/3">Nichos Multifunção</a>-->
        <!--</div>-->
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/diferenciais-play">Características</a>
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/acessorios-play">Acessórios</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/modulos-play">Módulos</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-play">Ambientes</a>
        </nav>

        <figure class="modulos acessorios">

<?php

    $jsonstr = get_the_content();
    $jsonobj = json_decode($jsonstr);
    $modulos = $jsonobj->modulos;

    foreach ( $modulos as $p ) {
?>
  <div class="prod-box <?php echo $p->prodID; ?>">
    <h4 class="prod-title"><?php echo $p->prodTitle; ?></h4>
  
    <dl class="prod-data">
      <?php foreach ( $p->prodData[0] as $k => $d ) { ?>
        <dt><?php echo $k; ?>: </dt>
        <dd><?php echo $d; ?></dd>
      <?php } ?>
    </dl><!-- /.prod-data -->
    
    <div class="msg"><p><?php echo $p->compativel; ?></p></div>
    <div class="msg"><p><?php echo $p->disponivel; ?></p></div>

    <?php //if($slug !== 'rodapes-play') {  ?>
    <!--<div class="btns"-->
    <!--  data-featherlight-gallery -->
    <!--  data-featherlight-filter="a"-->
    
    <!--  <a href="#cores-<?php //echo basename(get_permalink()); ?>"-->
    <!--    data-featherlight="#lb-cores-<?php //echo basename(get_permalink()); ?>"-->
    <!--    data-prodid="<?php //echo $p->prodID; ?>"-->
    <!--    data-prodtitle="<?php //echo $p->prodTitle; ?>"-->
    <!--    class="btn-cores"-->
    <!--    cores-->
    <!--  </a>-->
    <!--</div>-->
    <?php //} ?>
  </div><!-- /.prod-box -->
<?php } ?>
          
        </figure>
      </div>
      
      <ul class="pagination">
        <li class="prev"><?php previous_posts_link('Anterior'); ?></li>
        <li class="next"><?php next_posts_link('Próximo', $query->max_num_pages); ?></li>
      </ul>
      
    </article>
  </div>
</section>

<?php }} wp_reset_postdata();


// Reset main query object
$wp_query = NULL;
$wp_query = $temp_query;

?>

<!-- lightboxes -->
<!--<div id="lb-cores-tampos-play" class="hidden">-->
<!--  <?php // require_once('cores-tampos-play.php'); ?>-->
<!--</div>-->

<?php get_footer(); ?>