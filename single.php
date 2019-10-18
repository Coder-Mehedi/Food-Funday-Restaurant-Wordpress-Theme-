

<?php if( have_rows('gallery_photo', 'option') ): ?>
    <?php while( have_rows('gallery_photo', 'option') ): the_row(); ?>
    	<?php the_sub_field('images'); ?>
    <?php endwhile ?>
<?php endif ?>

<?php 

$args = array('post_type' => 'team_member', 'posts_per_page' => 3);
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php 
	        if( have_rows('members') ):

			     // loop through the rows of data
			    while ( have_rows('members') ) : the_row();

			        if( get_row_layout() == 'Member' ):

			        	the_sub_field('name');

			        endif;

			    endwhile;

			else :

			    echo 'nothing found';

			endif;

         ?>
    <?php endwhile; ?>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>