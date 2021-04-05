<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dilfina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url('/'); ?>/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
    	.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
	.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown{
	margin-top:-7px;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
  </head>
  <body>
  	<header>
  		<a href="#" class="logo">DILFINA</a>
  		<div class="toggle" onclick="toggleMenu();"></div>
  		<ul class="menu">
  			<li><a href="{{route('main', app()->getLocale())}}">{{__('Home')}}</a></li>
  			<li><a href="{{route('about', app()->getLocale())}}">{{__('About')}}</a></li>
  			<li><a href="{{route('skills', app()->getLocale())}}">{{__('Skills')}}</a></li>
  			<li><a href="{{route('contact', app()->getLocale())}}">{{__('Contact')}}</a></li>
  			<li>
  				<div class="dropdown">
    <button class="dropbtn">{{__('Language')}} 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="{{route(Route::currentRouteName(), 'en')}}">EN</a>
      <a href="{{route(Route::currentRouteName(), 'fr')}}">FR</a>
      <a href="{{route(Route::currentRouteName(), 'ru')}}">RU</a>
      
    </div>
  </div> 
</div>
  			</li>
  		</ul>
  	</header>
  	<section class="about" id="about">
    	<div class="heading" style="color:white;">
    		<h2 style="color:#f00; padding-top:50px">{{__('About Me')}}</h2>
    	</div>
    	<div class="content">
    		<div class="contentBx w50">
    			<h3 style="color:#f00">{{__('I am a Full Stack Web Developer.')}}</h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur. Sed varius hendrerit imperdiet. Morbi consequat, nibh vel mattis pellentesque, mi nisl condimentum massa, eu rutrum lectus lacus ut elit. Sed condimentum fringilla felis, sit amet imperdiet nulla faucibus id. Proin volutpat enim ac quam porttitor scelerisque. Etiam rhoncus fringilla dignissim. Proin quis erat porttitor, ullamcorper nisl a, accumsan mi.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur.</p>
    		</div>
    		<div class="w50">
    			<img src="https://i.pinimg.com/originals/cd/04/5e/cd045e61fc8a460b3383067cbce112b0.jpg" class="img">
    	</div>
    </div>
    </section>

    <script type="text/javascript">
    		var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
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