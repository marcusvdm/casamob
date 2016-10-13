<?php get_header(); ?>

<?php
  
  // Define custom query parameters
  $query_args = array (
    'paged'           => $paged,
    'post_parent'     => get_id_by_slug('modulos-quadri'),
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

<section class="step produtos-page linhas quadri <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <a href="<?php echo home_url(); ?>#quadri">
            <small class="white">Linha</small>
            <span class="red">quadri 4.0</span>
          </a>
        </h2>
        <h2 class="tipo-modulo">
          
          <?php
            // switch ($slug) {
            //   case 'aereos-verticais-quadri':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Aéreos</span>
            //           <span class="lt-cooper">Verticais</span>';
            //     break;
            //   case 'aereos-horizontais-quadri':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Aéreos</span>
            //           <span class="lt-cooper">Horizontais</span>';
            //     break;
            //   case 'gabinetes-quadri':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Gabinetes</span>';
            //     break;
            //   case 'paneleiros-quadri':
            //     echo '<small class="white">Módulos</small>
            //           <span class="lt-purple">Paneleiros</span>';
            //     break;
            // }
          ?>
        </h2>
        <!--<div class="intro">-->
        <!--  <strong>Categorias de Módulos:</strong><br>-->
          
        <!--  <a class="link-modulos <?php //if($paged === 1 or !$paged) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-quadri/page/1">Aéreos Verticais</a>-->
        <!--  | <a class="link-modulos <?php //if($paged === 2) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-quadri/page/2">Aéreos Horizontais</a>-->
        <!--  | <a class="link-modulos <?php //if($paged === 3) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-quadri/page/3">Gabinetes</a>-->
        <!--  | <a class="link-modulos <?php// if($paged === 4) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-quadri/page/4">Paneleiros</a>-->
        <!--  | <a class="link-modulos <?php //if($paged === 5) { echo "current"; } ?>" href="<?php //echo home_url(); ?>/modulos-quadri/page/5">Nichos</a>-->
        <!--</div>-->
      </div>

      <div class="content">
        
        <nav class="menu-linha">
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/caracteristicas-quadri">Características</a>
          <a class="menu-linha--item active" href="<?php echo home_url(); ?>/modulos-quadri">Módulos</a>
          <!--<a class="menu-linha--item" href="<?php //echo home_url(); ?>/acessorios-quadri">Acessórios</a>-->
          <a class="menu-linha--item" href="<?php echo home_url(); ?>/ambientes-quadri">Ambientes</a>
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
           <?php if (($p->kits === "sim" ) && ($k === "Cores" )) { ?>
                <?php echo $k.":"; ?><br><a href="#" class="open-cores-kits"><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/quadri/<?php echo $d; ?>" style="width:100%; max-width:20px;" /></a>
               
          <?php } else if ($k === "Cores" ) { ?>
                <?php echo $k.":"; ?><br><a href="#" class="open-cores"><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/quadri/<?php echo $d; ?>" style="width:100%; max-width:20px;" /></a>
               
          <?php } else if ($k === "Cor" ) { ?>
                  <?php echo $k.":"; ?><br><a href="#" class="open-cor"><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/quadri/<?php echo $d; ?>" style="width:100%; max-width:20px;" /></a>
                   
          <?php } ?>
        </dd>
      <?php } ?>
    </dl><!-- /.prod-data -->
    
    <div class="tampos">
      <?php if ($p->tampos !== "" ) { ?>
      <p><?php echo $p->tampos; ?></p><a href="#" class="open-cor-tampos"><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/quadri/<?php echo $p->tamposImg; ?>" style="width:100%; max-width:45px;" /></a>
      <?php } ?>
    </div>
    
    <div class="puxadores"><p><?php echo $p->peca; ?></p><img src="/wp-content/themes/casamob/assets/images/modulos-aereos/quadri/<?php echo $p->puxadores; ?>" style="width:100%; max-width:100px;" /><p><?php //echo $p->medidapeca; ?></p></div>
    
    <div class="btns" data-featherlight-gallery data-featherlight-filter="a">
      
      <?php //$lb_link = ($slug === 'nichos-quadri' ? '#lb-cores-nichos-quadri' : '#lb-cores-quadri'); ?>
      
      <!--<a href="#cores-quadri"-->
      <!--  data-featherlight="<?php //echo $lb_link; ?>"-->
      <!--  data-prodid="<?php //echo $p->prodID; ?>"-->
      <!--  data-prodtitle="<?php //echo $p->prodTitle; ?>"-->
      <!--  class="btn-cores"-->
      <!-->-->
      <!--  cores-->
      <!--</a>-->
      
      <?php //if ($p->puxadores === "true" ) { ?>
      <!--<a href="#puxadores-quadri"-->
      <!--  data-featherlight="#lb-puxadores-quadri"-->
      <!--  data-prodid="<?php //echo $p->prodID; ?>"-->
      <!--  data-prodtitle="<?php //echo $p->prodTitle; ?>"-->
      <!--  class="btn-puxadores"-->
      <!-->-->
      <!--  puxadores-->
      <!--</a>-->
      <?php //} ?>
      
      <?php //if ($p->tampos === "true" ) { ?>
      <!--<a href="#tampos-quadri"-->
      <!--  data-featherlight="#lb-tampos-quadri"-->
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
<div id="lb-cores-quadri" class="hidden">
  <?php //require_once('cores-quadri.php'); ?>
</div>
<div id="lb-cores-nichos-quadri" class="hidden">
  <?php //require_once('cores-nichos-quadri.php'); ?>
</div>
<div id="lb-puxadores-quadri" class="hidden">
  <?php //require_once('puxadores-quadri.php'); ?>
</div>
<div id="lb-tampos-quadri" class="hidden">
  <?php //require_once('tampos-quadri.php'); ?>
</div>

<div class="cores-modulos">
    <a href="#" class="close-cores">X</a>
    <div class="cor-bs">branco<br>sal<br>[ bs ]</div>
    <div class="cor-pj">preto<br>jabuticaba<br>[ pj ]</div>
    <div class="cor-vc">verde<br>chá<br>[ vc ]</div>
    <div class="cor-ac">amarelo<br>curry<br>[ ac ]</div>
    <div class="cor-vp">vermelho<br>páprica<br>[ vp ]</div>
  </div>
  
  <div class="cores-modulos-kits">
    <a href="#" class="close-cores">X</a>
    <div class="cor-bs">branco<br>sal<br>[ bs ]</div>
    <div class="cor-pj">preto<br>jabuticaba<br>[ pj ]</div>
    <div class="cor-vp">vermelho<br>páprica<br>[ vp ]</div>
    <div class="cores-indicadas">As cores indicadas acima somente nas portas de vidro, gavetas e porta menor do balcão.</div>
  </div>
  
  <div class="cor-modulos">
    <a href="#" class="close-cores">X</a>
    <div class="cor-bs">branco<br>sal<br>[ bs ]</div>
  </div>
  
  <div class="cor-tampos">
    <a href="#" class="close-cores">X</a>
    <div class="cor-mp">mármore<br>preto<br>[ mp ]</div>
    <div class="cor-mb-b">mármore<br>branco<br>[ mb ]</div>
  </div>
 
  <div class="all-screen"><div>

<?php get_footer(); ?>