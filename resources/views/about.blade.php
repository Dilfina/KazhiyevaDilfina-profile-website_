<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dilfina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url('/'); ?>/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
  	<header>
  		<a href="#" class="logo">DILFINA</a>
  		<div class="toggle" onclick="toggleMenu();"></div>
  		<ul class="menu">
  			<li><a href="{{route('main')}}">Home</a></li>
  			<li><a href="{{route('about')}}">About</a></li>
  			<li><a href="{{route('skills')}}">Skills</a></li>
  			<li><a href="{{route('contact')}}">Contact</a></li>
  		</ul>
  	</header>
  	<section class="about" id="about">
    	<div class="heading" style="color:white;">
    		<h2 style="color:#f00; padding-top:50px">About Me</h2>
    	</div>
    	<div class="content">
    		<div class="contentBx w50">
    			<h3 style="color:#f00">I'm a Full Stack Web Developer.</h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur. Sed varius hendrerit imperdiet. Morbi consequat, nibh vel mattis pellentesque, mi nisl condimentum massa, eu rutrum lectus lacus ut elit. Sed condimentum fringilla felis, sit amet imperdiet nulla faucibus id. Proin volutpat enim ac quam porttitor scelerisque. Etiam rhoncus fringilla dignissim. Proin quis erat porttitor, ullamcorper nisl a, accumsan mi.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur.</p>
    		</div>
    		<div class="w50">
    			<img src="https://i.pinimg.com/originals/cd/04/5e/cd045e61fc8a460b3383067cbce112b0.jpg" class="img">
    	</div>
    </div>
    </section>

    <script type="text/javascript">
    window.addEventListener('scroll', function () {
    	var header=document.querySelector('header');
    	header.classList.toggle('sticky', window.scrollY > 0);

    });
    function toggleMenu(){
    	var menuToggle=document.querySelector('.toggle');
    	var menu=document.querySelector('.menu');
    	menuToggle.classList.toggle('active');
    	menu.classList.toggle('active');

    }
    </script>
  </body>