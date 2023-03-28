<?php
function check_related_posts_qty() {
	
	$current_post_ID = get_the_ID();	
	if($current_post_ID) {
		$term_obj_list = get_the_terms( $current_post_ID, 'category' );
		$terms_string = join( ', ', wp_list_pluck($term_obj_list, 'slug') );
		$relatedPosts = array(
			'post_type'     => 'post',
			'posts_per_page'=>4,
			'post__not_in'  => array($current_post_ID),
			'fields' => 'ids',
			'now_found_rows' => 1,
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => array($terms_string),
					'operator' => 'IN',
				)
			)
		);

		$QTYquery = new WP_Query( $relatedPosts );

		//get quantity of posts in the query of related content
		$count = $QTYquery->found_posts; 
		return $count;
	}
}
?>
