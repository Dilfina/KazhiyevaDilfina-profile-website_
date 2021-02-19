<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dilfina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url('/'); ?>/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>"
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
    <section class="banner" id="home">
    	<div class="textBx">
    		<h2>Hello, I'm<br><span> Dilfina Kazhiyeva.<span></h2>
    		<h3>I'm a Full Stack Web Developer.</h3>
    		<a href="#" class="btn">Get In Touch</a>

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