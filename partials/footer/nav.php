<nav class="footer-nav">
	<ul class="list-unstyled">
	<?php 

		if (have_rows('menus', 'options')) :

			while ( have_rows('menus', 'options')) :

				the_row();

			$title = get_sub_field('title');
			$title_url = get_sub_field('title_link');

			echo '<li><a href="'.$title_url.'">'.$title.'</a>';

			if ( have_rows('menu_items') ) :

				echo '<ul>';

				while ( have_rows('menu_items') ) :
					the_row();

					$menu_title = get_sub_field('menu_item_title');
					$menu_link  = get_sub_field('menu_item_link');

					echo '<li><a href="'.$menu_link.'">'.$menu_title.'</a></li>';

					// close second repeater
					endwhile;

					echo '</ul>';
				endif;
				//close first repeater
				echo '</li>';
				endwhile;
				// echo '</li>';
			endif;

		 ?>
	</ul>
</nav>