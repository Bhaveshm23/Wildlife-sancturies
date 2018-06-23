<!doctype html>
<html>
<head>
	<title>Menu</title>
	<style>
			
body{
	margin:0;
	padding:0;
	overflow:scroll;
	height:100%;
}		
header .header {
overflow:hidden;
position:relative;
width:100%;
height:70px;
margin:0 auto;
background-color:black;

}


#forcolor{
	background-image:url("http://photoluminary.com/wp-content/uploads/2011/02/green.jpg");
	background-size: 100% ;
    background-repeat: no-repeat;
	overflow:scroll;
}

#demo{
text-align:center;
}

			.center{
						height: 50%;
						padding: 5px 100px 300px 300px;
						margin: 320px 0 0 0;
						position:absolute;
						text-align:center;
						transform :translateY(-50%);
			}
			
			.center input{
							padding:10px;
							border:1px solid blue;
			}
			
			
	
			

			
		
	.flip3D{ width:185px; height:250px; margin:200px 30px 1px; float:left;  }
.flip3D > .front{
	position:absolute;
	-webkit-transform: perspective( 600px ) rotateY( 0deg );
	transform: perspective( 600px ) rotateY( 0deg );
	background:floralwhite; width:185px; height:250px; border-radius: 7px;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .7s linear 0s;
	transition: transform .7s linear 0s;
}
.flip3D > .back{
	position:absolute;
	-webkit-transform: perspective( 600px ) rotateY( 180deg );
	transform: perspective( 600px ) rotateY( 180deg );
	background:floralwhite; width:185px; height:250px; border-radius: 7px;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition: -webkit-transform .7s linear 0s;
	transition: transform .7s linear 0s;
}
.flip3D:hover > .front{
	-webkit-transform: perspective( 600px ) rotateY( -180deg );
	transform: perspective( 600px ) rotateY( -180deg );
}
.flip3D:hover > .back{
	-webkit-transform: perspective( 600px ) rotateY( 0deg );
	transform: perspective( 600px ) rotateY( 0deg );
}
h1{
		font-family:Georgia;
	}

h4{

		font-family:Georgia;
		text-align:center;
		
	
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
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
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}


	
	</style>
</head>

<body>
<?php
	include "header1.php";
?>
<header>
<div class="header">
<div style="color:white;
	float:left;
	padding-left: 10px;
	padding-top: 15px;
	font-size:200%">
Sanctuaries of INDIA
</div>


</header>

<ul>
  <li><a href="http://localhost/project1/nmenu1trial.php">Home</a></li>
 
   <li class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Featured</a><!-- javascript:void(0) - to make browser stay at same page and not go to different page--> 
    <div class="dropdown-content">
      <a href="finalintropageban.html">Bandipur National Park</a>
      <a href="finalintropageran.html">Ranthambore National Park</a>
      <a href="finalintropageper.html">Periyar National Park</a>
    </div>
  </li>
  <li><a href="about.html">About Us</a></li>

</ul>




<div class="center" id="forcolor">

		<div class="flip3D">
  <div class="back">
		<img src="https://s-media-cache-ak0.pinimg.com/originals/f4/1c/97/f41c976779280480dc07d1f6fc8d7343.jpg" style="width:185px;height:120px;"/>
		<p>Located in the Nainital District of Uttrakhand, <a href="finalintropagejcpara.html">Jim Corbett National Park</a> is a home to the Bengal tiger, Leopard, Leopard cat, Elephants,Deer etc.</div></p>
  <div class="front">
		<img src="https://www.makemytrip.com/blog/sites/default/files/images/Corbett-National-Park-tiger.jpg" style="width:185px;height:180px;"/>
		<h3>Corbett National Park</h3>
  </div>
</div>
<div class="flip3D">
  <div class="back">
		<img src="https://www.groupouting.com/wp-content/uploads/2016/10/Kaziranga-National-Park-3.jpg" style="width:185px;height:120px;"/>
		<p>It has the largest population of the Indian one-horned Rhinoceros and Tigers in the world, the <a href="kaziintro.html">Kaziranga National Park</a> is located in Assam.</div></p>
	<div class="front">
		<img src="http://3.bp.blogspot.com/-GXKHqh2CBl4/VnO8zWg-EJI/AAAAAAAABMQ/-CbIo_opVdw/s1600/Kaziranga%2BNational%2BPark%2BPicture%2B5.jpg" style="width:185px;height:180px;"/>
		<h3>Kaziranga National Park</h3>
  </div>
</div>
<div class="flip3D">
  <div class="back">
			<img src="http://3.bp.blogspot.com/_uBk4j-Vj8ac/TR8l7tbKMnI/AAAAAAAAAMs/GrWlEY9ha2M/s1600/Asiatic-Lions-Sasan-Gir-National-Park-Wildlife-Sanctuary-Jungle-Forest-Junagadh-News-Saurashtra-Kathiyavad-Gujarat-India.jpg" style="width:185px;height:120px;"/>
			<p><a href="girintro.html">Sasan Gir National Park</a>is one of the most popular national parks in Gujarat for its thriving population of the Asiatic Lion.</div></p>
  <div class="front">
		<img src="http://www.hostgator.co.in/files/writeable/uploads/hostgator12736/image/lion_tribe_judah.jpg" style="width:185px;height:180px;"/>
		<h3>Sasan Gir National Park</h3>
  </div>
	</div>

<div class="flip3D">
  <div class="back">
			<img src="http://kunzum.com/wp-content/uploads/2011/05/karnataka-bhadra-safari-230311-0143.jpg" style="width:185px;height:120px;"/>
			<p><a href="finalintropagebha.html">Bhadra Wildlife Sanctuary</a> is a must-visit place. This is the right place for travellers to experience and admire the wilderness and the miracles of nature.</div></p>
  <div class="front">
		<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSJdPg9ENAptY2M25jNEJ_gkwzTgxruXsW7mpPVJYwPE4ZMfpMA" style="width:185px;height:180px;"/>
		<h3>Bhadra Wildlife Sanctuary</h3>
  </div>
	</div>

<div class="flip3D">
  <div class="back">
			<img src="https://static1.squarespace.com/static/51c17a30e4b0e7a2ae97674d/5289db21e4b0c442cc4dd130/52b030f6e4b01342092b6287/1387278624655/2.-8290959637_146720a63c_o.jpg" style="width:185px;height:120px;"/>
			<p><a href="Sariskaintro.html">Sariska National Park</a> was the first national park in the world, which was successfully adapted by the Royal Bengal Tigers as their natural habitat.</div></p>
  <div class="front">
		<img src="https://s-media-cache-ak0.pinimg.com/736x/fe/36/0e/fe360e07d7ccdf3e477a26eb9c0ae6f7.jpg" style="width:185px;height:180px;"/>
		<h3>Sariska National Park</h3>
  </div>
	</div>

<div class="flip3D">
  <div class="back">
			<img src="http://indiagetaways.co.in/wp-content/uploads/2015/07/Kanha-National-Park-Source-kanha-national-park.jpg" style="width:185px;height:120px;"/>
			<p><a href="kanhaintro.html">Kanha National Park</a> is well known for saving the almost extinct species ,the "Barasingha".It is one of the most well maintained national parks in Asia. </div></p>
  <div class="front">
		<img src="http://www.naturesafariindia.com/images/destinations/kanha-wildlife.jpg" style="width:185px;height:180px;"/>
		<h3>Kanha National Park</h3>
  </div>
	</div>
	
	
</div>


</body>
</html>