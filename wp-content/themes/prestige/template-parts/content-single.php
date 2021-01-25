<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php onepress_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'onepress' ),
				'after'  => '</div>',
			) );
		?>
            <div class="paging">
                <div class="next"><?php next_post_link( '%link', '<i class="fa fa-angle-left"></i><span>新しい記事</span>' , FALSE); ?></div>
                <div class="prev"><?php previous_post_link( '%link', '<span>古い記事</span><i class="fa fa-angle-right"></i>' , FALSE); ?></div>
            </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php onepress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

