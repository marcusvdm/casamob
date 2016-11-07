<?php get_header(); ?>

<?php
  $query = new WP_Query('pagename=suporte');
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { $query->the_post();
    
     $slug = basename(get_permalink());
?>

<section class="step <?php echo $slug; ?>" id="<?php echo $slug; ?>" 
  data-panel="<?php echo $slug; ?>"
>
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <span class="lt-purple"><?php _e(
          "<!--:en-->SUPPORT<!--:--> 
          
          <!--:pb-->Suporte<!--:-->
          
          <!--:es-->SOPORTE<!--:-->
          
          <!--:fr-->SUPPORT <!--:-->"
          ); ?></span>
          <!--<?php the_title(); ?> (isso pertence ao titulo originalmente, foi tirado para inserir traducao)-->
        </h2>
        <!--<div class="intro"><?php // the_content();?></div>-->
        <?php }} wp_reset_postdata(); ?>
      </div>
      <div class="content content--special">
        <ul class="accordion">
          <?php
            $query = new WP_Query('pagename=suporte/dicas');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) { $query->the_post();
          ?>
          <li>
            <a href="#dicas" class="title dicas"><?php the_title(); ?></a>
            <ul>
              <li>
                <div class="scrollpane"><?php the_content(); ?></div>
              </li>
            </ul>
          </li>
          <?php
              }
            }
            wp_reset_postdata();
          ?>
    
          <?php
            $query = new WP_Query('pagename=suporte/montagem');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) { $query->the_post();
          ?>
          <li>
            <a href="#montagem" class="title montagem"><?php the_title(); ?></a>
            <ul>
              <li>
                <div class="scrollpane"><?php the_content(); ?></div>
              </li>
            </ul>
          </li>
          <?php
              }
            }
            wp_reset_postdata();
          ?>
    
          <?php
            $query = new WP_Query('pagename=suporte/assistencia');
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) { $query->the_post();
          ?>
          <li>
            <a href="#assistencia" class="title assistencia"><?php the_title(); ?></a>
            <ul>
              <li>
                <div class="scrollpane"><?php the_content(); ?></div>
              </li>
            </ul>
          </li>
          <?php
              }
            }
            wp_reset_postdata();
          ?>
        </ul>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>