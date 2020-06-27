<?php 
session_start();

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>ABOUT</title>
  <!-- web fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
  <!-- //web fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <style>
    /* Styles for dialog window */
    #small-dialog {
      background: white;
      padding: 5px;
      max-width: 750px;
      margin: 40px auto;
      position: relative;
    }

    div#small-dialog iframe {
      width: 100%;
      height: 400px;
      display: block;
    }


    /**
 * Fade-zoom animation for first dialog
 */

    /* start state */
    .my-mfp-zoom-in .zoom-anim-dialog {
      opacity: 0;

      -webkit-transition: all 0.2s ease-in-out;
      -moz-transition: all 0.2s ease-in-out;
      -o-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;



      -webkit-transform: scale(0.8);
      -moz-transform: scale(0.8);
      -ms-transform: scale(0.8);
      -o-transform: scale(0.8);
      transform: scale(0.8);
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
      opacity: 1;

      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
      -webkit-transform: scale(0.8);
      -moz-transform: scale(0.8);
      -ms-transform: scale(0.8);
      -o-transform: scale(0.8);
      transform: scale(0.8);

      opacity: 0;
    }

    /* Dark overlay, start state */
    .my-mfp-zoom-in.mfp-bg {
      opacity: 0;
      -webkit-transition: opacity 0.3s ease-out;
      -moz-transition: opacity 0.3s ease-out;
      -o-transition: opacity 0.3s ease-out;
      transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready.mfp-bg {
      opacity: 0.8;
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing.mfp-bg {
      opacity: 0;
    }



    /**
 * Fade-move animation for second dialog
 */

    /* at start */
    .my-mfp-slide-bottom .zoom-anim-dialog {
      opacity: 0;
      -webkit-transition: all 0.2s ease-out;
      -moz-transition: all 0.2s ease-out;
      -o-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;

      -webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      transform: translateY(-20px) perspective(600px) rotateX(10deg);

    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
      opacity: 1;
      -webkit-transform: translateY(0) perspective(600px) rotateX(0);
      -moz-transform: translateY(0) perspective(600px) rotateX(0);
      -ms-transform: translateY(0) perspective(600px) rotateX(0);
      -o-transform: translateY(0) perspective(600px) rotateX(0);
      transform: translateY(0) perspective(600px) rotateX(0);
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
      opacity: 0;

      -webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      transform: translateY(-10px) perspective(600px) rotateX(10deg);
    }

    /* Dark overlay, start state */
    .my-mfp-slide-bottom.mfp-bg {
      opacity: 0;

      -webkit-transition: opacity 0.3s ease-out;
      -moz-transition: opacity 0.3s ease-out;
      -o-transition: opacity 0.3s ease-out;
      transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready.mfp-bg {
      opacity: 0.8;
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing.mfp-bg {
      opacity: 0;
    }
  </style>
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 1rem;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>

<body>
  <div class="w3l-bootstrap-header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light p-2">
      <div class="container">
        <a class="navbar-brand" href="newhome.php"><span class=""></span></a>
          
    <a class="navbar-brand" href="newhome.php">
        <img src="assets\images\newlogo.png" alt="Your logo" title="Your logo" style="height:70px;" />
    </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" style="font-size: 10px;">
            <li class="nav-item active">
              <a class="nav-link" href="newhome.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          <div class="form-inline">
            <a href="newregister.php" class="login mr-4" style="font-size:18px; padding-left:50px;">Welcome,<?php echo $_SESSION['username'] ?> </a>
			 <form class="myform" action="newhome.php" method="post">
            <a href="newindex.php" style="padding-left:350px;"><input name="logout" value="Log Out" class="btn btn-primary btn-theme"></a>
			</form>
          </div>
        </div>
      </div>
    </nav>
  </div>
   <section class="">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
          <!-- <h5>Tagline</h5> -->
          
        </div>
      </div>
    </div>
  </section>
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding-top:80px;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
}


.about-section {
  padding: 10px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1><br>
</div>
<br>



<div class="card">
  <center><img src="assets/images/photo4.jpg" alt="John" style="width:200px; height:300px;"></center>
  <h1>John Thomas</h1>
  <p class="title"> Founder</p>
  <p></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <a href="contact.php"><p><button>Contact</button></p></a>
</div>

  <section class="w3l-about2">
    <div class="features-main py-5">
      <div class="container py-lg-3">
        <div class="row features">
          <div class="col-md-4 feature-1 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>not yet</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Active Programs</h3>
                <p class="feature-text"> </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 feature-2 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>not yet</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Participating Members</h3>
                <p class="feature-text"> </p>

              </div>
            </div>
          </div>
          <div class="col-md-4 feature-3 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>1+</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Partner Agencies</h3>
                <p class="feature-text"> </p>
                <div class="hover">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-about5">
    <div class="py-5">
      <div class="container py-lg-3">
        <div class="heading text-center mx-auto">
          <h3 class="head">Thank you for visiting our website</h3>
          <p class="my-3 head"> May God bless you and your family</p>
        </div>
        <div class="history-info mt-5">
          <div class="position-relative">
            <video width="720" height="320" controls>
  <source src="assets/images/video2.mp4" type="video/mp4">
</video>
            <!-- <a href="#popup-video" class="play-view text-center position-absolute">
						<span class="video-play-icon">
							<span class="fa fa-play"></span>
						</span>
					</a> -->

            
          <div class="history mt-5">
            <h4></h4>
            <p class="mt-3"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
            
  
  <!-- about-block6 -->
  <section class="w3l-about6 py-5">
    <div class="container py-md-3 text-center">
      <div class="heading text-center mx-auto">
        <h3 class="head">ഞങ്ങൾ നിങ്ങൾക്കായി ഇവിടെയുണ്ട് </h3>
        <p class="my-3 head">നിങ്ങൾ‌ പ്രശ്‌നങ്ങൾ‌ നേരിടുന്നുണ്ടെങ്കിൽ‌, നിങ്ങൾ‌ക്ക് ഞങ്ങളുമായി ബന്ധപ്പെടാൻ‌ കഴിയും, നിങ്ങളിൽ‌ നിന്നും ഞങ്ങൾ‌ കേൾക്കാൻ‌ താൽ‌പ്പര്യപ്പെടുന്നു</p>
      </div>
      <div class="buttons mt-4">
        <a href="#url" class="btn btn-primary btn-demo ml-2">ബന്ധപ്പെടുക</a>
      </div>
    </div>
  </section>
  <!-- / about-block6 -->
  <!-- footer-28 block -->
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
                  <p><strong>Phone</strong> : <a href="tel:+404-11-22-89">+91 9539539764</a></p>
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
                  <h6 class="footer-title-28">Our mission</h6>
                  <ul>
                    <li><a href="about.html">About</a></li>
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

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //footer-28 block -->

  <!-- jQuery, Bootstrap JS -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->

  <script src="assets/js/owl.carousel.js"></script>

  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script for owlcarousel -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

</body>

</html>