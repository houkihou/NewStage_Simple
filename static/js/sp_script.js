$(function() {
    $('.spSidebar').simpleSidebar({
        opener: '.spSidebarOpen',
        animation: {
            easing: 'easeOutQuint'
        },
        sidebar: {
            align: 'right',
            width: '320',
            closingLinks: '.spSidebarClose'
        }
    });
});

$(function() {
    $('.spSidebarToggle > a').on('click', function(e) {
        $(this).next('.sub-menu').slideToggle();
        $(this).toggleClass("active");
        e.stopPropagation();
    });
});
