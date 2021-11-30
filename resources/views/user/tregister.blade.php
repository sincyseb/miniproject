<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>College Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>contact@company.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>College Management<em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="/">Home
                  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Student Register</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/tregister">Teacher Register
                <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item dropdown ">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login
                <span class="sr-only">(current)</span>
                </a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/tlogin">Teacher Login</a>
                    <a class="dropdown-item" href="/login" >Student Login</a>
                    <a class="dropdown-item" href="/alogin">Admin Login</a>
                    <!-- <a class="dropdown-item" href="terms.html">Terms</a> -->
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Teacher Register</h1>
            <!-- <span>feel free to send us a message now!</span> -->
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-12">
      <div class="container"> 
            <div class="contact-form">
              <form id="terg" action="terg" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Name:
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      E-mail:
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Permanent Address:
                      <textarea name="paddress" rows="6" class="form-control" id="address" placeholder="Your permanent address" required=""></textarea><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Current Address:
                      <textarea name="caddress" rows="6" class="form-control" id="address" placeholder="Your Current address" required=""></textarea><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Qualification:
                      <input name="qul"  class="form-control" id="qul" placeholder="Your Qualification" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Date of Birth:
                      <input name="dob" type="date" class="form-control" id="dob" placeholder="Date of birth" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Pin Code:
                      <input name="pin" type="text" class="form-control" id="pin" placeholder="Your pincode" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Gender: <br>
                      Male<input type="radio" value="male" name="gender">
                    Female<input type="radio" value="female" name="gender">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      District: <br>
                      <select name="dis" id="dis">
                        <option selected="selected" disabled="disabled" value="">Select District</option>
                        <option value="Trivandrum">Trivandrum</option>
                        <option value="Kollam">Kollam</option>
                        <option value="pathanamthitta">Pathanamthitta</option>
                        <option value="Alappuzha">Alappuzha</option>
                        <option value="Kottayam">Kottayam</option>
                        <option value="Ernakulam">Eranakulam</option>
                        <option value="Idukki">Idukki</option>
                        <option value="Thrissur">Thrissur</option>
                        <option value="malappuram">Malappuram</option>
                        <option value="palakkad">Palakkad</option>
                        <option value="kozhikkode">Kozhikkode</option>
                        <option value="wayanad">Wayanad</option>
                        <option value="kannoor">Kannoor</option>
                        <option value="kasargod">Kasargod</option>
                      </select>
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Department:
                      <input name="dept" type="text" class="form-control" id="dept" placeholder="Your department" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Contact No:
                      <input name="num" type="text" class="form-control" id="num" placeholder="Your phone no" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Languge: 
                      <br>
                      <input type="checkbox" name="lan[]" value="mal">malayalam
                      <input type="checkbox" name="lan[]" value="hindi">hindi
                      <input type="checkbox" name="lan[]" value="eng">english
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      Password:
                      <input name="pswd" type="password" class="form-control" id="pswd" placeholder="Your password" required=""><br>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button btn btn-info">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
              <a href="#">+1 333 4040 5566</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
              <a href="#">contact@company.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <p>212 Barrington Court New York str <br> USA</p>
              <a href="#">View on Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a <em>message</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <!-- <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> --> -->

    <!-- Footer Starts Here -->
    <footer>
    <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>College management</h4>
            <p> “Live as if you were to die tomorrow. Learn as if you were to live forever” – Mahatma Gandhi</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <!-- <div class="col-md-4 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div> -->
          <div class="col-md-4 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">Products</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>