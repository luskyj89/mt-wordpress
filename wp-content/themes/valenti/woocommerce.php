<?php 
        get_header(); 
        $cb_page_id = get_the_ID();
        $cb_theme_style = ot_get_option('cb_theme_style', 'cb_boxed');
        $cb_page_base_color = get_post_meta($cb_page_id , 'cb_overall_color_post', true );
        if ( ( $cb_page_base_color == '#' ) || ( $cb_page_base_color == NULL ) ) {
            $cb_page_base_color = ot_get_option('cb_base_color', '#eb9812'); 
        }
?>
        <div class="cb-cat-header<?php if ( $cb_theme_style == 'cb_boxed' ) { echo ' wrap'; } ?>" style="border-bottom-color:<?php echo $cb_page_base_color; ?>;">
            
                <h1 id="cb-cat-title" ><?php echo the_title(); ?></h1>
                
        </div>
        
                        
		<div id="cb-content" class="wrap clearfix">
		    
				<div id="main" class="entry-content clearfix" role="main">

					<?php woocommerce_content(); ?>

				</div> <!-- end #main -->

				<?php get_sidebar(); ?>

		</div> <!-- end #cb-content -->

<?php get_footer(); ?>