$(function () {
    $('.table tbody').paginathing({
        perPage: 12,
        insertAfter: '.table',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });
})