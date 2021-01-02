$(".bg0").addClass("wow animate__bounceInDown");
$(".bg1").addClass("wow animate__bounceInDown");
$(".bg2").addClass("wow animate__backInRight");
$(".bg3").addClass("wow animate__fadeInLeft");
$(".banner-txt").addClass("wow animate__fadeIn");
$(".tit").addClass("wow animate__slideInLeft");
$(".tit2").addClass("wow animate__lightSpeedInLeft");
$(".tit3").addClass("wow animate__slideInLeft");
$(".tit4").addClass("wow animate__lightSpeedInLeft");
$(".tit5").addClass("wow animate__slideInLeft");
$(".tit6").addClass("wow animate__lightSpeedInLeft");
$(".tit7").addClass("wow animate__slideInLeft");
$(".tit8").addClass("wow animate__lightSpeedInLeft");
$(".tit9").addClass("wow animate__slideInLeft");
$(".tit10").addClass("wow animate__lightSpeedInLeft");
$(".self").addClass("wow animate__rotateIn");
$("#sk1").addClass("wow animate__backInRight");
$("#sk2").addClass("wow animate__backInRight");
$("#sk3").addClass("wow animate__backInRight");
$("#sk4").addClass("wow animate__backInRight");
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
