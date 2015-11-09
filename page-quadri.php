<?php get_header(); ?>

<!-- ********** -->
<!-- quadri -->
<!-- ********** -->
<section class="quadri hasDraggable" id="quadri">

  <a href="<?php echo esc_url( home_url( '/' ) ); ?>#cozinhas" class="btn btn--back">Cozinhas</a>

  <span class="directions">Clique e arraste</span>

  <span class="legal">Toda a imagens são ilustrativas. As cores podem sofrer alterações na aplicação real.</span>

  <div class="draggable-container">

      <div class="draggable">

        <div class="content">

          <?php
           $query = new WP_Query('pagename=quadri');
           if ( $query->have_posts() ) {
             while ( $query->have_posts() ) { $query->the_post();
          ?>

          <h2>
           <small class="white">Linha</small><!--
          --><spam class="lt-violet"><?php the_title(); ?></spam>
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

            <div class="feat-box box-cozinha1">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha1.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha1-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-tampo-preto">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/tampo-preto.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/tampo-preto-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-cozinha2">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha2.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha2-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-puxador-padua">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/puxador-padua.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/puxador-padua-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-tampo-madeirado-sal">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/tampo-madeirado-sal.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/tampo-madeirado-sal-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-cozinha3">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha3.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha3-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-cozinha4">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha4.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha4-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-puxador-loft">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/puxador-loft.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/puxador-loft-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-cozinha5">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha5.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha5-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>


            <div class="feat-box box-cozinha6">

              <a href="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha6.jpg"
                class="feat-thumb"
                data-featherlight="image">

                <img src="<?php bloginfo('template_url');?>/assets/img/quadri/cozinha6-thumb.jpg" alt="">

                <i class="feat-box__lupa"></i>
              </a>
            </div>

          </div><!-- /.features -->


          <!-- CORES -->
          <div class="part cores-quadri">

            <h2 class="lt-violet">
              Cores
            </h2>

            <div class="color-box branco-sal">
              <p class="color-label color-label--dk">
                Branco Sal <br>
                Ref. 1000
              </p>
            </div>

            <div class="color-box preto-jabuticaba">
              <p class="color-label">
                Preto Jabuticaba <br>
                Ref. 9000
              </p>
            </div>

            <div class="color-box prata-gelo">
              <p class="color-label">
                Prata Gelo <br>
                Ref. 2002
              </p>
            </div>

            <div class="color-box azul-anis">
              <p class="color-label">
                Azul Anis <br>
                Ref. 4000
              </p>
            </div>

            <div class="color-box bege-baunilha">
              <p class="color-label">
                Bege Baunilha <br>
                Ref. 3002
              </p>
            </div>

            <div class="color-box cinza-funghi">
              <p class="color-label">
                Cinza Funghi <br>
                Ref. 2000
              </p>
            </div>

            <div class="color-box verde-cha">
              <p class="color-label">
                Verde Chá <br>
                Ref. 5000
              </p>
            </div>

            <div class="color-box rosa-iogurte">
              <p class="color-label">
                Rosa Iogurte <br>
                Ref. 8002
              </p>
            </div>

            <div class="color-box madeirado-sal">
              <p class="color-label color-label--dk">
                Madeirado Sal <br>
                Ref. Ref. 1002
              </p>
            </div>

            <div class="color-box madeirado-canela">
              <p class="color-label">
                Madeirado Canela <br>
                Ref. 7000
              </p>
            </div>

            <div class="color-box madeirado-anis">
              <p class="color-label">
                Madeirado Anis <br>
                Ref. 4004
              </p>
            </div>

            <div class="color-box madeirado-baunilha">
              <p class="color-label">
                Madeirado Baunilha <br>
                Ref. 3004
              </p>
            </div>

            <div class="color-box madeirado-funghi">
              <p class="color-label">
                Madeirado Funghi <br>
                Ref. 2004
              </p>
            </div>

            <div class="color-box madeirado-paprica">
              <p class="color-label">
                Madeirado Páprica <br>
                Ref. 8010
              </p>
            </div>

          </div><!-- /.part /.cores-tampos -->


          <!-- MÓDULOS AÉREOS -->
          <div class="part modulos-aereos-quadri">

            <h2>
              <span class="lt-violet">Módulos</span>
              <span class="acqua">Aéreos</span>
            </h2>


            <!-- PRODUTOS -->
            <div class="prod-box prod__item1 v-400x600-1p">
              <h4 class="prod-title">Aéreo Vertical 400x600 1P - Ref. AE406011</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>400mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item2 v-600x600-1p">
              <h4 class="prod-title">Aéreo Vertical 600x600 1P AE606011</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>600mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item3 v-600x600-1p-vidro">
              <h4 class="prod-title">Aéreo Vert. 600x600 1P c/ vidro - Ref. AE606011</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>600mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item4 h-800x350-2p">
              <h4 class="prod-title">Aéreo Horizontal 800x350 2P - Ref. AH803521</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>800mm</dd>
                  <dt>Altura:</dt>
                    <dd>350mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item5 v-800x600-2p">
              <h4 class="prod-title">Aéreo Vertical 800x600 2P - Ref. AV806021</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>800mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item6 v-1200x600-2p">
              <h4 class="prod-title">Aéreo Vertical 1200x600 2P - Ref. AV126021</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>1200mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item7 v-1200x600-3p">
              <h4 class="prod-title">Aéreo Vertical 1200x600 3P - Ref. AV126031</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>1200mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item8 v-1200x600-3p-vidro">
              <h4 class="prod-title">Aéreo Vert. 1200x600 3P c/ vidro - Ref. AV126031</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>1200mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item9 v-1200x600-2p-vidro">
              <h4 class="prod-title">Aéreo Vert. 1200x600 2P c/ vidro - Ref. AV126021</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>1200mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item10 v-900x600-2p-canto">
              <h4 class="prod-title">Aéreo Vert. 900x600 2P Canto - Ref. AC906021</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>900mm</dd>
                  <dt>Altura:</dt>
                    <dd>600mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>300mm</dd>
                  <dt>Portas:</dt>
                    <dd>3</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


          </div><!-- /.part /.modulos-aereos-quadri -->


          <!-- GABINETES -->
          <div class="part modulos-gabinetes-quadri">

            <h2>
              <span class="lt-violet">Gabinetes</span>
            </h2>


            <!-- PRODUTOS -->
            <div class="prod-box prod__item1 gab-400x700-1p">
              <h4 class="prod-title">Gabinete 400x700 1P - Ref. GE407011</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>400mm</dd>
                  <dt>Altura:</dt>
                    <dd>700mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item2 gav-400x700-3g">
              <h4 class="prod-title">Gaveteiro 400x700 3G - Ref. GG407031</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>400mm</dd>
                  <dt>Altura:</dt>
                    <dd>700mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Gavetas:</dt>
                    <dd>3</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item3 gab-600x350-1g">
              <h4 class="prod-title">Gabinete 600x350 1G - Ref. GG603511</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>600mm</dd>
                  <dt>Altura:</dt>
                    <dd>350mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Gavetas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item4 gab-600x700-1p">
              <h4 class="prod-title">Gabinete 600x700 1P - Ref. GE607011</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>600mm</dd>
                  <dt>Altura:</dt>
                    <dd>700mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item5 gab-800x700-2p">
              <h4 class="prod-title">Gabinete 800x700 2P - Ref. GV807021</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>800mm</dd>
                  <dt>Altura:</dt>
                    <dd>700mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item6 gab-1200x350-1p">
              <h4 class="prod-title">Gabinete 1200x350 1P - Ref. GH123511</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>1200mm</dd>
                  <dt>Altura:</dt>
                    <dd>350mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item7 gab-1200x700-2p">
              <h4 class="prod-title">Gabinete 1200x700 2P - Ref. GV127021</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>1200mm</dd>
                  <dt>Altura:</dt>
                    <dd>700mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item8 gab-1200x700-2p-3g">
              <h4 class="prod-title">Gabinete 1200x700 2P3G - Ref. GM127051</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>1200mm</dd>
                  <dt>Altura:</dt>
                    <dd>700mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                  <dt class="fix">Gavetas:</dt>
                    <dd>3</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod__item9 gab-900x700-2p-canto">
              <h4 class="prod-title">Gabinete 900x700 2P Canto - Ref. GC907021</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>900mm</dd>
                  <dt>Altura:</dt>
                    <dd>700mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


          </div><!-- /.part /.modulos-gabinetes-quadri -->


          <!-- PANELEIROS -->
          <div class="part modulos-paneleiros-quadri">

            <h2>
              <span class="lt-violet">Paneleiros</span>
            </h2>


            <!-- PRODUTOS -->
            <div class="prod-box prod-box--side prod__item1 pan-600x1200-1p">
              <h4 class="prod-title">Paneleiro Profundo 600x1200 1P - Ref. PE601211</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>600mm</dd>
                  <dt>Altura:</dt>
                    <dd>1200mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod-box--side prod__item2 pan-600x1900-2p">
              <h4 class="prod-title">Paneleiro Profundo 600x1900 2P - Ref. PE601921</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>600mm</dd>
                  <dt>Altura:</dt>
                    <dd>1900mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <div class="prod-box prod-box--side prod__item3 torre-600x1900-2p-1pr">
              <h4 class="prod-title">Torre Quente 600x1900 2P1Prat. - Ref. TE601921</h4>

              <dl class="prod-data">
                <div class="col-left">
                  <dt>Largura:</dt>
                    <dd>600mm</dd>
                  <dt>Altura:</dt>
                    <dd>1900mm</dd>
                </div>

                <div class="col-right">
                  <dt>Profundidade:</dt>
                    <dd>500mm</dd>
                  <dt>Portas:</dt>
                    <dd>2</dd>
                  <dt>Pratileiras:</dt>
                    <dd>1</dd>
                </div>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


          </div><!-- /.part /.paneleiros-quadri -->


          <!-- PUXADORES -->
          <div class="part modulos-puxadores-quadri">

            <h2>
              <span class="lt-violet">Puxadores</span>
            </h2>


            <div class="prod-box prod__item2 padua">
              <h4 class="prod-title">Puxador Pádua - Ref. A2</h4>

              <dl class="prod-data">
                <dt>Largura:</dt>
                  <dd>192mm/256mm</dd>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


            <!-- PRODUTOS -->
            <div class="prod-box prod__item1 loft">
              <h4 class="prod-title">Puxador Loft (opcional) - Ref. A1</h4>

              <dl class="prod-data">
                <dt>Largura:</dt>
                  <dd>192mm/256mm</dd>
              </dl><!-- /.prod-data -->
            </div><!-- /.prod-box -->


          </div><!-- /.part /.puxadores-play -->

        </div><!-- /.content -->

      </div><!-- /.draggable -->

  </div><!-- /.draggable-container -->

  <a href="#voltar" class="draggable-reload"></a>

</section><!-- /#quadri -->


<?php get_footer(); ?>
