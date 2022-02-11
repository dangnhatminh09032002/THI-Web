<?php
global $THIWebsite_options;

$THIWebsite_opt_single_post_share = $THIWebsite_options['THIWebsite_opt_single_post_share'] ?? true;
$THIWebsite_opt_single_related_show = $THIWebsite_options['THIWebsite_opt_single_related_show'] ?? true;
$type_image = rwmb_meta( 'THIWebsite_meta_box_post_select_image' );
?>

<div id="post-<?php the_ID() ?>" <?php post_class( 'site-post-single-item' ); ?>>
    <?php
    if ( $type_image == 'featured_image' ) :
        get_template_part( 'template-parts/post/content', 'image' );
    else:
        get_template_part( 'template-parts/post/content', 'gallery' );
    endif;
     ?>

    <div class="site-post-content">
        <h2 class="site-post-title">
            <?php the_title(); ?>
        </h2>

        <?php THIWebsite_post_meta(); ?>

        <div class="site-post-excerpt">
            <?php
            the_content();

            THIWebsite_link_page();
            ?>
        </div>

        <div class="site-post-cat-tag">

            <?php if( get_the_category() != false ): ?>

                <p class="site-post-category">
                    <?php
                    esc_html_e('Category: ','THIWebsite');
                    the_category( ' ' );
                    ?>
                </p>

            <?php

            endif;

            if( get_the_tags() != false ):

            ?>

                <p class="site-post-tag">
                    <?php
                    esc_html_e( 'Tag: ','THIWebsite' );
                    the_tags('',' ');
                    ?>
                </p>

            <?php endif; ?>

        </div>
    </div>

    <?php

    if ( $THIWebsite_opt_single_post_share ) :
        THIWebsite_post_share();
    endif;

    ?>
</div>

<?php
THIWebsite_comment_form();

if ( $THIWebsite_opt_single_related_show ) :
    get_template_part( 'template-parts/post/inc','related-post' );
endif;





