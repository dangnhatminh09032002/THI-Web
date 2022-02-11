<?php
global $THIWebsite_options;

$THIWebsite_show_loading = $THIWebsite_options['THIWebsite_opt_loading_show'] ?? '1';

if(  $THIWebsite_show_loading == 1 ) :

    $THIWebsite_loading_url  = $THIWebsite_options['THIWebsite_opt_loading_image']['url'];
?>

    <div id="site-loadding" class="d-flex align-items-center justify-content-center">

        <?php  if( $THIWebsite_loading_url !='' ): ?>

            <img class="loading_img" src="<?php echo esc_url( $THIWebsite_loading_url ); ?>" alt="<?php esc_attr_e('loading...','THIWebsite') ?>"  >

        <?php else: ?>

            <img class="loading_img" src="<?php echo esc_url(get_theme_file_uri( '/assets/images/loading.gif' )); ?>" alt="<?php esc_attr_e('loading...','THIWebsite') ?>">

        <?php endif; ?>

    </div>

<?php endif; ?>