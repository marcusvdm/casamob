<!-- ******** -->
<!-- CONCEITO -->
<!-- ******** -->
<?php
  $query = new WP_Query('pagename=conceito');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <aside class="info">
        <h2><?php the_title();?></h2>
        <div class="intro"><?php the_content();?></div>
      </aside>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>

<!-- CORES -->
<?php
  $query = new WP_Query('pagename=cores');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <aside class="info">
        <h2>
          <span class="lt-violet">
          <?php _e(
          "<!--:en-->Colors<!--:--> 
          
          <!--:pb-->Cores<!--:-->
          
          <!--:es-->Colores<!--:-->
          
          <!--:fr-->Couleurs<!--:-->"
          ); ?>
          </span>
          <span class="orange">Casa</span><span class="cyan"><?php _e("<!--:en-->MOB<!--:--><!--:pb-->MOB<!--:--><!--:es-->MOB<!--:--><!--:fr-->MOB<!--:-->"); ?></span>
        </h2>
        
                <div class="intro">
          <?php the_content();?>
          <small class="legal">
            <?php _e(
         "<!--:en-->*Consult stock availability and purchasing conditions.  <br>
          ** Pallet only with digital reference of the color tones. They may change in the actual application.<!--:--> 
          
          <!--:pb-->*Consulte disponibilidade de estoque e condições de compra. <br>
          ** Paleta apenas com referência digital de tons das cores. As mesmas podem sofrer alteração na aplicação real.<!--:-->
          
          <!--:es-->*Consulte la disponibilidad de stock y condiciones de compra.  <br>
          ** Paleta apenas con referencia digital de tonos de los colores. Las mismas pueden sufrir alteración en la aplicación real.<!--:-->
          
          <!--:fr-->*Consultez la disponibilité de stocks et les conditions d’achat. <br>
          ** Palette seulement accompagnée de référence digitale de tons de couleurs. Ces dernières peuvent souffrir de changements d’application réelle<!--:-->"); 
          
          ?>
            
            <!--//codigo anterios ao de cima -->
            
            
          <!--  *Consulte disponibilidade de estoque e condições de compra. <br>-->
          <!--** Paleta apenas com referência digital de tons das cores. As mesmas podem sofrer alteração na aplicação real.</small>-->
          
          <!--ESPANHOL-->
          <!-- <small class="legal">*Consulte la disponibilidad de stock y condiciones de compra.  <br>-->
          <!--** Paleta apenas con referencia digital de tonos de los colores. Las mismas pueden sufrir alteración en la aplicación real.</small>-->
          
          <!--ENGLISH-->
          <!-- <small class="legal">*Consult stock availability and purchasing conditions.  <br>-->
          <!--** Pallet only with digital reference of the color tones. They may change in the actual application.</small>-->
          
          <!--FRANCES-->
          <!-- <small class="legal">*Consultez la disponibilité de stocks et les conditions d’achat. <br>-->
          <!--** Palette seulement accompagnée de référence digitale de tons de couleurs. Ces dernières peuvent souffrir de changements d’application réelle</small>-->
          
        </div>
      </aside>
      
      <div class="content colors-palete">
        <div class="color-box branco-sal">
        <p class="color-label color-label--dk">
          <?php _e(
          "<!--:en-->Salt White  <br>
          [ BS ]<!--:--> 
          
          <!--:pb-->Branco Sal <br>
          [ BS ]<!--:-->
          
          <!--:es-->Blanco Sal  <br>
          [ BS ]<!--:-->
          
          <!--:fr-->Blanc Sel  <br>
          [ BS ]<!--:-->"
          ); ?>
         
        </p>
      </div>

      <div class="color-box preto-jabuticaba">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Jaboticaba Black  <br>
          [ PJ ]<!--:--> 
          
          <!--:pb-->Preto Jabuticaba <br>
          [ PJ ]<!--:-->
          
          <!--:es-->Negro Jabuticaba  <br>
          [ PJ ]<!--:-->
          
          <!--:fr-->Noir Cassis  <br>
          [ PJ ]<!--:-->"
          ); ?>
          
        </p>
      </div>

      <!--<div class="color-box prata-gelo">
        <p class="color-label">
          Prata Gelo <br>
          Ref. 2002
        </p>
      </div>-->

      <div class="color-box cinza-funghi">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Funghi Grey  <br>
          [ CF ]<!--:--> 
          
          <!--:pb-->Cinza Funghi <br>
          [ CF ]<!--:-->
          
          <!--:es-->Gris Funghi  <br>
          [ CF ]<!--:-->
          
          <!--:fr-->Gris Funghi <br>
          [ CF ]<!--:-->"
          ); ?>
          
         </p>
      </div>

      <div class="color-box azul-anis">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Anis Blue  <br>
          [ AA ]<!--:--> 
          
          <!--:pb-->Azul Anis <br>
          [ AA ]<!--:-->
          
          <!--:es-->Azul Anís  <br>
          [ AA ]<!--:-->
          
          <!--:fr-->Bleu Anis <br>
          [ AA ]<!--:-->"
          ); ?>
          
        </p>
      </div>

      <!--<div class="color-box azul-blueberry">
        <p class="color-label">
          Azul Blueberry <br>
          Ref. 4002
        </p>
      </div>-->

      <div class="color-box verde-cha">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Tea Green  <br>
          [ VC ]<!--:--> 
          
          <!--:pb-->Verde Chá <br>
          [ VC ]<!--:-->
          
          <!--:es-->Verde Té  <br>
          [ VC ]<!--:-->
          
          <!--:fr-->Vert Thé <br>
          [ VC ]<!--:-->"
          ); ?>
          
        </p>
        </p>
      </div>

      <!--<div class="color-box verde-alecrim">
        <p class="color-label">
          Verde Alecrim <br>
          Ref. 5002
        </p>
      </div>-->

      <div class="color-box amarelo-curry">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Curry Yellow  <br>
          [ AC ]<!--:--> 
          
          <!--:pb-->Amarelo Curry <br>
          [ AC ]<!--:-->
          
          <!--:es-->Amarillo Curry  <br>
          [ AC ]<!--:-->
          
          <!--:fr-->Jaune Curry <br>
          [ AC ]<!--:-->"
          ); ?>
          
        </p>
      </div>

      <div class="color-box laranja-damasco">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Apricot Orange  <br>
          [ LD ]<!--:--> 
          
          <!--:pb-->Laranja Damasco <br>
          [ LD ]<!--:-->
          
          <!--:es-->Anaranjado Damasco  <br>
          [ LD ]<!--:-->
          
          <!--:fr-->Orange Abricoty <br>
          [ LD ]<!--:-->"
          ); ?>
        </p>
      </div>

      <div class="color-box vermelho-paprica">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Paprika Red  <br>
          [ VP ]<!--:--> 
          
          <!--:pb-->Vermelho Páprica <br>
          [ VP ]<!--:-->
          
          <!--:es-->Rojo Achiote  <br>
          [ VP ]<!--:-->
          
          <!--:fr-->Rouge Paprika <br>
          [ LD ]<!--:-->"
          ); ?>
                  </p>
      </div>

      <div class="color-box bege-baunilha">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Vanilla Beige  <br>
          [ BB ]<!--:--> 
          
          <!--:pb-->Bege Baunilha <br>
          [ BB ]<!--:-->
          
          <!--:es-->Beige Vainilla  <br>
          [ BB ]<!--:-->
          
          <!--:fr-->Beige Vanille <br>
          [ BB ]<!--:-->"
          ); ?>
                  </p>
      </div>

      <!--<div class="color-box rosa-iogurte">
        <p class="color-label">
          Rosa Iogurte <br>
          Ref. 8002
        </p>
      </div>-->

      <!--<div class="color-box roxo-figo">
        <p class="color-label">
          Roxo Figo <br>
          Ref. 8006
        </p>
      </div>-->

      <div class="color-box roxo-beterraba">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Beetroot Purple  <br>
          [ RB ]<!--:--> 
          
          <!--:pb-->Roxo Beterraba <br>
          [ RB ]<!--:-->
          
          <!--:es-->Morado Beterraga  <br>
          [ RB ]<!--:-->
          
          <!--:fr-->Mauve Betterave <br>
          [ RB ]<!--:-->"
          ); ?>
                  </p>
      </div>

      <div class="color-box madeirado-sal">
        <p class="color-label color-label--dk">
          <?php _e(
          "<!--:en-->Salt Woody   <br>
          [ MS ]<!--:--> 
          
          <!--:pb-->Madeirado Sal <br>
          [ MS ]<!--:-->
          
          <!--:es-->Maderado Sal   <br>
          [ MS ]<!--:-->
          
          <!--:fr-->Bois Sel <br>
          [ MS ]<!--:-->"
          ); ?>
          
        </p>
      </div>

     <!-- <div class="color-box madeirado-funghi">
        <p class="color-label">
          Madeirado Funghi <br>
          Ref. 2004
        </p>
      </div>-->

      <!--<div class="color-box madeirado-anis">
        <p class="color-label">
          Madeirado Anis <br>
          Ref. 4004
        </p>
      </div>-->

      <div class="color-box madeirado-canela">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Cinamoon Woody   <br>
          [ MC ]<!--:--> 
          
          <!--:pb-->Madeirado Canela <br>
          [ MC ]<!--:-->
          
          <!--:es-->Maderado Canela   <br>
          [ MC ]<!--:-->
          
          <!--:fr-->Bois Vanille <br>
          [ MC ]<!--:-->"
          ); ?>
          
        </p>
      </div>

      <div class="color-box madeirado-baunilha">
        <p class="color-label">
          <?php _e(
          "<!--:en-->Vanila Woody   <br>
          [ MB ]<!--:--> 
          
          <!--:pb-->Madeirado Baunilha <br>
          [ MB ]<!--:-->
          
          <!--:es-->Maderado Vainila   <br>
          [ MB ]<!--:-->
          
          <!--:fr-->Bois Vanille <br>
          [ MB ]<!--:-->"
          ); ?>
                  </p>
      </div>

      <!--<div class="color-box madeirado-paprica">
        <p class="color-label">
          Madeirado Páprica <br>
          Ref. 8010
        </p>
      </div>-->
      </div>
    </article>
  </div>
  
