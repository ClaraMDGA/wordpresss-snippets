<?php

$color = get_field('hover_color');


if($color) {

?>

	<style>
		
		[hover-color="<?php echo $color; ?>"] .hover-effect:hover {
			background: <?php echo $color; ?>;
		}
		
	</style>

<?php } ?>
