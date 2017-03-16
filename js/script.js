console.log("きてるで");


//if(window.matchMedia('(min-width:○○px)').matches){
//    ～ ここに条件がマッチした場合の処理を記述 ～
//} else {
//    ～ ここに条件がマッチしなかった場合の処理を記述 ～
//}

if (window.matchMedia('(min-width:980px)').matches) {

    document.getElementById("menu").style.display = "block";
    console.log("PCやで");

} else {

    document.getElementById("menu").style.display = "none";
    console.log("モバイルやで");

}




//$(function() {
//    $("#menu").mmenu({
//        "extensions": [
//            "effect-listitems-fade",
//            "iconbar" ,
//            "shadow-page"
//        ],
//        "dividers": {
//            "add": true
//        }
//    });
//});

//$(function(){
//    $("#search").mmenu({
//        "offCanvas": {
//            "position": "right"
//        },
//        "extensions": [
//            "effect-listitems-fade",
//            "shadow-page"
//        ],
//        "navbars": [
//            {
//                "position": "top",
//                "content": [
//                    "searchfield"
//                ]
//            }
//        ]
//    });
//});
