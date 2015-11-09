<!-- ********** -->
<!-- ACESSÓRIOS -->
<!-- ********** -->
<section class="scene acessorios hasDraggable" id="acessorios">

  <span class="directions">Clique e arraste</span>

  <small class="legal">Toda a imagens são ilustrativas. As cores podem sofrer alterações na aplicação real. | * Consulte viabilidade de aplicação no módulos e linhas e disponibilidade de estoque.</small>

  <div class="draggable-container">

      <div class="draggable">

        <div class="content">

          <?php
            $query = new WP_Query('pagename=acessorios');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) { $query->the_post();
          ?>

          <h2 class="acqua" style="letter-spacing: .05em">
            <?php the_title(); ?><small class="white" style="font-size: 25px;position: relative;top: -30px;">*</small>
          </h2>

          <div class="grid-box intro-box">
            <div class="intro"><?php the_content();?></div>
          </div>

          <?php
              }
            }
            wp_reset_postdata();
          ?>

          <div class="features">

            <!-- tampos -->
            <div class="feat-box linha3 width4 height3 box-tampos">
              <?php
                $query = new WP_Query('pagename=acessorios/tampos');
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) { $query->the_post();
              ?>

              <h3 class="feat-title">
                Opções de tampos
                e pia
              </h3>

              <div class="grid-box linha2 coluna2">
                <div class="feat-text"><?php the_content();?></div>
              </div>

              <a href="<?php bloginfo('template_url');?>/assets/img/acessorios/tampos.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <?php echo get_the_post_thumbnail($page->ID, 'full'); ?>

                <i class="feat-box__lupa"></i>
              </a>

              <?php } } wp_reset_postdata(); ?>
            </div>


            <!-- rodape -->
            <div class="feat-box linha1 width3 height3 box-rodape">
              <?php
                $query = new WP_Query('pagename=acessorios/rodape');
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) { $query->the_post();
              ?>

              <h3 class="feat-title">
                Rodapé
                Inteligente
              </h3>

              <div class="grid-box linha2 coluna2">
                <div class="feat-text"><?php the_content();?></div>
              </div>

              <a href="<?php bloginfo('template_url');?>/assets/img/acessorios/rodape.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <?php echo get_the_post_thumbnail($page->ID, 'full'); ?>

                <i class="feat-box__lupa"></i>
              </a>

              <?php } } wp_reset_postdata(); ?>
            </div>


            <!-- nichos -->
            <div class="feat-box linha4 width5 height2 box-nichos">
              <?php
                $query = new WP_Query('pagename=acessorios/nichos');
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) { $query->the_post();
              ?>

              <h3 class="feat-title feat-title--lt">
                Nichos <br>
                Multifunção
              </h3>

              <div class="grid-box linha2 coluna2">
                <div class="feat-text"><?php the_content();?></div>
              </div>

              <a href="<?php bloginfo('template_url');?>/assets/img/acessorios/nichos.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <?php echo get_the_post_thumbnail($page->ID, 'full'); ?>

                <i class="feat-box__lupa"></i>
              </a>

              <?php } } wp_reset_postdata(); ?>
            </div>


            <!-- base -->
            <div class="feat-box linha1 width3 height3 box-base">
              <?php
                $query = new WP_Query('pagename=acessorios/base');
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) { $query->the_post();
              ?>

              <h3 class="feat-title">
                base
                invisível
              </h3>

              <div class="grid-box linha2 coluna2">
                <div class="feat-text"><?php the_content();?></div>
              </div>

              <a href="<?php bloginfo('template_url');?>/assets/img/acessorios/base.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <?php echo get_the_post_thumbnail($page->ID, 'full'); ?>

                <i class="feat-box__lupa"></i>
              </a>

              <?php } } wp_reset_postdata(); ?>
            </div>
          </div><!-- /.features -->

        </div><!-- /.content -->

      </div><!-- /.draggable -->

  </div><!-- /.draggable-container -->

  <a href="#voltar" class="draggable-reload"></a>

  <a href="#cozinhas" class="nextscene"></a>

</section><!-- /#acessorios -->
