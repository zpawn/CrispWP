(function ($) {
    // init slider
    $('.carousel').carousel();

    // init popover
    $('.js-author-books').webuiPopover({
        type: 'async',
        url: '',
        content: function (data) {
            console.log('>>> data:', data);
            return '<p>Content</p>';
        }
    });
})(jQuery);
