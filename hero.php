<?php
  $imagesDir = get_template_directory_uri()."/assets/images/hero/";

  if (wpmd_is_device()) {
    $playImages = array('play-cozinha');
    $quadriImages = array('quadri-cozinha');
    $cityImages = array('city-cozinha');
  } else {

    $playImages = array(
      'play-cozinha',
      //'play-modelo',
      'play-modulo1',
      'play-modulo2',
      'play-modulo3',
      'play-modulo4',
      'play-exaustor',
      'play-fogao',
      'play-frigideira',
      'play-fruteira',
      'play-geladeira',
      'play-jarra',
      'play-luminaria',
      'play-paneleiro',
      'play-planta',
      'play-torradeira'
    );

    $quadriImages = array(
      'quadri-cozinha',
      //'quadri-mulher',
      //'quadri-homem',
      'quadri-modulo1',
      'quadri-modulo2',
      'quadri-exaustor',
      'quadri-fogao',
      'quadri-panela1',
      'quadri-panela2',
      'quadri-facas',
      'quadri-taca1',
      'quadri-taca2',
      'quadri-fruteira',
      'quadri-geladeira',
      'quadri-jarra',
      'quadri-luminaria',
      'quadri-paneleiro',
      'quadri-planta',
      'quadri-aparelho'
    );

    $cityImages = array(
      'city-cozinha',
      //'city-modelo',
      'city-modulo1',
      'city-modulo2',
      'city-modulo3',
      'city-modulo4',
      'city-exaustor',
      'city-fogao',
      'city-panela',
      'city-tabua',
      'city-geladeira',
      'city-luminaria',
      'city-paneleiro',
      'city-planta',
      'city-garrafa1',
      'city-garrafa2'
    );
  }
?>  

<section class="step hero" id="hero" data-panel="hero">
  <a href="http://www.mooble.com/p/casamob" target="_blank" class="monte-a-sua">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-monte-a-sua.svg" alt="monte a sua">
  </a>
  
  <div class="slider" ><div class="slides-container">
    
    <!--<article class="page__content page__content--fullslider">-->
      <div class="slide hero__play" id="hero__play" data-stellar-offset-parent="true">
        <?php print_resp_images($playImages, $imagesDir); ?>
      </div>
      <div class="slide hero__quadri" id="hero__quadri" data-stellar-offset-parent="true">
        <?php print_resp_images($quadriImages, $imagesDir); ?>
      </div>
      <div class="slide hero__city" id="hero__city" data-stellar-offset-parent="true">
        <?php print_resp_images($cityImages, $imagesDir); ?>
      </div>
    <!--</article>-->
    
  </div></div><!--/.slider /.slided-container-->
</section>