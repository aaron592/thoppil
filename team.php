<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Our Team</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body id="myPage">

<!-- Sidebar on click -->


<!-- Navbar -->


<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets\images\biblebackground.jpg" alt="boat" style="width:100%;min-height:350px;max-height:550px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS"><img src="assets\images\newlogo.png" class="logo" alt="Your logo" title="Your logo" style="height:70px;" /></button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! ..<i class="fa fa-smile-o"></i></h4>
     
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="newhome.php">Home Page</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
     <center> <p>&copy; 2020 BIBLE STUDY. All Rights Reserved. Design by <a
                    href="https://aaron592.github.io/thoppil/"><br>Aaron Thomas</a></p></center>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team </p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="assets\images\photo4.jpg" alt="Boss" style="width:36%" class="w3-circle w3-hover-opacity" onmousedown="alert('This image is copyrighted!'); return false;" />
  <h3>John Thomas</h3>
  <p>Founder</p>
</div>

<div class="w3-quarter">
  <img src="assets\images\myphoto1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity" onmousedown="alert('This image is copyrighted!'); return false;" />
  <h3>Aaron Thomas</h3>
  <p>Team Member</p>
</div>

<div class="w3-quarter">
  <img src="assets\images\alona.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity" onmousedown="alert('This image is copyrighted!'); return false;" />
  <h3>Alona John</h3>
  <p>Team Member</p>
</div>

<div class="w3-quarter">
  <img src="assets\images\pic4.jpg" alt="Boss" style="width:38%" class="w3-circle w3-hover-opacity" onmousedown="alert('This image is copyrighted!'); return false;" />
  <h3>Anitha John</h3>
  <p>Team Member</p>
</div>

</div>
</div>

<!-- Work Row -->


<!-- Container -->

  </div>
</div>
 <section class="w3l-market-footer">
        <footer class="footer-28">
          <div class="footer-bg-layer">
            <div class="container py-lg-3">
              <div class="row footer-top-28">
                <div class="col-md-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Contact information</h6>
                  <ul>
                    <li>
                      <p><strong>Address</strong> : Thoppil Peedikayil ,Karthikappally ,Kerala ,India</p>
                    </li>
                    <li>
                      <p><strong>Phone</strong> : <a href="tel:+404-11-22-89">+919539539765</a></p>
                    </li>
                    <li>
                      <p><strong>Email</strong> : <a href="mailto:example@mail.com">tjohn8@yahoo.com</a></p>
                    </li>
                  </ul>

                  <div class="main-social-footer-28 mt-3">
                    <ul class="social-icons">
                      <li class="facebook">
                        <a href="#link" title="Facebook">
                          <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="twitter">
                        <a href="#link" title="Twitter">
                          <span class="fa fa-twitter" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="dribbble">
                        <a href="#link" title="Dribbble">
                          <span class="fa fa-dribbble" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="google">
                        <a href="#link" title="Google">
                          <span class="fa fa-google" aria-hidden="true"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Our missions</h6>
                      <ul>
                        <li><a href="mission.php">About</a></li>
                        <li><a href="#blog.html">Blog Posts</a></li>
                        <li><a href="#pricing.html">FAQ</a></li>
                      </ul>
                    </div>
                    
                   <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Support</h6>
                      <ul>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="team.php">Our team</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
              <div class="container">
                <p class="copy-footer-28 text-center"> &copy; 2020 BIBLE STUDY. All Rights Reserved. Design by <a
                    href="https://aaron592.github.io/thoppil/"><br>Aaron Thomas</a></p>
              </div>
            </div>
          </div>
        </footer>

<!-- Image of location/map -->


<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
