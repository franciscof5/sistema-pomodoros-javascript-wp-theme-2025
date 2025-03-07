<?php
/*Template Name: No-sidebar*/
?>
<?php get_header() ?>

<div class="content_nosidebar col-xs-12">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h2 class="pagetitle"><?php the_title(); ?></h2>

				<div class="post" id="post-<?php the_ID(); ?>">

					<div class="entry">

						<?php the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) ); ?>

						<?php wp_link_pages( array( 'before' => __( '<p><strong>Pages:</strong> ', 'buddypress' ), 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php edit_post_link( __( 'Edit this entry.', 'buddypress' ), '<p>', '</p>'); ?>

					</div>

				</div>

			<?php endwhile; endif; ?>

</div><!-- #content -->
	
<?php get_footer("condensed") ?>