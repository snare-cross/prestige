<?php
/**
 *Template Name: FAQ
 */


get_header(); ?>

	<div id="content" class="site-content">

		<div class="page-header">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>

        <?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
				<?php the_content(); ?>
	            <div class="accordion">
					<?php /* ‚æ‚­‚ ‚éŽ¿–â */
                        $postlist  = get_posts('post_type=post_faq&order=asc&orderby=ID&numberposts=-1');
                        foreach ( $postlist as $post ){
                        setup_postdata( $post );
                    ?>
                        <ul>
                            <li>
                                <a class="toggle" href="javascript:void(0);"><?php echo get_field("q", $post->ID); ?></a>
                                <ul>
                                    <li><?php echo get_field("a", $post->ID); ?></li>
                                </ul>
                            </li>
                        </ul>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
