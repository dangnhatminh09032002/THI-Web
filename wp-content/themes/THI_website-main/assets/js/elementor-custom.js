(function ($) {

    /* Start Carousel slider */
    let ElementCarouselSlider = function( $scope, $ ) {

        let element_slides = $scope.find( '.custom-owl-carousel' );

        $( document ).general_owlCarousel_custom( element_slides );

    };

    /* Timeline Horizontal */
    const ElementTimelineHorizontal = function ( $scope ) {
        const timeline_horizontal = $scope.find('.timeline-content-horizontal');

        timeline_horizontal.mCustomScrollbar({
            axis: "x",
            autoHideScrollbar: true,
            contentTouchScroll: true,
            documentTouchScroll: true,
            advanced:{
                autoExpandHorizontalScroll:true
            }
        });
    }

    $( window ).on( 'elementor/frontend/init', function() {

        /* Element slider */
        elementorFrontend.hooks.addAction( 'frontend/element_ready/THIWebsite-slides.default', ElementCarouselSlider );

        /* Element post carousel */
        elementorFrontend.hooks.addAction( 'frontend/element_ready/THIWebsite-post-carousel.default', ElementCarouselSlider );

        /* Element testimonial slider */
        elementorFrontend.hooks.addAction( 'frontend/element_ready/THIWebsite-testimonial-slider.default', ElementCarouselSlider );

        /* Element timeline slider */
        elementorFrontend.hooks.addAction( 'frontend/element_ready/THIWebsite-timeline-slider.default', ElementTimelineHorizontal );

    } );

})( jQuery );