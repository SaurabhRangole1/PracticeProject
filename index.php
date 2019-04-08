<html>
<head>
	<title> Sportyfi.com </title>

	<link rel="stylesheet" type="text/css" href="navigationbar.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--online style shit --->

    <!--slide show css-->
    <style>

        body{ background-color: rgb(105,105,105);}
        .mySlides {display:none;} 
    </style>
	</head>
	<body>
		<!--Navigation Bar-->
		<ul>
       <li><a class="active" href="registration.php">Registration</a></li>
       <li><a href="login.php">login</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
        </ul>




    <div class="w3-container">
     <h1 color="white">Buy Your Dream Car</h1>
     <p> We are selling the cars from last 60 years. We make dreams come true. Buy you first sport car with us</p>
    </div>

    <div class="w3-content w3-display-container">

 <div class="w3-display-container mySlides">
  <img src="1.jpg" style="width:100%" >
     <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
         Bugati Veyron
     </div>
 </div>

<div class="w3-display-container mySlides">
    <img src="2.jpg" style="width:100%">
    <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
     Ferari
    </div>
 </div>

<div class="w3-display-container mySlides">
  <img src="3.jpg" style="width:100%">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Cantenario
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="4.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
    Koensiegge Agera
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="5.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    Porche GT
  </div>
</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>





	</body>
</html>