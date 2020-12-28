new WOW().init();

function h(cl,num,pl){
    $(`.${cl}${num}`).hover(function(){
        $(`#${pl}`).attr("src",`icon/${cl}${num}.png`);
    },function(){
        $(`#${pl}`).attr("src",`icon/${cl}0.png`);
    });
}