(function ($) {
    $.fn.textfill = function (options) {
        var self = this;
        var prevSize = 0;
        options = (typeof options == "undefined" ? {} : options);
        var default_options = {
            maxFontPixels: 50,
            onResize: function(){}
        };
        options = $.extend(true, default_options, options);
        this.run = function () {
            var fontSize = options.maxFontPixels;
            var ourText = $('span:visible:first, h1, h2, h3, p', this);
            var maxHeight = $(this).height();
            var maxWidth = $(this).width();
            var textHeight;
            var textWidth;
            do {
                textHeight = ourText.height();
                textWidth = ourText.width();
                ourText.css('font-size', fontSize);
                //                console.log('Text Dimensions: ' + textWidth + 'x' + textHeight);
                //                console.log('Cont Dimensions: ' + textWidth + 'x' + textHeight);
                //                console.log('Font-Size: ' + fontSize);
                textHeight = ourText.height();
                textWidth = ourText.width();
                fontSize = fontSize - 1;
            } while ((textHeight > maxHeight || textWidth > maxWidth) && fontSize > 3);
            if (fontSize !== prevSize) {
                options.onResize();
                prevSize = fontSize;
            }
            return this;
        };
        $(window).on('resize', function () {
            self.run();
        });
        self.run();
    };
})(jQuery);