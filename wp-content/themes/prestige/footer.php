<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */
?>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <!-- 電話番号追加 -->
        <div class="footer-tell">
          <div class="footer-tell-flex">
            <img class="footer-tell-logo" src="/wp-content/themes/prestige/img/logo.png" alt="prestige">
            <div class="footer-tell-txtbox">
              <p class="footer-tell-nam">
                <i class="fa fas fa-phone"></i>
                092-588-5656
              </p>
              <p>
                平日9:00〜19:00<span>日祝10:00〜18:00</span>
              </p>
              <p>
                定休日：火曜日（毎月の最終火曜日は通常営業）
              </p>
              <p>
                〒816-0931　福岡県大野城市筒井1-1-34<br class="sp">
                <a href="https://goo.gl/maps/HPXrBWbik4HKgWmo7" target="_blank">【googlemapを見る】</a>
              </p>
            </div>
          </div>
        </div>
        <!-- ----------- -->
        <?php
        $onepress_btt_disable = get_theme_mod('onepress_btt_disable');
        $onepress_social_footer_title = get_theme_mod('onepress_social_footer_title', esc_html__('Keep Updated', 'onepress'));

        $onepress_newsletter_disable = get_theme_mod('onepress_newsletter_disable', '1');
        $onepress_social_disable = get_theme_mod('onepress_social_disable', '1');
        $onepress_newsletter_title = get_theme_mod('onepress_newsletter_title', esc_html__('Join our Newsletter', 'onepress'));
        $onepress_newsletter_mailchimp = get_theme_mod('onepress_newsletter_mailchimp');

        if ( $onepress_newsletter_disable != '1' || $onepress_social_disable != '1' ) : ?>
            <div class="footer-connect">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <?php if ($onepress_newsletter_disable != '1') : ?>
                            <div class="col-sm-4">
                                <div class="footer-subscribe">
                                    <?php if ($onepress_newsletter_title != '') echo '<h5 class="follow-heading">' . $onepress_newsletter_title . '</h5>'; ?>
                                    <form novalidate="" target="_blank" class="" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" method="post"
                                          action="<?php if ($onepress_newsletter_mailchimp != '') echo $onepress_newsletter_mailchimp; ?>">
                                        <input type="text" placeholder="<?php esc_attr_e('Enter your e-mail address', 'onepress'); ?>" id="mce-EMAIL" class="subs_input" name="EMAIL" value="">
                                        <input type="submit" class="subs-button" value="<?php esc_attr_e('Subscribe', 'onepress'); ?>" name="subscribe">
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="<?php if ( $onepress_newsletter_disable == '1' ) {
                            echo 'col-sm-8';
                        } else {
                            echo 'col-sm-4';
                        } ?>">
                            <?php
                            if ($onepress_social_disable != '1') {
                                ?>
                                <div class="footer-social">
                                    <?php
                                    if ($onepress_social_footer_title != '') echo '<h5 class="follow-heading">' . $onepress_social_footer_title . '</h5>';

                                    $socials = onepress_get_social_profiles();
                                    /**
                                     * New Socials profiles
                                     *
                                     * @since 1.1.4
                                     * @change 1.2.1
                                     */
                                    echo '<div class="footer-social-icons">';
                                    if ( $socials ) {
                                        echo $socials;
                                    } else {
                                        /**
                                         * Deprecated
                                         * @since 1.1.4
                                         */
                                        $twitter = get_theme_mod('onepress_social_twitter');
                                        $facebook = get_theme_mod('onepress_social_facebook');
                                        $google = get_theme_mod('onepress_social_google');
                                        $instagram = get_theme_mod('onepress_social_instagram');
                                        $rss = get_theme_mod('onepress_social_rss');

                                        if ($twitter != '') echo '<a target="_blank" href="' . $twitter . '" title="Twitter"><i class="fa fa-twitter"></i></a>';
                                        if ($facebook != '') echo '<a target="_blank" href="' . $facebook . '" title="Facebook"><i class="fa fa-facebook"></i></a>';
                                        if ($google != '') echo '<a target="_blank" href="' . $google . '" title="Google Plus"><i class="fa fa-google-plus"></i></a>';
                                        if ($instagram != '') echo '<a target="_blank" href="' . $instagram . '" title="Instagram"><i class="fa fa-instagram"></i></a>';
                                        if ($rss != '') echo '<a target="_blank" href="' . $rss . '"><i class="fa fa-rss"></i></a>';
                                    }
                                    echo '</div>';
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="site-info">
            <div class="container">
                <?php if ($onepress_btt_disable != '1') : ?>
                    <div class="btt">
                        <a class="back-top-top" href="#page" title="<?php echo esc_html__('Back To Top', 'onepress') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
                    </div>
                <?php endif; ?>
                <?php
                /**
                 * hooked onepress_footer_site_info
                 * @see onepress_footer_site_info
                 */
                do_action('onepress_footer_site_info');
                ?>
            </div>
        </div>
        <!-- .site-info -->

    </footer><!-- #colophon -->
<?php
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div><!-- #page -->
<p id="page-top"><a href="#body"><img src="<?php bloginfo('template_url'); ?>/img/to_top.png" class=""></a></p>
<?php wp_footer(); ?>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAPa0NenmwJK4CcKNJ9DZrYo7mGZmKQBi8"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/audio.min.js"></script>
<script type="text/javascript" >
	  audiojs.events.ready(function() {
		var as = audiojs.createAll();
	  });
	google.maps.event.addDomListener(window, 'load', function(){
		  var latlng = new google.maps.LatLng(33.541191, 130.473643); //緯度・経度
		  var latlng2 = new google.maps.LatLng(33.543421, 130.471576); //緯度・経度
		  var myOptions = {
            center: latlng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
			mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }
		  };
		  var myOptions2 = {
            center: latlng2,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
			mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }
		  };
		  var icon = new google.maps.MarkerImage('https://prestige-co.com/wp-content/themes/prestige/img/map_logo.png',
			new google.maps.Size(45,48),/*アイコンサイズ設定*/
			new google.maps.Point(0,0)/*アイコン位置設定*/
		  );
		  /*取得スタイルの貼り付け*/
		  var styleOptions = [
		  {
			"stylers": [
			  { "saturation": -100 },
			  { "lightness": 22 }
			]
		  }
		  ];

		  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); //地図を表示
          var marker = new google.maps.Marker({
              map: map,
  			  icon: icon,
              position: latlng
          })
          var marker2 = new google.maps.Marker({
              map: map,
  			  icon: icon,
              position: latlng2
          })
		  var styledMap = new google.maps.StyledMapType(styleOptions,{name: "ハイエースプロショップ　プレステージ"});
		  map.mapTypes.set('sample', styledMap);
		  map.setMapTypeId('sample');
		   var infowin = new google.maps.InfoWindow({content:"プレステージ 本店"});
		   var infowin2 = new google.maps.InfoWindow({content:"プレステージ 山田店"});
		  // mouseoverイベントを取得するListenerを追加
		  google.maps.event.addListener(marker, 'mouseover', function(){
			  infowin.open(map, marker);
			});
		  google.maps.event.addListener(marker2, 'mouseover', function(){
			  infowin2.open(map, marker2);
			});
	
		  // mouseoutイベントを取得するListenerを追加
		  google.maps.event.addListener(marker, 'mouseout', function(){
			  infowin.close();
          });
		  google.maps.event.addListener(marker2, 'mouseout', function(){
			  infowin2.close();
          });
    });

	  // ACCORDION
	jQuery(function(){
		jQuery('.accordion .toggle').on('click', function(){
			jQuery(this).toggleClass('active').next().slideToggle(300);
		});
	});
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52339755-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
