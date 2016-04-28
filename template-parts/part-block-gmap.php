<?php
/**
 * Display Google Map
 *
 * This block takes a Google Maps embed src and displays it on the front
 * page. 
 *
 * @package Inti
 * @subpackage blocks
 * @since 1.0.9
 */


// get the options
$show = get_inti_option('fpb_gmap_show', 'inti_customizer_options', 1);
$src = get_inti_option('fpb_gmap_source', 'inti_customizer_options');
 
if ($show) :
?>

	<section class="block gmap">	
		<iframe src="<?php echo $src; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>

<? endif; ?>