</section>

<?php }} wp_reset_postdata(); ?>


<?php
  $query = new WP_Query('pagename=combine');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step conceito <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <span class="purple"><?php _e(
          "<!--:en-->COMBINE<!--:--> 
          
          <!--:pb-->COMBINE<!--:-->
          
          <!--:es-->COMBINE<!--:-->
          
          <!--:fr-->COMBINEZ<!--:-->"
          ); ?>e</span>
          <span class="orange"><?php _e(
          "<!--:en-->AS<!--:--> 
          
          <!--:pb-->COMO<!--:-->
          
          <!--:es-->COMO <!--:-->
          
          <!--:fr-->À VOTRE <!--:-->"
          ); ?></span>
          <span class="cyan">
          <?php _e(
          "<!--:en-->YOU LIKE<!--:--> 
          
          <!--:pb-->QUISER<!--:-->
          
          <!--:es-->DESEE<!--:-->
          
          <!--:fr-->GUISE<!--:-->"
          ); ?>
          </span>
                  </h2>
        <div class="intro">
          <?php the_content();?>
          <span class="legal"><?php _e(
          "<!--:en-->CasaMob modulation suggestions. Not necessarily available for purchase at the retailer. CasaMob will not be responsible for the assembly.<!--:--> 
          
          <!--:pb-->Sugestões de modulações CasaMob. Não necessariamente disponíveis pra compra no lojista. A CasaMob não se responsabiliza pela montagem.
           <!--:-->
          
          <!--:es-->Sugerencias de modulaciones CasaMob. No necesariamente disponibles para comprar en la tienda. CasaMob no se responsabiliza por el montaje.<!--:-->
          
          <!--:fr-->Suggestions de modulations CasaMob. Ne sont pas forcément disponibles pour achat en magasin. CasaMob n’encourt aucune responsabilité relative à l’installation.<!--:-->"
          ); ?>
            
          </span>
        </div>
      </div>
      
      <div class="content modulos">
        <img src="<?php bloginfo('template_url');?>/assets/images/conceito/combine.jpg" alt="combine">
      </div>
    </article>
  </div>
</section>

<?php }} wp_reset_postdata(); ?>
