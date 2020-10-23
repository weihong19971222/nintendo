 //九宮格大小
 function size_auto(){
    $col_width=$(".col_height").css("width");
    $(".col_height").css("height",$col_width);
}
size_auto();
$(window).resize(function() {
    size_auto();
});

//彈出視窗
$(".col_height").click(function(){
    switch($(this).attr("data-name")){
        case "animal":
            $("#exampleModalCenterTitle").html("動物森友會系列");
            break;
        case "mario":
            $("#exampleModalCenterTitle").html("超級瑪利歐系列");
            break;
        case "pokemon":
            $("#exampleModalCenterTitle").html("精靈寶可夢系列");
            break;
        case "star":
            $("#exampleModalCenterTitle").html("星之卡比系列");
            break;
        case "shovelknight":
            $("#exampleModalCenterTitle").html("鏟子騎士系列");
            break;
        case "rockman":
            $("#exampleModalCenterTitle").html("任天堂明星大亂鬥系列");
            break;
        case "fireeMblem":
            $("#exampleModalCenterTitle").html("聖火降魔錄系列");
            break;
        case "splatoon":
            $("#exampleModalCenterTitle").html("漆彈大作戰系列");
            break;
        case "zelda":
            $("#exampleModalCenterTitle").html("薩爾達傳說系列");
            break;
    }
});