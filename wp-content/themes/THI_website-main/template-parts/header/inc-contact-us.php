<?php
global $THIWebsite_options;

$contact_us_show_hide = $THIWebsite_options['THIWebsite_opt_contact_us_show'] ?? true;
$contact_us_show_hide = false;

if ( $contact_us_show_hide ) :
$contact_us_address   =   $THIWebsite_options['THIWebsite_opt_contact_us_address'] ?? '988782, Our Street, S State';
$contact_us_mail      =   $THIWebsite_options['THIWebsite_opt_contact_us_mail'] ?? 'info@domain.com';
$contact_us_phone     =   $THIWebsite_options['THIWebsite_opt_contact_us_phone'] ?? '+1 234 567 186';

?>
<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7">
                 <span>
                    <i class="fas fa-map-marker" aria-hidden="true"></i>
                    <?php echo esc_html( $contact_us_address ); ?>
                </span>

                <span>
                    <i class="fas fa-envelope"></i>
                    <?php echo esc_html( $contact_us_mail ); ?>
                </span>

                <span>
                    <i class="fas fa-mobile-alt"></i>
                    <?php echo esc_html( $contact_us_phone ); ?>
                </span>
            </div>

            <div class="col-12 col-md-12 col-lg-5 d-none d-lg-block">
                <div class="contact-us__social-network social-network-toTopFromBottom d-lg-flex justify-content-lg-end">
                    <?php THIWebsite_get_social_url(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

endif;