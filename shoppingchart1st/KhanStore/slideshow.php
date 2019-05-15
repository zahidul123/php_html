<style>

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
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

/* Fading animation */
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="boytwo.jpg" style="width:100% ">
  <div class="text">Male cort</div>
</div>

<div class="mySlides fade">

  <img src="boyone.jpg" style="width:100% ">
  <div class="text">Male jacket</div>
</div>

<div class="mySlides fade">

  <img src="female1.jpg" style="width:100% ">
  <div class="text">Female t_shirt</div>
</div>

<div class="mySlides fade">
  <img src="femal3.jpg" style="width:100% ">
  <div class="text">Female lahenga</div>
</div>

<div class="mySlides fade">

  <img src="female2.jpg" style="width:100% ">
  <div class="text">female t-shirt</div>
</div>

<div class="mySlides fade">

  <img src="samsung.jpg" style="width:100% ">
  <div class="text">Samsung</div>
</div>
<div class="mySlides fade">

  <img src="xiamy.jpg" style="width:100% ">
  <div class="text">Xiomi</div>
</div>
<div class="mySlides fade">

  <img src="lg.jpg" style="width:100%">
  <div class="text">Lg</div>
</div>
</div>
<br>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>