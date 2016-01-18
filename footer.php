		<!-- </main> -->


    <footer class="footer" role="contentinfo">
        <?php if (is_home()) { ?>
        <buttom class="btn-step-nav" data-top-step-id="#cover"></buttom>
        <?php } ?>
    </footer>

    <?php
        if (!wpmd_is_device()) {
          echo '<script src="'.get_template_directory_uri().'/assets/js/deskonly.js"></script>';
        }
    ?>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        window._gaq = [['_setAccount','UA-57879243-1'],['_trackPageview'],['_trackPageLoadTime']];
        Modernizr.load({
            load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
        });
    </script>

		<?php wp_footer(); ?>
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/936101417/?value=0&amp;guid=ON&amp;script=0"/>
	</body>
</html>
