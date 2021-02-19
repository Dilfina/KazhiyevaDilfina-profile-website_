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
 <section class="contact" id="contact">
      	<div class="heading">
      		<h2 style="color:#f00; padding-top:60px">Contact Me</h2>
      		<p>If you have any questions, you can contact me.</p>
      	</div>
      	<div class="content">
      		<div class="contactInfo">
      			<h3>Contact Info</h3>
      			<div class="contactInfoBx">
      				<div class="box">
      				<div class="icon">
      					<i class="fa fa-map-marker"></i>
      				</div>
      				<div class="text">
      					<h3>Address</h3>
      					<p>Turkey, Istanbul</p>
      				</div>
      			</div>
      			<div class="box">
      				<div class="icon">
      					<i class="fa fa-phone"></i>
      				</div>
      				<div class="text">
      					<h3>Phone</h3>
      					<p>+089-765432100</p>
      				</div>
      			</div>

      			<div class="box">
      				<div class="icon">
      					<i class="fa fa-envelope"></i>
      				</div>
      				<div class="text">
      					<h3>Email</h3>
      					<p>dilfina@gmail.com</p>
      				</div>
      			</div>
      		</div>
      		</div>
      		<div class="formBx">
      			<form>
      				<h3>Message Me</h3>
      				<input type="text" name="" placeholder="Full Name">
      				<input type="email" name="" placeholder="Email">
      				<textarea placeholder="Your Message"></textarea>
      				<input type="submit" value="Send">
      			</form>
      		</div>
      	</div>
      </section>
      <div class="copyright">
      	<p>Created by Dilfina. All Right Reserved.</p>
      </div>
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

