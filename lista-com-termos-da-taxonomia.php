<?php
	$terms = get_terms( 'categoria', array(
		'orderby'    => 'title',
		'hide_empty' => 1,
	) );

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
    <ul class="list-categoria">
		<?php foreach ( $terms as $term ) { ?>
			<li class="list-categoria-item">
				<a class="list-categoria-link" href="<?php echo esc_url( get_term_link( $term ) ) ?>">
					<?php echo $term->name; ?>
				</a>
			</li>
		<?php } ?>
    </ul>
<?php } ?>
