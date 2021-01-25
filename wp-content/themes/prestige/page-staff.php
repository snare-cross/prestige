<?php
/**
 *Template Name: staff
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
				<?php /* スタッフ紹介 */
					$postlist  = get_posts('post_type=member&order=asc&orderby=ID');
					foreach ( $postlist as $post ){
					setup_postdata( $post );
				?>
                	<div class="staff_box clear">
                        <img src="<?php echo get_field("img", $post->ID); ?>" />
                        <div class="staff_right_box">
                            <p class="division"><?php echo get_field("division", $post->ID); ?>
                            <span class="staff_name"><?php echo get_field("staff_name", $post->ID); ?></span></p>
                            <p class="staff_text"><?php echo get_field("staff_text", $post->ID); ?></p>
                        </div>
                    </div>
                    <hr />
				<?php
					}
					wp_reset_postdata();
                ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
