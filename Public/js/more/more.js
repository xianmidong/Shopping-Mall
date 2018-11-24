$(function () {
    //分页
    $('.list-group').paginathing({
        perPage: 12,
        insertAfter: '.list-group',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });

})