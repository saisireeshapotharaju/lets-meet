<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.bg-img {
  background-image: url("bg.jpg");
  min-height: 110%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.text {
  color: #00000;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #ffffff;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div class="bg-img">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="1.jpg" style="width:70%">
  <div class="text">Individual Scheduling</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="2.jpg" style="width:70%">
  <div class="text">Auto-assigned meetings</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="3.jpg" style="width:70%">
  <div class="text">Team member selection</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="4.jpg" style="width:70%">
  <div class="text">Easy Interaction</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); 
}
</script>

</body>
</html> 
