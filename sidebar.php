<?php
/* sidebar.php */
$context = array();

$context['sidebar_top_content'] = get_field('sidebar_top_cta_content', 'options');
$context['sidebar_top_img'] = get_field('sidebar_top_cta_img', 'options');
$context['sidebar_top_cta_link'] = get_field('sidebar_top_cta_link', 'options');
$context['sidebar_middle_content'] = get_field('middle_cta_content', 'options');
$context['sidebar_middle_img'] = get_field('middle_cta_background_image', 'options');
$context['sidebar_middle_cta_link'] = get_field('sidebar_middle_cta_link', 'options');
$context['sidebar_bottom_content'] = get_field('bottom_cta_content', 'options');
$context['sidebar_bottom_img'] = get_field('bottom_cta_background_image', 'options');
$context['sidebar_bottom_cta_link'] = get_field('sidebar_bottom_cta_link', 'options');
Timber::render('sidebar.twig', $context);

?>