@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet" />

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'> 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style>
    *{
	margin:0;
	padding:0;
	-webkit-user-select:none;
	-moz-user-select:none;
	-o-user-select:none;
	user-drag:none;
	box-sizing:border-box!important;
}

body{
		font-family: Roboto, Sans-serif;
        overflow: hidden;
        width: 100%;
	}

#container{
	width:100%;
	min-height: 600px;
	height:100vh;
	position: relative;
	background: #e2e2e2;
	overflow: visible;
}
#holder{
	max-width: 800px;
	width: 98%;
	min-height: 360px;
	height:360px;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
}
#image{
	width: 85%;
	height: 100%;
	float: left;
	position: relative;
	z-index: 200;
	/* background:; */
	box-shadow:0px 40px 120px 0px rgba(0,0,0,.52);
	overflow: visible;
}
#right{
	width: 60%;
	height: 100%;
	float: right;
	position: relative;
}
#text{
    width: 45%;
    height: 400px;
    position: absolute;
    top: 0;
    right: -150px;
    bottom: 0;
	margin: auto;
	z-index: 100;
	background: #f3f3f3;
	box-shadow:0px 40px 120px 0px rgba(0,0,0,.52);
}
a{
	display: block;
	text-decoration: none;
	outline: none;
	outline-color: none;

}
nav{
	width: 140px;
	height: 50px;
	position: absolute;
	bottom: 0;
	left: 50%;
	margin:0 0 -25px -70px;
	z-index: 1000;
	box-shadow:0px 7px 24px 3px rgba(0,0,0,.52);
  display:none;
}
#leftBtn{
	width:50%;
	height: 100%;
	float: left;
	color: rgba(255,255,255,.57);
	background:#232323;
	font-size: 25px;
	line-height: 200%;
	text-align: center;
	border-right:1px solid rgba(255,255,255,.57);
	cursor: pointer;
	-webkit-transition:all .3s ease-in;
	-moz-transition:all .3s ease-in;
	-o-transition:all .3s ease-in;
	transition:all .3s ease-in;
}
#rightBtn{
	width:50%;
	height: 100%;
	float: right;
	color: rgba(255,255,255,.57);
	background:#232323;
	font-size: 25px;
	line-height: 200%;
	text-align: center;
	border-left:1px solid rgba(255,255,255,.57);
	cursor: pointer;
	-webkit-transition:all .3s ease-in;
	-moz-transition:all .3s ease-in;
	-o-transition:all .3s ease-in;
	transition:all .3s ease-in;
}
#leftBtn:hover,#rightBtn:hover{
	color: #fff;
}
#nav-cirlces{
	width: 96px;
	height: 20px;
	position: absolute;
	bottom: 8%;
	left: 50%;
	margin-left: -50px;
}
.circle{
	width: 20px;
	height: 100%;
	float: left;
	border-radius:100%;
	border:2px solid green;
	margin:0 6px;
	cursor: pointer;
	-webkit-transition:all .75s  cubic-bezier(.86,.3,.07,1);
	-moz-transition:all .75s  cubic-bezier(.86,.3,.07,1);
	-o-transition:all .75s  cubic-bezier(.86,.3,.07,1);
	transition:all .75s  cubic-bezier(.86,.3,.07,1);
}
#centerText{
	width: 100%;
	height:200px;
	position: absolute;
	top: 50%;
	margin-top:-100px;
	padding: 10px 0;
	overflow: visible;
}
p{	
	width: 100%;
	height: 150px;
	position: absolute;
	top: 45px;
	left: 32px;
    right: -130px;
    bottom: -60px;
	margin: auto;	
	font-size: 20px;
	color: #232323;
	padding: 0 25px;
	text-align:center;
	opacity: 0;
	-webkit-transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
	-moz-transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
	-o-transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
	transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
}
p.quote.active{
	right:0;
	opacity: 1;
	background: transparent;
    font-size: 34px;
    font-weight: 700;
    color: #005b96;
}
p.quote:nth-child(2){
	top: 25px;
    font-size: 30px;
    font-weight: 600;
}
.active{
	background: yellow;
}
.img{
	width: 100%;
	height: 100%;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain !important;
	position: absolute;
	right: -100%;
	background-position: center !important;
	background-size: cover !important;
	background-repeat: no-repeat !important;
	opacity: 0;
	z-index: 400;
	-webkit-transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
	-moz-transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
	-o-transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
	transition:all 2s  cubic-bezier(.86,.3,.03,1) , opacity .7s cubic-bezier(.86,.3,.47,1) .3s;
}
.img.active{
	right:0;
	opacity: 1;
	z-index: 500;
}
.jobs{
	/* background: #fff url(https://cdn.jsdelivr.net/gh/linuxguist/bizpage@main/assets/img/portfolio/card2.jpg); */
}
.zuck{
	background: #fff url(assets/images/professional.jpg);
}
.musk{
	background: #fff url(assets/images/consumer.webp);
}

#bg{
	width: 100%;
	height: 100%;
	position: absolute;
}

