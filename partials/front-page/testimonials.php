<?php 
	$quote_bkg = get_field('testimonials_bkg_img', 'options');
	$quote = get_field('quote', 'options');

 ?>
<section class="description-block" style="background-image:url('<?php echo $quote_bkg['url'] ?>');">
  <div class="container">
    <div class="owl-carousel">
    	<?php 

    		if (have_rows('testimony_repeater','options')) : 
    			while (have_rows('testimony_repeater', 'options')) : 
    				the_row();

    				$quote = get_sub_field('quote');

    				echo '<div class="">
						    		<blockquote>' . 
						    			$quote .
						    		'</blockquote>
						    	</div>';

    			endwhile;
    		endif;
    	?>
    </div>
  </div>
</section>