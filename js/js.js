// $(".mainbg").addClass("wow animate__fadeIn");
//banner
$(".bg0").addClass("wow animate__bounceInDown");
$(".bg1").addClass("wow animate__bounceInDown");
$(".bg2").addClass("wow animate__backInRight");
$(".bg3").addClass("wow animate__fadeInLeft");
$(".banner-txt").addClass("wow animate__fadeIn");
//about
$(".tit").addClass("wow animate__slideInLeft");
$(".self").addClass("wow animate__rotateIn");
//exp
$(".tit3").addClass("wow animate__slideInLeft");
$(".li1").addClass("wow animate__rubberBand");
$(".li2").addClass("wow animate__rubberBand");
$(".li3").addClass("wow animate__rubberBand");
$(".li4").addClass("wow animate__rubberBand");
$(".li5").addClass("wow animate__rubberBand");
//skill
$(".tit5").addClass("wow animate__slideInLeft");
$("#sk1").addClass("wow animate__backInRight");
$("#sk2").addClass("wow animate__backInRight");
$("#sk3").addClass("wow animate__backInRight");
$("#sk4").addClass("wow animate__backInRight");
//pro
$(".tit7").addClass("wow animate__slideInLeft");
$(".proe").addClass("wow animate__bounceIn");
//cont
$(".tit9").addClass("wow animate__slideInLeft");


new WOW().init();


$(window).scroll(() => {
  gotop()
});

gotop()

function gotop() {
  let
    nowat = $(window).scrollTop(),
    height = $("#banner").height();
  if (nowat <= height) {
    $("#scrolltop").removeClass("shown");
  }
  else {
    $("#scrolltop").addClass("shown");
  }
}


function h(cl, num, pl) {
  $(`.${cl}${num}`).hover(
    function () {
      $(`#${pl}`).attr("src", `icon/${cl}${num}.png`);
    },
    function () {
      $(`#${pl}`).attr("src", `icon/${cl}0.png`);
    }
  );
}

function op(x,y,img)
{
	$(x).fadeIn()
  $(y).fadeIn()
  console.log(img)
	$("#bimg").attr("src",`bimg/${img}.png`)
}

function cl(x)
{
	$(x).fadeOut();
}
