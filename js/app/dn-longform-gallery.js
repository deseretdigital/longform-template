define(function(require) {
    var $ = require('jquery'),
        Hammer = require('hammer');
    require('modernizr');

    function bitwise(str){
        var hash = 0;
        if (str.length == 0) return hash;
        for (i = 0; i < str.length; i++) {
            char = str.charCodeAt(i);
            hash = ((hash<<5)-hash)+char;
        }
        return hash;
    }

    var Gallery = function(selector) {
        this.$el = null;
        this.el = null;
        this.hammer = null;
        this.settings = { fullscreen: false, active: 0, caption: true };
        this.images = [];
        this.initialize = function(selector) {
            if(!selector) {
                throw ('Error: selector not provided');
            }
            this.$el = $(selector);
            this.el = this.$el[0];
            this.build();
        };
        this.build = function() {
            this.settings.fullscreen = this.detectFullScreen();
            var self = this;
            this.hammer = new Hammer(this.$el.find('.gallery-images')[0], {
                recognizers: [
                    [Hammer.Swipe,{ velocity: 0.4 }]
                ]
            });
            $.each(this.$el.find('.gallery-images').children('.gallery-image'),function(key,el) {
                $el = $(el);
                self.images[key] = {
                    el: el,
                    $el: $el,
                    caption: $el.find('.caption').html(),
                    source: $el.find('img').attr('src'),
                    src_thumbnail: $el.find('img').attr('data-src-thumb'),
                    src_large: $el.find('img').attr('data-src-large')
                };
            });
            this.images[0].$el.addClass('showing');
            this.injectCaption(this.images[0].caption);
            this.generateIndex();
            this.buildEvents();
        };
        this.buildEvents = function() {
            var self = this;
            this.$el.on('click','.gallery-fullscreen', function(ev) {
                self.fullscreen();
            });
            this.$el.on('click','.nav-left',function(ev) {
                ev.stopPropagation();
                self.toggleImages(self.prev());
            });
            this.$el.on('click','.nav-right',function(ev) {
                ev.stopPropagation();
                self.toggleImages(self.next());
            });
            this.$el.on('click', '.gallery-image img',function(ev) {
                ev.stopPropagation();
                self.toggleImages(self.next());
            });
            $(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange MSFullscreenChange',function() {
                if(self.$el.hasClass('is-fullscreen')) {
                    self.$el.removeClass('is-fullscreen');
                } else {
                    self.$el.addClass('is-fullscreen');
                }
            });
            this.hammer.on('swipeleft', function(ev) {
                self.toggleImages(self.next());
            });
            this.hammer.on('swiperight', function(ev) {
                self.toggleImages(self.prev());
            });
            this.hammer.on('tap', function(ev) {
                self.toggleImages();
            })

        };
        this.detectFullScreen = function() {
            return (Modernizr.fullscreen ? true : false);
        };
        this.fullscreen = function() {
            var element = this.el;
            if(this.settings.fullscreen) {
                $.each(this.images,function(key,image) {
                    image.$el.find('img').trigger('lazy-large');
                })
                if(element.requestFullScreen) {
                    element.requestFullScreen();
                } else if(element.mozRequestFullScreen) {
                    element.mozRequestFullScreen();
                } else if(element.webkitRequestFullScreen) {
                    element.webkitRequestFullScreen();
                } else if(element.msRequestFullscreen) {
                    element.msRequestFullscreen();
                }
            }
        };
        this.prev = function(current) {
            if(current === undefined) { current = this.settings.active; }
            return (current - 1 == -1 ? this.images.length - 1 : current-1);
        }
        this.next = function(current) {
            if(current === undefined) { current = this.settings.active; }
            return (current + 1 == this.images.length ? 0 : current+1);
        };
        /**
         * Simple function to inject a caption into the caption field
         *
         * @param caption
         */
        this.injectCaption = function(caption) {
            this.$el.find('.gallery-caption').html(caption);
        }
        /**
         * Switch the image. By default, calling toggleImages will just move to the next.
         *
         * @param next
         * @param current
         * @returns {*}
         */
        this.toggleImages = function(next,current) {
            this.$el.addClass('interacted');
            next = (next === undefined ? this.next() : next);
            current = (current === undefined ? this.settings.active : current);
            var nextImage = this.images[next];
            this.images[current].$el.addClass('hidden').removeClass('showing');
            if(this.images[next].$thumbnail) {
                this.images[current].$thumbnail.removeClass('active');
                this.images[next].$thumbnail.addClass('active');
            }
            nextImage.$el.addClass('showing').removeClass('hidden');
            if(this.settings.caption == true) {
                this.injectCaption(nextImage.caption);
            }
            this.settings.active = next;
            for(i = 0; i < 3; i++) {
                if(this.images[next+i]) {
                    this.images[next+i].$el.find('img').trigger('lazy');
                }
            }
            return nextImage;
        }
        this.generateIndex = function() {
            var self = this;
            // get index
            var $index = this.$el.find('.gallery-index');
            if($index.length > 0) {
                $.each(this.images, function(key,image) {
                    var $img = $('<img>').attr('src',image.src_thumbnail).addClass('gallery-thumbnail');
                    $index.append($img);
                    image.$thumbnail = $img;
                    image.$thumbnail.on('click',function(ev) {
                        self.toggleImages(key);
                        $index.find('img').removeClass('active');
                        $(this).addClass('active');

                    });
                });
                this.images[0].$thumbnail.addClass('active');
            }
        }
        this.initialize(selector);
    };
    return Gallery;
});
