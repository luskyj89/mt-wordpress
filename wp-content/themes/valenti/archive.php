<?php 
            get_header(); 
            $cb_global_color = ot_get_option('cb_base_color', '#eb9812'); 
            $cb_theme_style = ot_get_option('cb_theme_style', 'cb_boxed');
?>
 
<div class="cb-cat-header<?php if ($cb_theme_style == 'cb_boxed') echo ' wrap'; ?>" style="border-bottom-color:<?php echo $cb_global_color; ?>;">
     <?php if (is_day()) { ?>
            <h1 id="cb-cat-title">
                <span><?php _e("Daily Archives", "cubell"); ?> <i class="icon-long-arrow-right"></i></span> <?php the_time(get_option('date_format')); ?>
            </h1>

        <?php } elseif (is_month()) { ?>
            <h1 id="cb-cat-title">
                <span><?php _e("Monthly Archives", "cubell"); ?> <i class="icon-long-arrow-right"></i></span> <?php the_time(get_option('date_format')); ?>
            </h1>
    
        <?php } elseif (is_year()) { ?>
            <h1 id="cb-cat-title">
                <span><?php _e("Yearly Archives", "cubell"); ?> <i class="icon-long-arrow-right"></i></span> <?php the_time(get_option('date_format')); ?>
            </h1>
        <?php } ?>
</div>
    
<div id="cb-content" class="wrap clearfix">
    
    
    <div id="main" class="clearfix" role="main">

	   	<?php if (have_posts()) { 
	
							get_template_part('cat', 'style-a');
			 } ?>

	</div> <!-- end #main -->

	<?php get_sidebar(); ?>

</div> <!-- end #cb-content -->

<?php get_footer(); ?>