<?php
$term_obj_list = get_the_terms( $post->ID, 'product_cat' );
$terms_string = join(', ', wp_list_pluck($term_obj_list, 'slug'));

$args = array(
    'post_type'     => 'product',
  	'posts_per_page'=>5,
  	'operator'      => 'IN', //Or 'AND' or 'NOT IN'
  	'post__not_in'  => array($post->ID),
  	'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => array($terms_string)
        )
    )
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

	<h3 class="little-title-roxo">Related products</h3>

	

    <div class="box-reference-hp related-prods">
      <div class="hold-reference">
        <div class="txt-roxo-hp">Reference</div>
      </div>
      <div class="ct-div-block hold-description">
        <div class="ct-text-block txt-roxo-hp">Description</div>
      </div>
      <div class="ct-div-block hold-cas">
        <div class="ct-text-block txt-roxo-hp">CAS</div>
      </div>
    </div>
	
<div class="oxy-dynamic-list rep-products-home">
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  

	 <div class="item-prod-related">
          <div class="ct-div-block box-inf-hp">
            <div class="ct-div-block hold-reference">
              <div class="ct-code-block txt-med">
                <?php
                    global $product;
                    echo $product->get_sku();
                ?>      
              </div>
            </div>
            <div class="ct-div-block hold-description">
              <a class="ct-link" href="<?php the_permalink(); ?>" target="_self">
                <h2 class="ct-headline txt-med"><?php the_title(); ?></h2>
              </a>
            </div>
            <div class="ct-div-block hold-cas">
              <div class="ct-text-block txt-med">
                <?php if( get_field('ec_cod') ): ?>
                EC: <?php the_field('ec_cod'); ?>
                <?php endif; ?>
				<?php if( get_field('cas') ): ?>
                CAS: <?php the_field('cas'); ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="ct-div-block hold-arrow">
              <a class="ct-link-button link-prod-hp" href="<?php the_permalink(); ?>" target="_self">
              </a>
            </div>
      </div>
    </div>
    
   <?php endwhile; ?> 

  	</div>

	<?php wp_reset_postdata(); ?>

<?php else : // do nothing ?>
		
<?php endif; ?>
