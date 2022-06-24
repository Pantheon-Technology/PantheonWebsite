<!DOCTYPE html>
<html>
<head>
<title>Portfolio Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left w3-black" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#Photo" onclick="w3_close()" class="w3-bar-item w3-button">Photos</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">My photography</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center w3-light-grey" id="Photo">
    <div class="w3-half">
      <img src="Pictures/MainPhoto1.jpg" alt="Photo" style="width:100%">
      <h3>Main Photo 1</h3>
      <p>Description of photo</p>
    </div>
    <div class="w3-half">
      <img src="Pictures/MainPhoto2.jpg" alt="Photo" style="width:100%">
      <h3>Main Photo 2</h3>
      <p>Description of photo</p>
    </div>
  </div>
  <br>
  <br>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
    <img src="Pictures/MainPhoto2.jpg" alt="Photo" style="width:100%">
      <h3>Small Photo 1</h3>
      <p>Description of photo</p>
    </div>
    <div class="w3-quarter">
      <img src="Pictures/MainPhoto1.jpg" alt="Photo" style="width:100%">
      <h3>Small Photo 2</h3>
      <p>Description of photo</p>
    </div>
    <div class="w3-quarter">
    <img src="Pictures/MainPhoto2.jpg" alt="Photo" style="width:100%">
      <h3>Small Photo 3</h3>
      <p>Description of photo</p>
    </div>
    <div class="w3-quarter">
    <img src="Pictures/MainPhoto1.jpg" alt="Photo" style="width:100%">
      <h3>Small Photo 4</h3>
      <p>Description of photo</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Me, <b>The person behind the camera</b></h3><br>
    <img src="Pictures/photographer.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>Name</b></h4>
      <p>Here is a good place to write a brief description about yourself as a freelancer, a lot of customers may appreciate getting to know you as a person before purchasing your services.</p></div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>Contact Me!</h3>
      <p><a href="https://www.instagram.com/pantheontechnology/"><i class="fa fa-instagram w3-hover-opacity">  Instagram</a></i></p>
      <p><a href="https://twitter.com/PantheonTechCo"> <i class="fa fa-twitter w3-hover-opacity"> Twitter</a></i></p>
      <p><a href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"> - Linked In</a></i><p>
      <p><a href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"> - Email</a></i><p>
    </div>
  
    <div class="w3-third">
      <a href="#Photo" class="w3-centre w3-button w3-black">To the Top!</a>
    </div>

    <div class="w3-third w3-serif">
      <h3>Free Space!</h3>
      <p>
        Feel free to include what you wish here! Perhaps copyright information for your business?
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
