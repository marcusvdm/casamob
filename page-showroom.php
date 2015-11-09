<?php get_header(); ?>

<section class="scene quem" id="quem">

  <?php
    $query = new WP_Query('pagename=showroom');
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) { $query->the_post();
  ?>

    <div class="content header-padding">
      <h2>
        <span class="red">Showroom</span>
      </h2>

      <div class="intro" >
        <?php the_content();?>
      </div>
    </div>

  <?php
      }
    }
    wp_reset_postdata();
  ?>

  </div><!-- /.content -->
</section><!-- /#quem -->


<?php get_footer(); ?>
