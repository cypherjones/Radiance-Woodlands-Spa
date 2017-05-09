 <div class="footer-holder">
		<aside class="footer-block">
			<div class="container">
				<?php 

					get_template_part('partials/footer/social' ); 

					get_template_part('partials/footer/nav' ); 

					?>
			</div>
		</aside>
		<?php get_template_part('partials/footer/footer' ); ?>
	</div>
    <script src="<?php bloginfo('template_directory' ); ?>/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <?php wp_footer(); ?>
  </body>
</html>