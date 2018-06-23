
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="common.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

p{
	font-family:Constantia;
	font-size:105%;
	margin-left:10px;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
    width:550px; height:400px; margin:100px 45px 15px; float:left;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container1 {
    padding: 2px 16px;
}

.w3-button,.w3-button1{border:none;display:inline-block;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;
			-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;
}
w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none};
w3-button1:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none};

</style>
</head>
<body>
<header>
<div class="header">

</header>

<div class="topnav" id="myTopnav">

<ul>
  <li><a href="nmenu1trial.php">Home</a></li>
  <li><a href="#news">News</a></li>
   <li class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Featured</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  <li><a href="#about">About Us</a></li>
</ul>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br><br>
  <a href="hoteljc.html">Accomodation</a>
  <a href="florafauna.html">Flora and Fauna</a>
  <a href="placejc1.html">Places of Interest</a>
  <a href="plantrial.html">Plan your Safari</a>
  <a href="reachjcfinal.html">How to reach there?</a>
</div>

<div class="center1">
<div class="card">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/20080507152858561/Deluxe%20Room%204_room.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26" alt="Avatar" style="width:100%" class="hjc1">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/20080507152858561/Deluxe%20Room%202_room.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26" alt="Avatar" style="width:100%" class="hjc1">
	<img src="http://rimghtlak.mmtcdn.com/images/hotels/20080507152858561/Deluxe%20Room%201_room.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26 " alt="Avatar" style="width:100%" class="hjc1">
	<img src=" http://rimghtlak.mmtcdn.com/images/hotels/20080507152858561/Dbl%20Beded%20Room.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26" alt="Avatar" style="width:100%" class="hjc1">
  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
	<p type="text" id="show1"></p>
	<button class="fa fa-thumbs-o-up" onclick="like1()"></button>


  <div class="container1">
    <h3><b>Corbett Tiger Den Resort</b></h3>
    <p>Balipara</p>
  </div>
</div>
<div class="card">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/200701232019327770/1468992367635.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,70" alt="Avatar" style="width:100%" class="hjc2">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/200701232019327770/1461823798098.JPG?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,71" alt="Avatar" style="width:100%" class="hjc2">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/200701232019327770/1489736737639.jpeg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,71" alt="Avatar" style="width:100%" class="hjc2">
  <img src="http://rimghtlak.mmtcdn.com/images/hotels/200701232019327770/1489736699395.jpeg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,71" alt="Avatar" style="width:100%" class="hjc2">
   <button class="w3-button1 w3-display-left" onclick="plusDivs1(-1)">&#10094;</button>
  <button class="w3-button1 w3-display-right" onclick="plusDivs1(1)">&#10095;</button>
	<p type="text" id="show2"></p>
	<button class="fa fa-thumbs-o-up" onclick="like2()"></button>

 <div class="container1">
    <h3><b>Corbett Riverside Resort</b></h3>
    <p>Corbett</p>

  </div>
</div>

<div class="card">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/201108311149102997/1465900934084.JPG?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,71" alt="Avatar" style="width:100%" class="hjc3">
  <img src="http://rimghtlak.mmtcdn.com/images/hotels/201108311149102997/1465901014036.JPG?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,70" alt="Avatar" style="width:100%" class="hjc3">
  <img src="http://rimghtlak.mmtcdn.com/images/hotels/201108311149102997/1465901020643.JPG?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,71" alt="Avatar" style="width:100%" class="hjc3">
  <img src="http://rimghtlak.mmtcdn.com/images/hotels/201108311149102997/1465901219720.JPG?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,71" alt="Avatar" style="width:100%" class="hjc3">
  <button class="w3-button w3-display-left" onclick="plusDivs2(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs2(1)">&#10095;</button>
	<p type="text" id="show3"></p>
	<button class="fa fa-thumbs-o-up" onclick="like3()"></button>

 <div class="container1">
    <h3><b>Krishna Wilderness Retreat</b></h3>
    <p>Dhikuli,Ram Nagar</p>
  </div>
</div>


<div class="card">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/201212131521547548/Aahana_The-Corbett_Wilderness_Exterior_View_Deluxe_room.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26" alt="Avatar" style="width:100%" class="hjc4">
  <img src="https://rimghtlak.mmtcdn.com/images/hotels/201212131521547548/13.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26" alt="Avatar" style="width:100%" class="hjc4">
  <img src="http://rimghtlak.mmtcdn.com/images/hotels/201212131521547548/Exterior%20View.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26" alt="Avatar" style="width:100%" class="hjc4">
  <img src="http://rimghtlak.mmtcdn.com/images/hotels/201212131521547548/7.jpg?interpolation=progressive-bicubic&output-quality=75&downsize=573:*&crop=573:240;0,26" alt="Avatar" style="width:100%" class="hjc4">
  <button class="w3-button w3-display-left" onclick="plusDivs3(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs3(1)">&#10095;</button>
	<p type="text" id="show4"></p>
	<button class="fa fa-thumbs-o-up" onclick="like4()"></button>

 <div class="container1">
    <h3><b>Aahana the Corbett</b></h3>
    <p>Dhikuli,Ram Nagar</p>
  </div>
</div>
</div>
<script>
/* For LIKE BUTTON*/
var likes1=0;
function like1(){
document.getElementById("show1").innerHTML=likes1;
likes1+=1;
}

var likes2=0;
function like2(){
document.getElementById("show2").innerHTML=likes2;
likes2+=1;
}

var likes3=0;
function like3(){
document.getElementById("show3").innerHTML=likes3;
likes3+=1;
}

var likes4=0;
function like4(){
document.getElementById("show4").innerHTML=likes4;
likes4+=1;
}
//for slider 1
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("hjc1");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}


//for slider 2
var slideIndex = 1;
showDivs1(slideIndex);

function plusDivs1(n) {
  showDivs1(slideIndex += n);
}

function showDivs1(n) {
  var i;
  var x = document.getElementsByClassName("hjc2");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}


var slideIndex = 1;
showDivs1(slideIndex);

function plusDivs1(n) {
  showDivs1(slideIndex += n);
}


//for slider 3
var slideIndex = 1;
showDivs2(slideIndex);

function plusDivs2(n) {
  showDivs2(slideIndex += n);
}

function showDivs2(n) {
  var i;
  var x = document.getElementsByClassName("hjc3");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}


var slideIndex = 1;
showDivs2(slideIndex);

function plusDivs2(n) {
  showDivs2(slideIndex += n);
}

//for slider 4
var slideIndex = 1;
showDivs3(slideIndex);

function plusDivs3(n) {
  showDivs3(slideIndex += n);
}

function showDivs3(n) {
  var i;
  var x = document.getElementsByClassName("hjc4");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}


var slideIndex = 1;
showDivs3(slideIndex);

function plusDivs3(n) {
  showDivs3(slideIndex += n);
}


    //document.getElementById("myButton").onclick = function () {
      //  window.location.href = "C:\index.php";
    //};
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


</script>
</body>
</html>
