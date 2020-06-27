<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Contact Us</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<div class="w3l-bootstrap-header fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light p-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span class=""></span></a>
         
    <a class="navbar-brand" href="newindex.php">
        <img src="assets\images\newlogo.png" alt="Your logo" title="Your logo" style="height:70px;" />
    </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
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
          <a href="newregister.php" class="login mr-4" style="font-size:18px; padding-left:50px;">Welcome, <?php echo $_SESSION['username'] ?></a>
             <form class="myform" action="newhome.php" method="post">
            <a href="newindex.php" style="padding-left:350px;"><input name="logout" value="Log Out" class="btn btn-primary btn-theme"></a>
			</form>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- contacts -->
<section class="w3l-contact mt-5">
  <div class="contacts-9 py-5 mt-5">
    <div class="container py-lg-3">
      <div class="row top-map">
        <div class="cont-details col-md-5">
          <div class="heading mb-lg-4 mb-4">
            <h3 class="head">Contact us </h3>
          </div>
          <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <p><a href="">+91 9539539765</a></p>

            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-envelope-o"></span>
            </div>
            <div class="cont-right">
              <p><a href="mailto:mailid@mail.com" class="mail">tjohn8@yahoo.com</a></p>
            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-map-marker"></span>
            </div>
            <div class="cont-right">
              <p> Thoppil Peedikayil ,Karthikappally ,Kerala ,India.</p>
            </div>
          </div>
        </div>
        <div class="map-content-9 col-md-7 mt-5 mt-md-0">
          <form action="contact.php" method="post">
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" >First Name</label>
                <input type="text" class="form-control" name="firstname" id="w3lName" placeholder="" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" >Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" >Your Email ID</label>
                <input type="email" class="form-control" name="emailid" id="w3lSender" placeholder="" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" for="w3lPhone">Phone Number</label>
                <input type="tel" class="form-control" name="phonenumber" id="w3lPhone" placeholder="" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="w3lSubject">Subject</label>
              <input type="text" class="form-control" name="subject" id="w3lSubject" placeholder="" required="" >
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="w3lMessage">Message</label>
              <textarea name="message" class="form-control" id="message" placeholder="" required="" ></textarea>
            </div>
            <input name="send" type="submit" class="btn btn-primary btn-contact">
          </form>
<?php
if(isset($_POST['send']))
{
    //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>
 $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $emailid = $_POST['emailid'];
   $phonenumber = $_POST['phonenumber'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

//Database connection
$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contact(firstname, lastname, emailid, phonenumber, subject, message)
	values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssiss",$firstname, $lastname, $emailid, $phonenumber, $subject, $message);
	$stmt->execute();
	echo "Submitted Successfully.....";
	$stmt->close();
	$conn->close();
}
}
?>

        </div>
      </div>
    </div>
  </div>
  
</section>
<!-- //contacts -->
      <!-- footer-28 block -->
      <section class="w3l-market-footer">
        <footer class="footer-28">
          <div class="footer-bg-layer">
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