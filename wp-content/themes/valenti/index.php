<?php 
    get_header(); 
    $cb_full_feature = ot_get_option( 'cb_hp_gridslider', 'cb_full_off' ); 
    $cb_feature_post  = true;
    $cb_blog_style = ot_get_option( 'cb_blog_style', 'style-a' );
    $cb_full_feature_cats = ot_get_option( 'cb_gridslider_category', '' );
    if ( $cb_blog_style == 'style-c' ) {
        $cb_blog_width = 'cb-full-width'; 
    } else {
        $cb_blog_width = 'cb-standard'; 
    }
?>

<div id="cb-content" class="wrap clearfix">
    
    <div id="stream-showcase">
    	<object type="application/x-shockwave-flash" height="378" width="620" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=multitoad" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=multitoad&auto_play=true&start_volume=25" /></object><a href="http://www.twitch.tv/multitoad" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px;text-decoration:underline; text-align:center;">Watch live video from MultiToad on www.twitch.tv</a>
    	
    	<h2 class="streaming-header">MultiToad Is Live</h2>
    	<p class="streaming-cta">We're streaming! Join the fun and don't forget to <a href="http://www.twitch.tv/multitoad" target="_blank">follow us</a> and <a href="http://multitoad.com/?post_type=forum">become a part of the MultiToad community.</a></p>
    	
    </div>
    
    <?php if ($cb_full_feature != 'cb_full_off') {
        
                    $cb_flipped = $cb_title = $cb_module_style = NULL;
                    $cb_section = 'a';
                    if ( $cb_full_feature_cats == NULL ) {
                         $cb_full_feature_cats = get_all_category_ids(); 
                    }
                    $cb_cat_id = implode(",", $cb_full_feature_cats);
                    include( locate_template( 'library/modules/cb-'.$cb_full_feature.'.php' ) );
     } ?>  
    
    <!--
    <div id="streaming-network">
    	<span class="streaming-headline">Streaming Network:</h4><a href="http://www.twitch.tv/fressure" target="_blank"><img src="http://static-cdn.jtvnw.net/jtv_user_pictures/fressure-profile_image-47adcb09f78cba87-300x300.png" width="50" height="50" alt="Fressure" />Fressure</a><a href="http://www.twitch.tv/masqLIVE" target="_blank"><img src="http://static-cdn.jtvnw.net/jtv_user_pictures/masqlive-profile_image-5c71e76b7585e2fb-300x300.png" width="50" height="50" alt="masq" />masq</a><a href="http://www.twitch.tv/princesspwnies" target="_blank"><img src="http://static-cdn.jtvnw.net/jtv_user_pictures/princesspwnies-profile_image-b8d87f87bf71763d-300x300.png" width="50" height="50" alt="PrincessPwnies" />PrincessPwnies</a><a href="http://www.twitch.tv/phantomshadowz" target="_blank"><img src="http://static-cdn.jtvnw.net/jtv_user_pictures/phantomshadowz-profile_image-af9c1b6598f13641-300x300.jpeg" width="50" height="50" alt="PhantomShadowz" />PhantomShadowz</a><a href="http://www.twitch.tv/wegamestream" target="_blank"><img src="http://static-cdn.jtvnw.net/jtv_user_pictures/wegamestream-profile_image-ccec90ee91894a0c-300x300.jpeg" width="50" height="50" alt="WeGame" />We|Game</a> <a class="apply" href="http://multitoad.com/forums/topic/apply-here-to-join-the-multitoad-network/">Apply</a>
    </div> -->
        
    <div id="main" class="<?php echo $cb_blog_width; ?> clearfix" role="main">
      
      <?php get_template_part('cat', $cb_blog_style); ?>

    </div> <!-- end #main -->

    <?php if ( $cb_blog_style != 'style-c' ) {
                get_sidebar(); 
          } 
    ?>
    
</div> <!-- end #cb-content -->
    
<?php get_footer(); ?>