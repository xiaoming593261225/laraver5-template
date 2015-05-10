var imaginizer = {
    init: function() {
        imaginizer.initMenuLinks();
        imaginizer.initCloseActions();
    },
    initMenuLinks: function () {
        $('.menu-link').on('click', function(e){
            e.preventDefault();
            $(this).addClass('active-link');
            imaginizer.openThumbnails();
        });
    },
    initCloseActions: function () {
        $(document).keyup(function (e) {
            if (e.keyCode == 27) {
                if ($('.thumbnail-container.opened').length > 0) {
                    imaginizer.closeThumbnails();
                }
            }
        })
    },
    openThumbnails: function () {
        $('.thumbnail-container').fadeIn().addClass('opened');
    },
    closeThumbnails: function () {
        $('.thumbnail-container').fadeOut().removeClass('opened');
        $('.menu-link.active-link').removeClass('active-link');
    }
};