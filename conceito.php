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
          <span class="lt-violet">Cores </span>
          <span class="orange">Casa</span><span class="cyan">Mob</span>
        </h2>
        <div class="intro">
          <?php the_content();?>
          <small class="legal">*Consulte disponibilidade de estoque e condições de compra. <br>
          ** Paleta apenas com referência digital de tons das cores. As mesmas podem sofrer alteração na aplicação real.</small>
        </div>
      </aside>
      
      <div class="content colors-palete">
        <div class="color-box branco-sal">
        <p class="color-label color-label--dk">
          Branco Sal <br>
          [ BS ]
        </p>
      </div>

      <div class="color-box preto-jabuticaba">
        <p class="color-label">
          Preto Jabuticaba <br>
          [ PJ ]
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
          Cinza Funghi <br>
          [ CF ]
        </p>
      </div>

      <div class="color-box azul-anis">
        <p class="color-label">
          Azul Anis <br>
          [ AA ]
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
          Verde Chá <br>
          [ VC ]
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
          Amarelo Curry <br>
          [ AC ]
        </p>
      </div>

      <div class="color-box laranja-damasco">
        <p class="color-label">
          Laranja Damasco <br>
          [ LD ]
        </p>
      </div>

      <div class="color-box vermelho-paprica">
        <p class="color-label">
          Vermelho Páprica <br>
          [ VP ]
        </p>
      </div>

      <div class="color-box bege-baunilha">
        <p class="color-label">
          Bege Baunilha <br>
          [ BB ]
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
          Roxo Beterraba <br>
          [ RB ]
        </p>
      </div>

      <div class="color-box madeirado-sal">
        <p class="color-label color-label--dk">
          Madeirado Sal <br>
          [ MS ]
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
          Madeirado Canela <br>
          [ MC ]
        </p>
      </div>

      <div class="color-box madeirado-baunilha">
        <p class="color-label">
          Madeirado Baunilha <br>
          [ MB ]
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
          <span class="purple">Combine</span>
          <span class="orange">como</span>
          <span class="cyan">quiser</span>
        </h2>
        <div class="intro">
          <?php the_content();?>
          <span class="legal">
            Sugestões de modulações CasaMob. Não necessariamente disponíveis pra compra no lojista. A CasaMob não se responsabiliza pela montagem.
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
