<?php
/**
 * Temporary Splash Page
 *
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=432145260234288";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="splash-wrap">
	
	<h1 class="multitoad-logo">MultiToad</h1>
	<div class="blue-toad"></div>
	<div class="green-toad"></div>
	
	<p class="slogan"><strong>All things multiplayer... with a spin.</strong> Coming soon. For now, you can:</p>
	
	<a class="visit-forums" href="http://multitoad.com/?post_type=forum">Visit our Forums</a>
	<p class="or">Or</p>
	<a class="check-twitch" href="http://www.twitch.tv/multitoad">Check us out on Twitch</a>
	
	<div class="twitch-container">
		<div class="twitch-stream">
			<?php echo do_shortcode('[plumwd_twitch_stream]'); ?>
		</div>
		
		
	</div>
	
	<a class="tw-icon hidden" href="https://twitter.com/MultiToad" title="Twitter">Twitter</a>
	<a class="fb-icon hidden" href="#" title="Facebook">Facebook</a>
	<a class="yt-icon hidden" href="#" title="Youtube">Youtube</a>
	
	<div class="fb">
		<div class="fb-like" data-href="https://www.facebook.com/multitoad" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="dark" data-layout="box_count" data-action="like" data-show-faces="true" data-send="false"></div>
	</div>
	
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/TweenMax.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!--
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    -->

</body>
</html>