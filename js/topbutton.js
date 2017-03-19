$(function(){
    var topBtn=$('#topbutton');

    $(window).scroll(function(){
        if($(this).scrollTop()>80){
            //---- 画面を80pxスクロールしたら、ボタンを表示する
        }else{
            //---- 画面が80pxより上なら、ボタンを表示しない
        }
    });
    // ◇ボタンをクリックしたら、スクロールして上に戻る
    topBtn.click(function(){
        $('body,html').animate({
            scrollTop: 0},500);
        return false;
    });

});
