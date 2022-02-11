<?php
get_header();

global $THIWebsite_options;

$THIWebsite_opt_single_post_sidebar = $THIWebsite_options['THIWebsite_opt_single_post_sidebar'] ?? 'right';

$THIWebsite_class_col_content = THIWebsite_col_use_sidebar( $THIWebsite_opt_single_post_sidebar, 'sidebar-main' );

get_template_part( 'template-parts/breadcrumbs/inc', 'breadcrumbs' );
?>

<div class="site-container site-single">
    <div class="container">
        <div class="row">
            <div class="<?php echo esc_attr( $THIWebsite_class_col_content ); ?>">

                <?php
                if ( have_posts() ) : while (have_posts()) : the_post();

                    get_template_part( 'template-parts/post/content','single' );

                    endwhile;
                endif;
                ?>

            </div>

            <?php
            if ( $THIWebsite_opt_single_post_sidebar !== 'hide' ) :
	            get_sidebar();
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

