<div class="footer-panel">
	<div class="logo pull-right"><a href="#"><img src="<?php bloginfo('template_directory' ); ?>/images/RADIANCE_NEW-LOGO-transparent_small.png" alt="Radiance advanced skin & body care"></a></div>
	<div class="pull-left social-holder">
		<span class="social-text">FOLLOW US</span>
		<ul class="social-list list-unstyled">
			<?php 

				$facebook = get_field('facebook', 'options');
				$twitter = get_field('twitter', 'options');
				$instagram = get_field('instagram', 'options');
				$pinterest = get_field('pinterest', 'options');

				if (!empty( $facebook )) :

					echo '<li><a href="'.$facebook.'" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>';

				endif;

				if (!empty( $twitter )) :

					echo '<li><a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';

				endif;

				if (!empty( $instagram )) :

					echo '<li><a href="'.$instagram.'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>';

				endif;

				if (!empty( $pinterest )) :

					echo '<li><a href="'.$pinterest.'" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>';

				endif;

			 ?>
			
		</ul>
	</div>
</div>