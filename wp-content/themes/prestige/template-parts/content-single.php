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
    
    <!-- 電話番号、お問い合わせフォーム -->
    <div class="blog-contact">
      <p class="blog-contact-txt1">
        ハイエースに関するお困りごと、福岡の専門店プレステージに<br class="sp">お気軽にご相談ください
      </p>
      <div class="contact-flex">
        <a class="contact-tell" href="tel:092-588-5656">
          <i class="fa fas fa-phone"></i>
          092-588-5656
        </a>
        <a class="contact-form" href="/contact">
          <i class="fa fas fa-envelope"></i>
          フォームでの無料相談
        </a>
      </div>
      <div class="contact-flex-sp">
        <p class="blog-contact-txt2">
          平日9:00〜19:00
        </p>
        <p class="blog-contact-txt2">
          日祝10:00〜18:00
        </p>
        <p class="blog-contact-txt3">
          定休日：火曜日（毎月の最終火曜日は通常営業）
        </p>
      </div>
    </div>
    <!-- ============================= -->
            <div class="paging">
                <div class="next"><?php next_post_link( '%link', '<i class="fa fa-angle-left"></i><span>新しい記事</span>' , FALSE); ?></div>
                <div class="prev"><?php previous_post_link( '%link', '<span>古い記事</span><i class="fa fa-angle-right"></i>' , FALSE); ?></div>
            </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php onepress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