.slide{
	width: 100%;
	height: 100%;
	position: absolute;
	/*right: -100%;*/
	opacity: 0;	
	-webkit-transition:all 1.5s ease;
	-moz-transition:all 1.5s ease;
	-o-transition:all 1.5s ease;
	transition:all 1.5s ease;	
}
.slide.active{
	/*right: 0%;*/
	opacity: 1;
}
.jobs-bg{
	background: #fff url(assets/images/background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
.zuck-bg{
	background: #fff url(assets/images/background.jpg);

	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
.musk-bg{
	background: #fff url(assets/images/background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

@media screen and (max-width:700px){

	#centerText p{
		font-size: 20px;
	}
}

@media screen and (max-width:580px){

#holder{
	max-width: 700px;
	width: 100%;
	min-height: 360px;
	height:100%;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: red;
	margin: auto;
}
.img{
	background-position:top center !important;
}
#image{
	width: 220px;
	height:250px;
	float: left;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -280px;
	margin-left: -110px;
}
#right{
	width: 100%;
	height: 100%;
	float: right;
	position: relative;
	background: blue;
}
#text{
	width: 90%;
	height: 320px;
	position: absolute;
	top: 150px;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
}
#nav-cirlces{
	display: none;
}
#centerText{
	width: 100%;
	height:200px;
	position: absolute;
	top: 34%;
	margin-top:-100px;
	padding: 150px 0!important;
	overflow: visible;
}

}

@media screen and (max-width:450px){
#image{
	width: 200px;
	height:230px;
	float: left;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -250px;
	margin-left: -100px;
}

#text{
	width: 100%;
	height: 320px;
	position: absolute;
	top: 150px;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
}
#nav-cirlces{
	display: none;
}
#centerText{
	width: 100%;
	height:200px;
	position: absolute;
	top: 34%;
	margin-top:-100px;
	padding: 120px 0!important;
	overflow: visible;
}

}

.quote {
  vertical-align: middle;
}

</style>
<body>
    <div id="container">
        <div id="holder">
          <div id="image">
            <!-- <div class="img jobs"></div> -->
            <div class="img zuck"></div>
            <div class="img musk"></div>
          </div>
          <div id="right"></div>
          <div id="text">
            <div id="centerText">
            <p class="quote">
                Professional
               
            </p>
            <p class="quote">
                Consumer
            </p>
            </div>
            <nav>
              <a id="leftBtn" class="prev"><i class="fa fa-arrow-left"></i></a>
              <a id="rightBtn" class="next"><i class="fa fa-arrow-right"></i></a>
            </nav>
          </div>
        </div>
        <div id="bg">
          <div class="slide jobs-bg"></div>
          <div class="slide zuck-bg"></div>
          <!-- <div class="slide musk-bg"></div> -->
        </div>
        <div id="nav-cirlces">
          <div class="circle"></div>
          <div class="circle"></div>
          <!-- <div class="circle"></div> -->
        </div>
      </div>
      <script>
  $(window).load(function() {
  $(".circle")
    .first()
    .addClass("active");
  $("#bg .slide")
    .first()
    .addClass("active");
  $("#image .img")
    .first()
    .addClass("active");
  $(".quote")
    .first()
    .addClass("active");
  var animate = setInterval(function() {
    var $this = $(".circle"),
      currentActiveBubble = $("#nav-cirlces").find(".active"),
      position = $("#nav-cirlces")
        .children()
        .index(currentActiveBubble),
      num = $(".circle").length;
  if (position < num - 1) {
      $(".active")
        .removeClass("active")
        .next()
        .addClass("active");
    } else {
      $(".circle")
        .removeClass("active")
        .first()
        .addClass("active");
      $("#bg .slide")
        .removeClass("active")
        .first()
        .addClass("active");
      $("#image .img")
        .removeClass("active")
        .first()
        .addClass("active");
      $(".quote")
        .removeClass("active")
        .first()
        .addClass("active");
    }
    position++;
  }, 4500);
 
  $(".circle").click(function() {
    clearInterval(animate);
    var $this = $(this),
      $siblings = $this.parent().children(),
      position = $siblings.index($this);
    $(".circle")
      .removeClass("active")
      .eq(position)
      .addClass("active");
    $("#bg .slide")
      .removeClass("active")
      .eq(position)
      .addClass("active");
    $("#image .img")
      .removeClass("active")
      .eq(position)
      .addClass("active");
    $(".quote")
      .removeClass("active")
      .eq(position)
      .addClass("active");
  });

  $("#rightBtn , #leftBtn").click(function() {
    clearInterval(animate);
    var $this = $(this),
      currentActiveBubble = $("#nav-cirlces").find(".active"),
      position = $("#nav-cirlces")
        .children()
        .index(currentActiveBubble),
      num = $(".circle").length;

    if ($this.hasClass("next")) {
      if (position < num - 1) {
        $(".active")
          .removeClass("active")
          .next()
          .addClass("active");
      } else {
        $(".circle")
          .removeClass("active")
          .first()
          .addClass("active");
        $("#bg .slide")
          .removeClass("active")
          .first()
          .addClass("active");
        $("#image .img")
          .removeClass("active")
          .first()
          .addClass("active");
        $(".quote")
          .removeClass("active")
          .first()
          .addClass("active");
      }
    } else {
      if (position === 0) {
        $(".circle")
          .removeClass("active")
          .last()
          .addClass("active");
        $("#bg .slide")
          .removeClass("active")
          .last()
          .addClass("active");
        $("#image .img")
          .removeClass("active")
          .last()
          .addClass("active");
        $(".quote")
          .removeClass("active")
          .last()
          .addClass("active");
      } else {
        $(".active")
          .removeClass("active")
          .prev()
          .addClass("active");
      }
    }
  });
});

      </script>
    
    <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





<!-- <div class="row flex-wrap justify-content-center gx-0 main-products">
    <div class="col-md-6 col-12">
        <div class="content-products">
            <a href="{{ route('consumer') }}">
                <h1 class="heading">
                    Consumer
                </h1>
                <div class="content-products-img">
                    <img src="https://orionlightingpvtltd.com/assets/images/consumer.webp" alt="" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="content-products">
            <a href="{{ route('professional') }}">
                <h1 class="heading">
                    Professional
                </h1>
                <div class="content-products-img">
                    <img src="https://orionlightingpvtltd.com/assets/images/professional.jpg" alt="" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
</div> -->


@endsection