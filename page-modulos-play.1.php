<?php get_header(); ?>

<?php
  
  // Define custom query parameters
  $query_args = array (
    'paged'           => $paged,
    'post_parent'     => get_id_by_slug('modulos-play'),
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
            <span class="purple">play</span>
          </a>
        </h2>
        <h2 class="tipo-modulo">
          
          <?php
            // switch ($slug) {
            //   case 'aereos-verticais-play':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Aéreos</span>
            //           <span class="lt-cooper">Verticais</span>';
            //     break;
            //   case 'aereos-horizontais-play':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Aéreos</span>
            //           <span class="lt-cooper">Horizontais</span>';
            //     break;
            //   case 'gabinetes-play':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Gabinetes</span>';
            //     break;
            //   case 'paneleiros-play':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Paneleiros</span>';
            //     break;
            // }
          ?>
        </h2>
        <!--<div class="intro">-->
        <!--  <strong>Categorias de Módulos:</strong><br>-->
          
        <!--  <a class="link-modulos <?php //if($paged === 1 or !$paged) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-play/page/1">Aéreos Verticais</a>-->
        <!--  | <a class="link-modulos <?php //if($paged === 2) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-play/page/2">Aéreos Horizontais</a>-->
        <!--  | <a class="link-modulos <?php //if($paged === 3) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-play/page/3">Gabinetes</a>-->
        <!--  | <a class="link-modulos <?php// if($paged === 4) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-play/page/4">Paneleiros</a>-->
        <!--  | <a class="link-modulos <?php //if($paged === 5) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-play/page/5">Nichos</a>-->
        <!--</div>-->
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/diferenciais-play">Características</a>
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/modulos-play">Módulos</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/acessorios-play">Acessórios</a>
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-play">Ambientes</a>
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
        <dt><?php //echo $k; ?></dt>
        <dd>
          <?php echo $k.":"; ?><br><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/play/<?php echo $d; ?>" style="width:100%; max-width:35px;" />
        </dd>
      <?php } ?>
    </dl><!-- /.prod-data -->
    
    <div class="tampos">
      <?php if ($p->tampos === "Tampos" ) { ?>
            <p><?php echo $p->tampos; ?></p><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/play/<?php echo $p->tamposImg; ?>" style="width:100%; max-width:45px;" />
      <?php } ?>
    </div>
    
    <div class="puxadores-play">
      <div class="obj"><p><?php echo $p->NomePuxadorUm; ?></p><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/play/<?php echo $p->ImgPuxadorUm; ?>"  /></div>
      <div class="obj"><p><?php echo $p->NomePuxadorDois; ?></p><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/play/<?php echo $p->ImgPuxadorDois; ?>" /></div>
    </div>
    
    <div class="btns" data-featherlight-gallery data-featherlight-filter="a">
      
      <?php //$lb_link = ($slug === 'nichos-play' ? '#lb-cores-nichos-play' : '#lb-cores-play'); ?>
      
      <!--<a href="#cores-play"-->
      <!--  data-featherlight="<?php //echo $lb_link; ?>"-->
      <!--  data-prodid="<?php //echo $p->prodID; ?>"-->
      <!--  data-prodtitle="<?php //echo $p->prodTitle; ?>"-->
      <!--  class="btn-cores"-->
      <!-->-->
      <!--  cores-->
      <!--</a>-->
      
      <?php //if ($p->puxadores === "true" ) { ?>
      <!--<a href="#puxadores-play"-->
      <!--  data-featherlight="#lb-puxadores-play"-->
      <!--  data-prodid="<?php //echo $p->prodID; ?>"-->
      <!--  data-prodtitle="<?php //echo $p->prodTitle; ?>"-->
      <!--  class="btn-puxadores"-->
      <!-->-->
      <!--  puxadores-->
      <!--</a>-->
      <?php //} ?>
      
      <?php //if ($p->tampos === "true" ) { ?>
      <!--<a href="#tampos-play"-->
      <!--  data-featherlight="#lb-tampos-play"-->
      <!--  data-prodid="<?php //echo $p->prodID; ?>"-->
      <!--  data-prodtitle="<?php //echo $p->prodTitle; ?>"-->
      <!--  class="btn-tampos"-->
      <!-->-->
      <!--  tampos-->
      <!--</a>-->
      <?php //} ?>
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
<div id="lb-cores-play" class="hidden">
  <?php //require_once('cores-play.php'); ?>
</div>
<div id="lb-cores-nichos-play" class="hidden">
  <?php //require_once('cores-nichos-play.php'); ?>
</div>
<div id="lb-puxadores-play" class="hidden">
  <?php //require_once('puxadores-play.php'); ?>
</div>
<div id="lb-tampos-play" class="hidden">
  <?php //require_once('tampos-play.php'); ?>
</div>


<?php get_footer(); ?>