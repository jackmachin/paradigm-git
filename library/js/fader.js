;
(function ($, window, document, undefined) {

    var pluginName = "fader",
        defaults = {
            active: "active",
            interval: 1500
        };

    function Plugin(element, options) {
        this.element = $(element);
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.links = this.element.find('.fader-link');
        this.amount = this.links.length;
        this.images = this.element.find('.fader-img');
        this.current = {
            image: 0,
            link: 0
        };
        this.init();
    }

    Plugin.prototype = {
        init: function () {
            var that = this;
            this.setStage();
            $(this.images[this.current.image], this.el).fadeIn();
            $(this.links[this.current.link], this.el).fadeIn();
            this.swapActive($(this.links[this.current.link], this.el));
            this.timer = setInterval(function(){
                that.cycle();
            }, this.settings.interval);
        },
        swapActive: function(el){
  el.siblings().removeClass(this.settings.active).end().addClass(this.settings.active);
        },
        finishStage: function(){
            var that = this;
            this.links.each(function(){
                $(this).addClass(that.settings.active);
            });
        },
        setStage: function(){
            this.images.hide();
            this.links.hide();
        },
        cycle: function(){
            if(this.current.link == this.amount) {
                clearInterval(this.timer);
                this.finishStage();
            }
            this.current.image = this.current.image + 1;
            this.current.link = this.current.link + 1;
            this.loseCurrentImage();
            this.fadeNextAll();
            this.swapActive($(this.links[this.current.link], this.el));
        },
        loseCurrentImage: function(){
            $(this.images[this.current.image], this.el).fadeOut();
        },
        fadeNextAll: function(){
            var that = this;
            $(this.images[this.current.image], this.el).fadeIn();
            setTimeout(function(){
                $(that.links[that.current.link], that.el).fadeIn();
            }, 50);
		   	$('#fader-home').fader({ 		    interval: 3000 		}, 5000);
        }
    };

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        });
    };

})(jQuery, window, document);
