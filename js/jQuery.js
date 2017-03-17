var arr = [];
var showNum = $('.random_grid').data('show');
$('.random_grid li').each(function() {
    arr.push($(this).html());
});
arr.sort(function() {
    return Math.random() - Math.random();
});
$('.random_grid').empty();
for(i=0; i < showNum; i++) {
    $('.random_grid').append('<li>' + arr[i] + '</li>');
}

function BoxChecked(){
    $(function() {
        $('input[name="catnum[]"]').prop("checked",true);
    });
}

function BoxnonChecked(){
    $(function() {
        $('input[name="catnum[]"]').prop("checked",false);
    });
}

//■page topボタン
$(function(){
    var topBtn=$('#pageTop-btn');

    // ◇ボタンをクリックしたら、スクロールして上に戻る
    topBtn.click(function(){
        $('body,html').animate({
            scrollTop: 0},500);
        return false;
    });

});
