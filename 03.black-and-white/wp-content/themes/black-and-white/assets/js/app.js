(function ($) {

    function initSlider () {
        $('.carousel').carousel();
    }

    function initPopover () {

        let currentAuthor = '';
        
        $('.js-author-books').webuiPopover({
            onShow: function ($elm) {
                let selector = '[data-target=' + $elm.attr('id') + ']',
                    $target = $(selector),
                    newAuthor = $target.data('title');

                if (currentAuthor !== newAuthor) {
                    currentAuthor = newAuthor;

                    WebuiPopovers.updateContent(selector, '<i class="icon-refresh"></i>');

                    const requestData = {
                        action: 'author_books',
                        author: currentAuthor
                    };

                    $.post( BlackWhite.ajaxUrl, requestData)
                        .done(function (res) {
                            let html = '';

                            if (res.success && res.data.books) {
                                html = '<ul>' +
                                    res.data.books.map(function (book) { return '<li>'+ book +'</li>' }) +
                                    '</ul>';
                            } else {
                                html = data.message;
                            }

                            WebuiPopovers.updateContent(selector, html);
                        })
                        .fail(function () {
                            WebuiPopovers.updateContent(selector, BlackWhite.errorMessage);
                        });
                }
            }
        })
    }

    ////

    initSlider();
    initPopover();

})(jQuery);
