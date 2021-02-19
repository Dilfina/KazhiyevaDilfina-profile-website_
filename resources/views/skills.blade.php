<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dilfina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
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
  	<section class="services" id="services">
    	<div class="heading white">
    		<h2 style="padding-top:50px">Skills</h2>
    		
    	</div>
    	<div class="content">
    		<div class="servicesBx">
    			<img src="<?php echo url('/'); ?>/img/wp1.png">
    			<h2>Web Design</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.</p>
    		</div>

    		<div class="servicesBx">
    			<img src="https://sunploit.com/wp-content/uploads/2015/02/php-icon.png">
    			<h2>PHP</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.</p>
    		</div>

    		<div class="servicesBx">
    			<img src="sp2.png">
    			<h2>Spring Boot</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.</p>
    		</div>

    		<div class="servicesBx">
    			<img src="<?php echo url('/'); ?>/img/db.png">
    			<h2>SQL/MySQL</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.</p>
    		</div>

    		<div class="servicesBx">
    			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1280px-React-icon.svg.png">
    			<h2>React</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.</p>
    		</div>

    		<div class="servicesBx">
    			<img src="https://assets-global.website-files.com/5d9bc5d562ffc2869b470941/5e2b3d0f47a6a22bb7640636_icon-fsl-main.svg">
    			<h2>Angular</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.</p>
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