<?php get_header(); ?>

<section class="step search-result" id="search-result">
  <div class="page-container">
    <article class="page__content">
      <div class="info">
        <h2>
          <span class="lt-violet"><?php _e(
          "<!--:en-->Search<!--:--> 
          
          <!--:pb-->Resultados<!--:-->
          
          <!--:es-->resultados<!--:-->
          
          <!--:fr-->résultats<!--:-->" ); ?></span>
	      <span class="white"><?php _e(
          "<!--:en-->results<!--:--> 
          
          <!--:pb-->da<!--:-->
          
          <!--:es-->de la<!--:-->
          
          <!--:fr-->de la<!--:-->" ); ?></span>
	      <span class="orange"><?php _e(
          "<!--:en-->...<!--:--> 
          
          <!--:pb-->busca<!--:-->
          
          <!--:es-->búsqueda<!--:-->
          
          <!--:fr-->recherche<!--:-->" ); ?></span>
        </h2>
        <div class="intro">
        	<h3><?php _e(
          "<!--:en-->You searched for:<!--:--> 
          
          <!--:pb-->Você pesquisou por:<!--:-->
          
          <!--:es-->Ha buscado por:<!--:-->
          
          <!--:fr-->Vous avez cherché:<!--:-->" ); ?> </h3>
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
				<h3><?php _e(
          "<!--:en-->Nothing was found.<!--:--> 
          
          <!--:pb-->Nada foi encontrado.<!--:-->
          
          <!--:es-->No se encontró nada.<!--:-->
          
          <!--:fr-->Rien n'a été trouvé.<!--:-->" ); ?></h3>
				<p><?php get_search_form(); ?></p>
			</li>
		<?php endif; ?>
		</ul>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>
