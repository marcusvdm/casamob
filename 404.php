<?php get_header(); ?>

	<article class="header-padding">
		<h2 class=page404>
      <span class="lt-violet" "page404">404</span>
      <span class="orange"><?php _e(
          "<!--:en-->Page not found<!--:--> 
          
          <!--:pb-->Página não encontrada<!--:-->
          
          <!--:es-->Página no encontrada<!--:-->
          
          <!--:fr-->Page non trouvée <!--:-->"
          ); ?>d</span>
    </h2>

		<h4><?php _e(
          "<!--:en-->The page you requested was not found.<!--:--> 
          
          <!--:pb-->A página que você procura não foi encontrada.<!--:-->
          
          <!--:es-->La página solicitada no fue encontrada.<!--:-->
          
          <!--:fr-->La page demandée n'a pas été trouvée. <!--:-->"
          ); ?></h4>
		<?php // get_search_form(); ?>
	</article>

<?php get_footer(); ?>
