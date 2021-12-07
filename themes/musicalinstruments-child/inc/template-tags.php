<?php
/**
 * Loading custom theme template tags
 */

function display_custom_wp_query(){

	//!Adding Single Custom Wp_Query
	$args = array(
    	'post_type' => 'post',
    	'post_status'   => 'publish',
    	'post_per_page'  => '3',
	);

	$custom_query = new WP_Query( $args );

	if($custom_query->have_post()){
        ?>
        <div class="post-query">
            <div class="grid-x grid-margin-x grix-margin-y align-center">
                <?php
                while($custom_query->the_post()){
                    $custom_query->the_post();
                ?>
                <div class ="cell medium-6 large-4">
                    <?php
                    the_post_thumbnail();
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
                    <?php
			        the_excerpt(); ?>
                </div>
                <?php
                }
                wp_reset_postdata(); 
                ?>

            </div>
        </div>
        <?php
	}
}
