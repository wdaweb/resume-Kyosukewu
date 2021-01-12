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
$(".li").addClass("wow animate__rubberBand");
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
$(".contme").addClass("wow animate__zoomIn");

new WOW().init();

function go(where) {
  switch (where) {
    case "w":
      $('.g').removeClass("active")
      $('.g2').removeClass("active show")
      $('.d').removeClass("active")
      $('.d2').removeClass("active show")
      $('.w').addClass("active")
      $('.w2').addClass("active show")
      location.href="#pro"
      break;
    case "g":
      $('.w').removeClass("active")
      $('.w2').removeClass("active show")
      $('.d').removeClass("active")
      $('.d2').removeClass("active show")
      $('.g').addClass("active")
      $('.g2').addClass("active show")
      location.href="#pro"
      break;
    case "d":
      $('.w').removeClass("active")
      $('.w2').removeClass("active show")
      $('.g').removeClass("active")
      $('.g2').removeClass("active show")
      $('.d').addClass("active")
      $('.d2').addClass("active show")
      location.href="#pro"
      break;
  }
}

$(window).scroll(() => {
  gotop();
});

gotop();

function gotop() {
  let nowat = $(window).scrollTop(),
    height = $("#banner").height();
  if (nowat <= height) {
    $("#scrolltop").removeClass("shown");
  } else {
    $("#scrolltop").addClass("shown");
  }
}

for (let i = 1; i <= 10; i++) {
  $(`.w${i}`).hover(
    function () {
      let img = $(`.w${i}`).data("pic");
      console.log();
      $(`#wimg`).attr("src", `icon/${img}`);
    },
    function () {
      $(`#wimg`).attr("src", `icon/w0.png`);
    }
  );
}
for (let i = 1; i <= 5; i++) {
  $(`.g${i}`).hover(
    function () {
      let img = $(`.g${i}`).data("pic");
      console.log();
      $(`#gimg`).attr("src", `icon/${img}`);
    },
    function () {
      $(`#gimg`).attr("src", `icon/g0.png`);
    }
  );
}
for (let i = 1; i <= 5; i++) {
  $(`.d${i}`).hover(
    function () {
      let img = $(`.d${i}`).data("pic");
      console.log();
      $(`#dimg`).attr("src", `icon/${img}`);
    },
    function () {
      $(`#dimg`).attr("src", `icon/d0.png`);
    }
  );
}
for (let i = 1; i <= 5; i++) {
  $(`.t${i}`).hover(
    function () {
      let img = $(`.t${i}`).data("pic");
      console.log();
      $(`#timg`).attr("src", `icon/${img}`);
    },
    function () {
      $(`#timg`).attr("src", `icon/t0.png`);
    }
  );
}
function op(x, y, img) {
  $(x).fadeIn();
  $(y).fadeIn();
  console.log(img);
  $("#bimg").attr("src", `bimg/${img}`);
}

function cl(x) {
  $(x).fadeOut();
}
