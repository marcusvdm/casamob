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
            <small class="white"><?php _e(
          "<!--:en-->Line<!--:--> 
          
          <!--:pb-->Linha<!--:-->
          
          <!--:es-->Línea<!--:-->
          
          <!--:fr-->Ligne <!--:-->"
          ); ?></small>
            <span class="lt-purple">play</span>
          </a>
        </h2>
        <h2 class="tipo-modulo">
          
          <?php
             switch ($slug) {
              case 'aereos-verticais-play':
                 echo '<small class="white">Módulos</small>
                       <span class="lt-purple">Aéreos</span>
                       <span class="lt-cooper">Verticais</span>';
                 break;
              case 'aereos-horizontais-play-2':
                 echo '<small class="white">Módulos</small>
                       <span class="lt-purple">Aéreos</span>
                       <span class="lt-cooper">Horizontais</span>';
                 break;
              case 'gabinetes-play-2':
                 echo '<small class="white">Módulos</small>
                       <span class="lt-purple">Gabinetes</span>';
                 break;
              case 'paneleiros-play-2':
                 echo '<small class="white">Módulos</small>
                       <span class="lt-purple">Paneleiros</span>';
                 break;
              case 'cantos-play':
                 echo '<small class="white">Módulos</small>
                       <span class="lt-purple">Cantos</span>';
                 break;
              case 'acessorios':
                 echo '<small class="white">Módulos</small>
                       <span class="lt-purple">Acessórios</span>';
                 break;
              case 'especiais':
                 echo '<small class="white">Módulos</small>
                       <span class="lt-purple">Especiais</span>';
                 break;
             }
          ?>
        </h2>
        <div class="intro">
        <strong>
          <?php _e(
          "<!--:en-->Module Categories:<!--:--> 
          
          <!--:pb-->Categorias de Módulos:<!--:-->
          
          <!--:es-->Categorías de Módulos<!--:-->
          
          <!--:fr-->Catégories de Modules:<!--:-->" ); ?></strong><br>
          
        <a class="link-modulos <?php if($paged === 1 or !$paged) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-play/page/1">
        <?php _e(
          "<!--:en-->Vertical Aerial <!--:--> 
          
          <!--:pb-->Aéreos Verticais<!--:-->
          
          <!--:es-->Aéreos Verticales<!--:-->
          
          <!--:fr-->Aériens Verticaux<!--:-->" ); ?></a>
        | <a class="link-modulos <?php if($paged === 2) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-play/page/2">
        <?php _e(
          "<!--:en-->Horizontal Aerial<!--:--> 
          
          <!--:pb-->Aéreos Horizontais<!--:-->
          
          <!--:es-->Aéreos Horizontales<!--:-->
          
          <!--:fr-->Horizontal Aerial<!--:-->" ); ?></a>
        | <a class="link-modulos <?php if($paged === 3) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-play/page/3">
          <?php _e(
          "<!--:en-->Cabinets<!--:--> 
          
          <!--:pb-->Gabinetes<!--:-->
          
          <!--:es-->Armarios<!--:-->
          
          <!--:fr-->Bureaux<!--:-->" ); ?></a>
        | <a class="link-modulos <?php if($paged === 4) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-play/page/4">
        <?php _e(
          "<!--:en-->Pot Cabinets <!--:--> 
          
          <!--:pb-->Paneleiros<!--:-->
          
          <!--:es-->Alacenas<!--:-->
          
          <!--:fr-->Placards<!--:-->" ); ?></a>
        | <a class="link-modulos <?php if($paged === 5) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-play/page/5">
          <?php _e(
          "<!--:en-->Corners<!--:--> 
          
          <!--:pb-->Cantos<!--:-->
          
          <!--:es-->Esquineros<!--:-->
          
          <!--:fr-->Coins<!--:-->" ); ?></a>
        | <a class="link-modulos <?php if($paged === 6) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-play/page/6">
        <?php _e(
          "<!--:en-->Accessories<!--:--> 
          
          <!--:pb-->Acessórios<!--:-->
          
          <!--:es-->Accesorios <!--:-->
          
          <!--:fr-->Accessoires<!--:-->" ); ?></a>
        | <a class="link-modulos <?php if($paged === 7) { echo "current"; } ?>" href="<?php echo home_url(); ?>/modulos-play/page/7">
        <?php _e(
          "<!--:en-->Special*<!--:--> 
          
          <!--:pb-->Especiais*<!--:-->
          
          <!--:es-->Especiales*<!--:-->
          
          <!--:fr-->Spéciaux*<!--:-->" ); ?></a>
        <br><br>
        <p style="font-size:11px; color: #59496a;">
          <?php _e(
          "<!--:en-->* Available upon request<!--:--> 
          
          <!--:pb-->* Disponível sob consulta*<!--:-->
          
          <!--:es--> *Disponible bajo consulta<!--:-->
          
          <!--:fr-->* Disponible sur demande<!--:-->" ); ?></p>
        </div>
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/caracteristicas-play">
            <?php _e(
          "<!--:en-->CHARACTERISTICS<!--:--> 
          
          <!--:pb-->Características<!--:-->
          
          <!--:es-->CARACTERÍSTICAS<!--:-->
          
          <!--:fr-->CARACTÉRISTIQUES<!--:-->" ); ?>
          </a>
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/modulos-play">
            <?php _e(
          "<!--:en-->MODULES<!--:--> 
          
          <!--:pb-->Módulos<!--:-->
          
          <!--:es-->MODULES<!--:-->
          
          <!--:fr-->MÓDULOS<!--:-->" ); ?>
          </a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-play">Acessórios</a>-->
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-play">
            <?php _e(
          "<!--:en-->ENVIRONMENTS<!--:--> 
          
          <!--:pb-->Ambientes<!--:-->
          
          <!--:es-->AMBIENTES<!--:-->
          
          <!--:fr-->AMBIANCES<!--:-->" ); ?>
          </a>
          </a>
        </nav>

        <figure class="modulos">

<?php

    $jsonstr = get_the_content();
    $jsonobj = json_decode($jsonstr);
    $modulos = $jsonobj->modulos;

    foreach ( $modulos as $p ) {
?>
  <div class="prod-box ajuste-play <?php echo $p->prodID; ?>">
    <h4 class="prod-title"><?php echo $p->prodTitle; ?></h4>
  
    <dl class="prod-data" style="width: 60px; margin-right: 3%;">
     <?php foreach ( $p->prodData[0] as $k => $d ) { ?>
       <?php if ($p->tamanho === "sim") { ?>
          <dt><?php echo $k.":"; ?></dt>
          <dd><?php echo $d; ?></dd>
     <?php } } ?>
    </dl><!-- /.prod-data -->
    
    <?php if ($p->disponivel !== "") { ?>
      <div class="acessorios-play-disponivel"><p><?php echo $p->disponivel; ?></p></div>
    <?php } ?>
    
    <div class="btns" data-featherlight-gallery data-featherlight-filter="a">
      
      <?php $lb_link = ($slug === 'nichos-play' ? '#lb-cores-nichos-play' : '#lb-cores-play'); ?>
      
       <?php if ($p->acessorios === "" ) { ?>
      <a href="#cores-play"
        data-featherlight="<?php echo $lb_link; ?>"
        data-prodid="<?php //echo $p->prodID; ?>"
        data-prodtitle="<?php echo $p->prodTitle; ?>"
        class="btn-cores"
      >
        <?php _e(
          "<!--:en-->colors<!--:--> 
          
          <!--:pb-->cores<!--:-->
          
          <!--:es-->colores<!--:-->
          
          <!--:fr-->couleurs<!--:-->" ); ?>
      </a>
      <?php } ?>
      
      <?php if ($p->puxadores === "true" ) { ?>
      <a href="#puxadores-play"
        data-featherlight="#lb-puxadores-play"
        data-prodid="<?php //echo $p->prodID; ?>"
        data-prodtitle="<?php echo $p->prodTitle; ?>"
        class="btn-puxadores"
      >
        <?php _e(
          "<!--:en-->handles<!--:--> 
          
          <!--:pb-->puxadores<!--:-->
          
          <!--:es-->manijaes<!--:-->
          
          <!--:fr-->poignées<!--:-->" ); ?>
      </a>
      <?php } ?>
      
      <?php if ($p->tampos === "true" ) { ?>
      <a href="#tampos-play"
        data-featherlight="#lb-tampos-play"
        data-prodid="<?php //echo $p->prodID; ?>"
        data-prodtitle="<?php echo $p->prodTitle; ?>"
        class="btn-tampos"
      >
         <?php _e(
          "<!--:en-->tops<!--:--> 
          
          <!--:pb-->tampos<!--:-->
          
          <!--:es-->encimeras<!--:-->
          
          <!--:fr-->plateaux<!--:-->" ); ?>
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
<div id="lb-cores-play" class="hidden">
  <?php require_once('cores-play.php'); ?>
</div>
<div id="lb-cores-nichos-play" class="hidden">
  <?php require_once('cores-nichos-play.php'); ?>
</div>
<div id="lb-puxadores-play" class="hidden">
  <?php require_once('puxadores-play.php'); ?>
</div>
<div id="lb-tampos-play" class="hidden">
  <?php require_once('tampos-play.php'); ?>
</div>


<?php get_footer(); ?>