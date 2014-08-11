<?php
/**
 * Content-single Template
 *
 * Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-container">

		<header class="post-header">
			<div class="post-date"><?php altitude_posted_on(); ?></div>
			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
			<div class="post-comments"><?php altitude_comment_meta(); ?></div>
			<div class="post-thumbnail"><?php the_post_thumbnail( 'altitude-post' ); ?></div>
		</header><!-- .post-header -->

		<div class="post-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'altitude' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .post-content -->

		<footer class="post-footer">
			<div class="xs-col-12">
				<div class="entry-meta row clear">
					<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'altitude' ) );
					$tags_list = get_the_tag_list( '', __( ', ', 'altitude' ) );
					$meta_class = ($tags_list) ? 'm-col-4' : 'xs-col-6';
					if( $categories_list && altitude_categorized_blog() ) :
						?>
						<div class="footer-meta post-category <?php echo $meta_class; ?>">
							<?php echo altitude_get_meta_image( 'category' ); ?>
							<div class="cat-links"><?php echo $categories_list; ?></div>
						</div>
					<?php endif; // End if categories ?>
					<?php
					/* translators: used between list items, there is a space after the comma */
					if( $tags_list ) :
						?>
						<div class="footer-meta post-tag <?php echo $meta_class; ?>">
							<?php echo altitude_get_meta_image( 'tag' ); ?>
							<div class="tags-links"><?php echo $tags_list; ?></div>
						</div>
					<?php endif; // End if $tags_list ?>
					<div class="footer-meta post-edit <?php echo $meta_class; ?>">
						<?php edit_post_link( __( 'Edit', 'altitude' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
				</div><!-- .entry-meta -->
			</div>
		</footer><!-- .post-footer -->

	</div><!-- article-container -->
</article><!-- #post-## -->
