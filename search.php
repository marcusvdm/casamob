<?php get_header(); ?>

<section class="step search-result" id="search-result">
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <span class="lt-violet">Resultados</span>
	      <span class="white">da</span>
	      <span class="orange">busca</span>
        </h2>
        <div class="intro">
        	<h3>Você pesquisou por: </h3>
        	<p><?php echo get_search_query(); ?></p>
        </div>
      </div>
      
      <div class="content content--special results-list">
      	<ul>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li>
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
			</li>
		<?php endwhile; ?>

		<?php else : ?>
			<li>
				<h3>Nada foi encontrado.</h3>
				<p><?php get_search_form(); ?></p>
			</li>
		<?php endif; ?>
		</ul>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>
