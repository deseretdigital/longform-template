define(function(require) {
    var $ = require('jquery'),
        Video = require('longformVideo'),
        Gallery = require('longformGallery'),
        Lazy = require('longformLazy');

    if(!jwplayer) {
        require('jwplayer');
    }
    require('modernizr');


    var MobileDetect = require('mobileDetect'),
        md = new MobileDetect(window.navigator.userAgent);
    /**
     * Modernizr full screen test plugin
     */
    Modernizr.addTest('fullscreen', function() {
        browserPrefixes = 'webkit moz o ms khtml'.split(' ');
        if (typeof document.cancelFullScreen != 'undefined') {
            return true;
        } else {
            // check for fullscreen support by vendor prefix
            for (var i = 0, il = browserPrefixes.length; i < il; i++ ) {
                var prefix = browserPrefixes[i];

                if (typeof document[prefix + 'CancelFullScreen' ] != 'undefined' ) {
                    return true;
                }
            }
        }
        return false;
    });

    Modernizr.addTest('mobile', function() {
        return (md.mobile() ? true : false);
    });



    $('.js-video').hide();

    $(document).ready(function() {
        jwplayer.key="LlndKwlrLnYKFFe8QruXI59jV9BvvgGFy6Nr1A==";
        var pwidget_config = { defaults: { afterShare: false } };

        /**
         * Videos
         * @type {Array}
         */
        var videos = [];
        $('.js-video').each(function(idx,v) {
            var video;
            if(video = new Video(v)) {
                videos.push(video);
            }
        });
        if($('html').hasClass('mobile')) {
            $('.cover.video').find('video').remove();
        } else {
            $('.cover.video').find('video').each(function() {
                if($(this).attr('data-src')) {
                    $(this).attr('src', $(this).attr('data-src'));
                }
                if($(this).attr('autoplay')) {
                    this.play();
                }
            });
        }

    })


    /**
     * Galleries
     * @type {Array}
     */
    var galleries = [];
    $('.js-gallery').each(function(idx,g) {
        var gallery;
        if(gallery = new Gallery(g)) {
            galleries.push(gallery);
        }
    });

    /**
     * Video
     */
    $('.cover-video').waypoint(function(direction){
        if(direction === 'down') {
            this.pause();
        } else {
            this.play();
        }
    }, {
        offset: function() { return -$(this).height(); }
    });

    var autoplay = $('video[autoplay]');
    autoplay.each(function(){
        this.play();
    });

    var $masthead = $('header .masthead');
    $('section').waypoint(function(direction) {
        $masthead.find('.active-chapter').removeClass('active-chapter');
        var chapter = $masthead.find('[data-section="'+$(this).attr('data-section')+'"]');
        if(chapter.length === 0) {
            var chapter = $masthead.find('[data-section="1"]');
        }
        chapter.addClass('active-chapter');
    },{ offset: 0 });

    $('section').waypoint(function(direction) {
        if(direction !== 'up') {
            return;
        }
        $masthead.find('.active-chapter').removeClass('active-chapter');
        var chapter = $masthead.find('[data-section="'+$(this).attr('data-section')+'"]');
        if(chapter.length === 0) {
            var chapter = $masthead.find('[data-section="1"]');
        }
        chapter.addClass('active-chapter');
    },{ offset: function() { return -$(this).height(); } });

    /**
     * Lazy loading
     * @type {Lazy}
     */
    var lazy = new Lazy('.gallery-lazy img');
    var lazy = new Lazy('img.lazy');

    /**
     *
     */
    $('.sidebar').each(function() {
        var $sidebar = $(this);
        $sidebar.find('.continue').on('click', function() {
            $sidebar.addClass('more');
        })
    })
});
