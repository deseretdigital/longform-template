define(function(require) {
    var $ = require('jquery');
    if(!jwplayer) {
        require('jwplayer');
    }

    function bitwise(str){
        var hash = 0;
        if (str.length == 0) return hash;
        for (i = 0; i < str.length; i++) {
            char = str.charCodeAt(i);
            hash = ((hash<<5)-hash)+char;
        }
        return hash;
    }
    /**
     * JWPlayer injector
     * @param {[type]} selector [description]
     */
    var Video = function(selector) {
        this.selector = selector;
        this.$video = null;
        this.built = false;
        this.jw = null;
        this.settings = {
            width: '100%',
            defaultQuality: 'sd',
        };
        /**
         * [initialize description]
         * @param  {[type]} selector [description]
         * @return {[type]}          [description]
         */
        this.initialize = function(selector) {
            if(selector) {
                return this.load(selector);
            }
        };
        /**
         * Load video
         * @param  {[type]} selector [description]
         * @return {[type]}          [description]
         */
        this.load = function(selector) {
            var $v = $(selector);
            if($v.length) {
                this.$video = $v;
                this.build();
                return this;
            } else {
                return false;
            }
        };
        /**
         * Build JWPlayer
         * @return {[type]} [description]
         */
        this.build = function() {
            var self = this;
            if(this.built === true) {
                return;
            }
            this.settings.source = this.$video.attr('data-src');
            this.settings.source_hd = this.$video.attr('data-src-hd');
            this.settings.image = this.$video.attr('data-image');
            this.settings.defaultQuality = ($('html').hasClass('mobile') ? 'sd' : 'hd');
            var sources = [
                { file: this.settings.source, label: 'SD (480p)', default: (this.settings.defaultQuality === 'sd') }
            ];
            if(this.settings.source_hd) {
                sources.push({file: this.settings.source_hd, label: 'HD (720p)', default: (this.settings.defaultQuality === 'hd') });
            }
            if(this.$video.attr('id') === undefined) {
                this.$video.attr('id', 'video_' + bitwise(this.settings.source));
            }
            this.jw = jwplayer(this.$video.attr('id')).setup({
                controls: true,
                autostart: false,
                width: this.settings.width,
                aspectratio: '16:9',
                stagevideo: false,
                primary: 'flash',
                fallback: 'html5',
                preload: 'none',
                image: this.settings.image,
                'key': 'LlndKwlrLnYKFFe8QruXI59jV9BvvgGFy6Nr1A==',
                sources: sources,
                sitecatalyst : {
                    mediaName: this.settings.source
                }
            });
            this.$video.waypoint(function(direction){
                self.jw.pause(true);
            }, { offset: this.$video.height() });
            this.$video.show();
            this.built = true;
        }
        if(selector) {
            this.initialize(selector);
        }
    };
    return Video;
});
