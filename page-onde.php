<?php get_header(); ?>
<?php
  $query = new WP_Query('pagename=onde');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step <?php echo $slug; ?> s-accordion__regioes--show" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <span class="lt-cyan"><?php _e(
          "<!--:en-->Where<!--:--> 
          
          <!--:pb-->Onde<!--:-->
          
          <!--:es-->Donde<!--:-->
          
          <!--:fr-->où<!--:-->"
          ); ?></span>
          <span class="lt-red"><?php _e(
          "<!--:en-->to buy<!--:--> 
          
          <!--:pb-->Comprar<!--:-->
          
          <!--:es-->comprar<!--:-->
          
          <!--:fr-->acheter<!--:-->"
          ); ?></span>
        </h2>
        <div class="intro">
          <?php the_content();?>
          <span class="legal">
            <?php _e(
          "<!--:en-->*The total assortment of CasaMob products is not necessarily available in stores. Consult the retailer's stock availability.<!--:--> 
          
          <!--:pb-->*O sortimento total de produtos CasaMob não necessariamente está disponível nas lojas.
          Consulte disponibilidade de estoque do lojista.<!--:-->
          
          <!--:es-->*El surtido completo de productos CasaMob no está disponible necesariamente en las tiendas. *Consulte la disponibilidad de stock de la tienda.<!--:-->
          
          <!--:fr-->*L’assortiment total de produits CasaMob n’est pas nécéssairement disponible en magasins. Vérifiez la disponibilité des stocks en magasin.  <!--:-->"
          ); ?>
          </span>
        </div>
        <div class="virtual-store">
          <ul class="new-accordion">
            <li><a href="#" class="accordion__item show-nacionais active" title="Lojas"><?php _e(
          "<!--:en-->Physical stores<!--:--> 
          
          <!--:pb-->LOJAS FISICAS<!--:-->
          
          <!--:es-->Tiendas físicas<!--:-->
          
          <!--:fr-->Magasins physiques<!--:-->"
          ); ?></a></li>
            <li><a href="#" class="accordion__item has-arrow show-web" title="Casamob web"><?php _e(
          "<!--:en-->Online stores<!--:--> 
          
          <!--:pb-->LOJAS ONLINE<!--:-->
          
          <!--:es-->Tiendas en línea<!--:-->
          
          <!--:fr-->Magasins online <!--:-->"
          ); ?></a>
              <ul class="accordion__list">
                
                <?php
                $postslojas = new WP_Query(array(
                    'post_type'       => 'lojas-virtuais',
                    'no_found_rows'   => 'true',
                    'orderby'         => 'name',
                    'order'           => 'ASC',
                    'post_status'     => 'publish',
                    'posts_per_page'  => -1
                    )
                );
                
                if ( $postslojas->have_posts() ) : while ( $postslojas->have_posts() ) : $postslojas->the_post();
                  
                  $img = get_field('logo') ? '<img src="'.get_field('logo').'" alt="'.get_the_title().'">' : get_the_title();
                  $url = get_field('url');
                  
                  echo '<li class="logo-web"><a href="'.$url.'" title="'.get_the_title().'" target="_blank">'.$img.'</a></li>';
                  
                 
                endwhile; endif;
                wp_reset_postdata();
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="content">
        
        
        <!-- PRINT THE LOCATIONS LIST -->
        <ul class="regioes accordion accordion--location nacionais">
          <?php
    
            $postsOnde = get_posts(array(
                'post_type'   => 'onde-comprar',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'fields' => 'ids'
                )
            );
    
            foreach($postsOnde as $p){
    
                $entryOnde['regiao']        = get_post_meta($p, 'região', true);
                $entryOnde['estado']        = get_post_meta($p, 'estado', true);
                $entryOnde['cidade']        = get_post_meta($p, 'cidade', true);
                $entryOnde['endereco']      = get_post_meta($p, 'endereco', true);
                $entryOnde['telefone']      = get_post_meta($p, 'telefone', true);
                $entryOnde['informacoes']   = get_post_meta($p, 'informacoes', true);
                $entryOnde['titulo']        = get_the_title($p);
    
                $arrayOnde[] = $entryOnde;
            }
            
            $caminho  = $_SERVER['REQUEST_URI'];
            $pieces = explode("/", $caminho);
            $idioma = $pieces[1]; 
    
            $regiao = array();
            $estado = array();
            $cidade = array();
    
            foreach ($arrayOnde as $e => $value) {
    
              if ( !in_array($value['regiao'], $regiao) ) {
                $regiao[] = $value['regiao'];
                $regiao[$value['regiao']] = search($arrayOnde, 'regiao', $value['regiao']);
                $cssregiao = preg_replace('/\W+/','',strtolower($value['regiao']));
                
                if ($idioma == 'pb'){
                  if ($value['regiao'] == 'Norte'){ $valor_regiao = 'Norte'; }
                  if ($value['regiao'] == 'Nordeste'){ $valor_regiao = 'Nordeste'; }
                  if ($value['regiao'] == 'Sul'){ $valor_regiao = 'Sul'; }
                  if ($value['regiao'] == 'Sudeste'){ $valor_regiao = 'Sudeste'; }
                  if ($value['regiao'] == 'Centro-Oeste'){ $valor_regiao = 'Centro-Oeste'; }
                }
                if ($idioma == 'es'){
                  if ($value['regiao'] == 'Norte'){ $valor_regiao = 'Norte'; }
                  if ($value['regiao'] == 'Nordeste'){ $valor_regiao = 'Nordeste'; }
                  if ($value['regiao'] == 'Sul'){ $valor_regiao = 'Sur'; }
                  if ($value['regiao'] == 'Sudeste'){ $valor_regiao = 'Sudeste'; }
                  if ($value['regiao'] == 'Centro-Oeste'){ $valor_regiao = 'Centro Oeste'; }
                }
                if ($idioma == 'en'){
                  if ($value['regiao'] == 'Norte'){ $valor_regiao = 'North'; }
                  if ($value['regiao'] == 'Nordeste'){ $valor_regiao = 'Northeast'; }
                  if ($value['regiao'] == 'Sul'){ $valor_regiao = 'South'; }
                  if ($value['regiao'] == 'Sudeste'){ $valor_regiao = 'Southeast'; }
                  if ($value['regiao'] == 'Centro-Oeste'){ $valor_regiao = 'Midwest'; }
                }
                 if ($idioma == 'fr'){
                  if ($value['regiao'] == 'Norte'){ $valor_regiao = 'Nord'; }
                  if ($value['regiao'] == 'Nordeste'){ $valor_regiao = 'Nord-est'; }
                  if ($value['regiao'] == 'Sul'){ $valor_regiao = 'Sud'; }
                  if ($value['regiao'] == 'Sudeste'){ $valor_regiao = 'Au sud-est'; }
                  if ($value['regiao'] == 'Centro-Oeste'){ $valor_regiao = 'Midwest'; }
                }
                
                
                echo '<li><a href="#'.$cssregiao.'"class="regiao '.$cssregiao.'">'.$valor_regiao.'</a><ul class="ul-'.$cssregiao.'">';
    
    
                foreach ($regiao[$value['regiao']] as $key => $value) {
    
                  if ( !in_array($value['estado'], $estado) ) {
                    $estado[] = $value['estado'];
                    $estado[$value['estado']] = search($arrayOnde, 'estado', $value['estado']);
                    $cssestado = preg_replace('/\W+/','',strtolower($value['estado']));
                    echo '<li><a href="#'.$cssregiao.'-'.$cssestado.'" class="estado '.$cssestado.'">'.$value['estado'].'</a><ul><div class="scrollpane">';
    
    
                      foreach ($estado[$value['estado']] as $key => $value) {
    
                        if ( !in_array($value['cidade'], $cidade) ) {
                          $cidade[] = $value['cidade'];
                          $cidade[$value['cidade']] = search($arrayOnde, 'cidade', $value['cidade']);
                          $csscidade = preg_replace('/\W+/','',strtolower($value['cidade']));
                          echo '<li><a href="#'.$cssregiao.'-'.$cssestado.'-'.$csscidade.'" class="cidade"><strong>+</strong> '.$value['cidade'].'</a><ul>';
    
                            foreach ($cidade[$value['cidade']] as $key => $value) {
                              echo '<li class="location-info">';
                                echo '<p><strong>'.$value['titulo'].'</strong></p>';
                                echo '<p>'.implode("<br>", explode(";", $value['endereco'])).'</p>';
                                echo '<p>'.implode("<br>", explode(";", $value['telefone'])).'</p>';
                                echo '<p>'.implode("<br>", explode(";", $value['informacoes'])).'</p>';
                              echo '</li>';
                            }
    
                          echo '</ul>';
                        }
                      }
    
    
                    echo '</ul>';
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