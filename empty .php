<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edwardphotographer</title>

	<style type="text/css">
			* {
					font-family: "微軟正黑體"; }
			header {
				font-size: 30px;
				color: rgb(108, 192, 129); }
			.col-lg-4{
				border: 1px solid;
			}	 
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script>
		$(document).ready(function(){
			$("#myphoto").hover(function(){
				$("#PICTURE").attr("src","edig.png");
			});
	
			$("#myig").hover(function(){
				$("#PICTURE").attr("src","yiig.png");
			});

			$("#PICTURE").hover(function(){
				$("#PICTURE").attr("src","DSC_2564.JPG");
			});
			
			$("#PICTURE").click(function(){
				$("#PICTURE").hide();
				$("#PICTURE").fadeIn("slow")
			});
		});
	</script>
</head>

<style>body{background-color: rgb(158, 202, 185);}</style>

<body>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark">
		<a class="navbar-brand" href="#">MENU</a>	

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>	

		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="#about photo">關於我的攝影史</a></li>
				<li class="nav-item"><a class="nav-link" href="#think">攝影理念</a></li>
				<li class="nav-item"><a class="nav-link" href="#youtube">我的作品</a></li>
			</ul>
		</div>
	</nav>

	<main class="container-fluid bg-dark text-white text-light">

		<nav>
			<h4><a href="https://www.instagram.com/edward_photographer/"
				class="text-reset text-decoration-none text-white bg-primary" target="_blank" id="myphoto">我的攝影帳ig網址 </a></h4>
			<h4><a href="https://www.instagram.com/yi_chia_photography/"
				class="text-reset text-decoration-none text-white bg-primary" id="myig">我的圖文帳ig網址 </a></h4>
		</nav>

		<img src="DSC_2564.JPG" height="250" weight="748" alt="照片" 
		     class="img-responsive rounded" id="PICTURE">
		<br><br>

		<div class="row">

		<session  id="about photo" class="col-lg-4">
			<header>關於我的攝影史</header>
			<h6>國一開始接觸單眼相機</h6>
			<h6>高一加入攝影社</h6>
			<h6>高二擔任攝影社教學長</h6>
			<h6>大一加入攝影社擔任儲備幹部</h6>
			<h6>大二擔任攝影社器材部長</h6>
			<h6>E-Mail: <a href="mailyo:chiogen1@gmail.com"
				class="text-reset text-decoration-none text-white bg-info">chiogen1@gmail.com</a> </h6>
		</session>

		<article id="think" class="col-lg-4"> 
			<header>攝影理念</header>
			<h6>攝影無對錯</h6>
			<h6>拍得高興就好</h6>
			<h6>重點是找出自己獨特的風格</h6>
		</article>

		<aside id="youtube" class="col-lg-4"> 
			<header>我的作品影集</header>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/NRDrVDQZnXg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
					class="embed-responsive-item">></iframe>
			</div>
		</aside>

		</div> 

		<footer>
			Copyright ©益嘉的個人網站. All Rights Reserved.
		</footer>
		

	</main>
</body>
</html>