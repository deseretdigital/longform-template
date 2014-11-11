define(function(require) {
    var $ = require('jquery');
    var waypoints = require('waypoints');
    var Lazy = function(selector) {
        this.images = [];
        this.settings = {
            threshold: 300
        };
        this.initialize = function(selector) {
            var self = this;
            $(selector).each(function(key,el) {
                var img = {$el: $(el)};
                img.top = img.$el.offset().top;
                img.bottom = img.$el.offset().top + img.$el.height();
                img.height = img.$el.height();
                img.src = img.$el.attr('data-src');
                img.srcLarge = img.$el.attr('data-src-large');
                img.settings = {};
                img.settings.background = (img.$el.attr('data-lazy-bg') === undefined ? false : true);
                img.lazy = function(force) {
                    if(img.settings.loaded !== true || force === true) {
                        src = img.src;
                        if(force) {
                            if(img.srcLarge) {
                                src = img.srcLarge;
                                img.settings.loaded = false;
                            }
                        }
                        if(img.settings.background) {
                            img.$el.css('background-image','url(' + src + ')');
                        } else {
                            img.$el.attr('src',src);
                        }
                        img.settings.loaded = true;
                    }
                    return img.$el;
                };
                img.$el.on('lazy', function() {
                    img.lazy();
                });
                img.$el.on('lazy-large', function() {
                    img.lazy(true);
                })
                img.$el.waypoint(function(){
                    $img = $(this);
                    if(img.settings.loaded === true) {
                        return;
                    }
                    var min = $img.attr('data-lazy-min-width')
                    if(min !== undefined) {
                        if(min > $(window).width()) {
                            return;
                        }
                    }
                    img.lazy();
                }, { offset: self.settings.threshold * -1 });
                // img.$el.scrollspy({
                //     min: (img.top - (self.settings.threshold)),
                //     max: (img.bottom + self.settings.threshold),
                //     onEnter: function() {
                //         if(img.$el.hasClass('lazy-loaded'))
                //         {
                //             return;
                //         }
                //     }
                // });
                self.images[key] = img;
            });
        };
        this.initialize(selector);
    };
    return Lazy;
});
