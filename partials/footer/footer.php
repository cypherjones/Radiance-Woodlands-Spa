<?php 
	
	$footer_bkg_img = get_field('trust_smbl_bkg_img', 'options');
	$address = get_field('address', 'options' );
	$phone = get_field('phone', 'options');

 ?>
<footer id="footer" style="background-image:url('<?php echo $footer_bkg_img['url']; ?>">
	<div class="container">
	<?php 

		if ( have_rows('symbols', 'options') ) :
			echo '<ul class="sponsors-list pull-left list-unstyled">';
			while ( have_rows('symbols', 'options') ) :
				the_row();

				$symbol = get_sub_field('symbol');

				echo '<li>
								<a href="#"><img src="'.$symbol['url'].'" alt="American Heart Association"></a>
							</li>';

				endwhile;
				echo '</ul>';
			endif;
		 ?>
		<div class="contact-info pull-right">
			<address class="pull-left"><?php echo $address; ?></address>
			<a href="tel:<?php echo $phone; ?>" class="phone pull-left"><?php echo $phone; ?></a>
		</div>
	</div>
</footer>