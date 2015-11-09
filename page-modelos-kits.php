<?php get_header(); ?>

<?php
  
  // Define custom query parameters
  $query_args = array (
    'paged'           => $paged,
    'post_parent'     => get_id_by_slug('modelos-kits'),
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

<section class="step produtos-page linhas kits <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <a href="<?php echo home_url(); ?>#kits">
            <small class="white">Linha</small>
            <span class="lt-violet">kits</span>
          </a>
        </h2>
        <h2 class="tipo-modulo">
          
          <?php
            switch ($slug) {
              case 'modulos-normais-kits':
                echo '<small class="white">Modelos</small>
                      <span class="lt-violet">kits</span>
                      <span class="acqua">coloridos</span>';
                break;
              case 'modulos-madeirados-kits':
                echo '<small class="white">Modelos</small>
                      <span class="lt-violet">kits</span>
                      <span class="acqua">madeirados</span>';
                break;
            }
          ?>
        </h2>
        <div class="intro">
          <strong>Modelos:</strong><br>
          
          <a class="link-modulos <?php if($paged === 1 or !$paged) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modelos-kits/page/1">kits coloridos</a>
          | <a class="link-modulos <?php if($paged === 2) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modelos-kits/page/2">kits madeirados</a>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/modelos-kits">Modelos</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-kits">Ambientes</a>
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
      
      <a href="#cores-<?php echo $slug; ?>"
        data-featherlight="#lb-cores-<?php echo $slug; ?>"
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
<div id="lb-cores-modelos-normais-kits" class="hidden">
  <?php require_once('cores-modelos-normais-kits.php'); ?>
</div>
<div id="lb-cores-modelos-madeirados-kits" class="hidden">
  <?php require_once('cores-modelos-madeirados-kits.php'); ?>
</div>
<div id="lb-puxadores-modelos-normais-kits" class="hidden">
  <?php require_once('puxadores-modelos-normais-kits.php'); ?>
</div>
<div id="lb-puxadores-modelos-madeirados-kits" class="hidden">
  <?php require_once('puxadores-modelos-madeirados-kits.php'); ?>
</div>
<div id="lb-tampos-modelos-normais-kits" class="hidden">
  <?php require_once('tampos-modelos-normais-kits.php'); ?>
</div>
<div id="lb-tampos-modelos-madeirados-kits" class="hidden">
  <?php require_once('tampos-modelos-madeirados-kits.php'); ?>
</div>


<?php get_footer(); ?>