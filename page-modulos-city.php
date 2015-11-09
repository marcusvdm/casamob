<?php get_header(); ?>

<?php
  
  // Define custom query parameters
  $query_args = array (
    'paged'           => $paged,
    'post_parent'     => get_id_by_slug('modulos-city'),
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

<section class="step produtos-page linhas city <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <a href="<?php echo home_url(); ?>#city">
            <small class="white">Linha</small>
            <span class="lt-green">city</span>
          </a>
        </h2>
        <h2 class="tipo-modulo">
          
          <?php
            switch ($slug) {
              case 'modulos-normais-city':
                echo '<small class="white">Módulos</small>
                      <span class="lt-green">City</span>';
                break;
              case 'modulos-madeirados-city':
                echo '<small class="white">Módulos</small>
                      <span class="lt-green">City</span>
                      <span class="cooper">Madeirada</span>';
                break;
            }
          ?>
        </h2>
        <div class="intro">
          <strong>Categorias de Módulos:</strong><br>
          
          <a class="link-modulos <?php if($paged === 1 or !$paged) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-city/page/1">Módulos City</a>
          | <a class="link-modulos <?php if($paged === 2) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-city/page/2">Módulos City Madeirada</a>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/diferenciais-city">Diferenciais</a>
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/módulos-city">Módulos</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-city">Ambientes</a>
        </nav>

        <figure class="modulos">

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

    <div class="btns"
      data-featherlight-gallery 
      data-featherlight-filter="a"
    >
      
      
      <?php 
        $whiteOnly = array(
          'v-1050x600-3p',
          'pan-700x1900-4p'
        );
        $gabinetes = array(
          'gab-1050x700-3p-2g'
        );
        
        $lb_link_cor = (in_array($p->prodID, $whiteOnly) ? '#lb-cores-white' : '#lb-cores-'.$slug); 
        
        if (in_array($p->prodID, $gabinetes) && $slug === 'modulos-madeirados-city') {
          $lb_link_cor = '#lb-cores-gabinetes-madeirados-city';
        }
      ?>
      
      <a href="<?php echo $lb_link_cor; ?>"
        data-featherlight="<?php echo $lb_link_cor; ?>"
        data-prodid="<?php echo $p->prodID; ?>"
        data-prodtitle="<?php echo $p->prodTitle; ?>"
        class="btn-cores"
      >
        cores
      </a>
      
      <?php if ($p->puxadores === "true" ) { ?>
      <a href="#puxadores-<?php echo $slug; ?>"
        data-featherlight="#lb-puxadores-<?php echo $slug; ?>"
        data-prodid="<?php echo $p->prodID; ?>"
        data-prodtitle="<?php echo $p->prodTitle; ?>"
        class="btn-puxadores"
      >
        puxadores
      </a>
      <?php } ?>
      
      <?php if ($p->tampos === "true" ) { ?>
      <a href="#tampos-<?php echo $slug; ?>"
        data-featherlight="#lb-tampos-<?php echo $slug; ?>"
        data-prodid="<?php echo $p->prodID; ?>"
        data-prodtitle="<?php echo $p->prodTitle; ?>"
        class="btn-tampos"
      >
        tampos
      </a>
      <?php } ?>
    </div>
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
<div id="lb-cores-modulos-normais-city" class="hidden">
  <?php require_once('cores-modulos-normais-city.php'); ?>
</div>
<div id="lb-cores-white" class="hidden">
  <?php require_once('cores-white.php'); ?>
</div>
<div id="lb-cores-modulos-madeirados-city" class="hidden">
  <?php require_once('cores-modulos-madeirados-city.php'); ?>
</div>
<div id="lb-cores-gabinetes-madeirados-city" class="hidden">
  <?php require_once('cores-gabinetes-madeirados-city.php'); ?>
</div>
<div id="lb-puxadores-modulos-normais-city" class="hidden">
  <?php require_once('puxadores-modulos-normais-city.php'); ?>
</div>
<div id="lb-puxadores-modulos-madeirados-city" class="hidden">
  <?php require_once('puxadores-modulos-madeirados-city.php'); ?>
</div>
<div id="lb-tampos-modulos-normais-city" class="hidden">
  <?php require_once('tampos-modulos-normais-city.php'); ?>
</div>
<div id="lb-tampos-modulos-madeirados-city" class="hidden">
  <?php require_once('tampos-modulos-madeirados-city.php'); ?>
</div>


<?php get_footer(); ?>