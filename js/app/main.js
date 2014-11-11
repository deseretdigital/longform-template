requirejs.config({
    baseUrl: 'lib/',
    paths: {
        app: 'app/app',
        jQuery: 'jquery/dist/jquery',
        jquery: 'jquery/dist/jquery',
        hammer: 'hammerjs/hammer.min',
        scrollspy: 'jquery-scrollspy/jquery-scrollspy',
        waypoints: 'jquery-waypoints/waypoints',
        modernizr: 'modernizr/modernizr',
        jwplayer: '/js/lib/jwplayer/jwplayer',
        longformVideo: 'app/dn-longform-video',
        longformGallery: 'app/dn-longform-gallery',
        longformLazy: 'app/dn-longform-lazy',
        mobileDetect: 'mobile-detect/mobile-detect'
    },
    shim: {
        'modernizr/modernizr': {
            exports: 'modernizr'
        },
    }
});
