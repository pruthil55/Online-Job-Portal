<?php 
  if(!isset($_SESSION)) { session_start(); }
  if(isset($_SESSION['js_id'])){
    header('Location: homePage.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/index.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>CDPC Portal</title>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#myPage">CDPC Job Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li>
            <a class="nav-link nav_bar" href="#register">Register</a>
          </li>
          <li>
            <a class="nav-link nav_bar" href="#R_jobs">Recent Jobs</a>
          </li>
          <li>
            <a class="nav-link nav_bar" href="#Companies">Companies</a>
          </li>
          <li>
            <a class="nav-link nav_bar" href="#Aboutus">About Us</a>
          </li>
          <li>
            <a class="nav-link nav_bar" href="#Contactus">Contact Us</a>
          </li>
        </ul>

        <ul class="navbar-nav nav-item align-self-end">
          <a class="nav-link " href="#" data-toggle="modal" data-target="#login">
            <i class="fas fa-sign-in-alt"></i>
            Login
          </a>
        </ul>
      </div>
    </nav>

    <div class="cantainer text-center bg-primary">
      <h1>CDPC Job Portal</h1> 
      <p>Job Easy, Get Easy</p> 
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Find Jobs according to skills, locations and companies" required>
          <div class="input-group-btn">
            <button type="button" class="btn btn-danger">Search</button>
          </div>
        </div>
      </form>
    </div>

    <div id="register" class="cantainer-fluid text-center">
      <h4 style="padding-top: 60px; font-weight: 600; font-size: 30px;">Register</h4>
      <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <div class="panel text-center">
                <div class="panel-heading">
                    <h1>Job Seekers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 15px">Helps passive and active jobseekers find better jobs. Get connected with over 450 recruiters.
                        Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                </div>
                <div class="panel-footer">
                    <a href="js_registration.php"><button class="btn btn-primary">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel text-center">
                <div class="panel-heading">
                    <h1>Employers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 15px">Register today and post a job in easy steps and start receiving applications the same day.
                        Find the right candidates easily and quickly through our Search feature.</p>
                </div>
                <div class="panel-footer text-center">
                   <a href="e_registration.php"> <button class="btn btn-primary">Sign Up</button></a>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div id="R_jobs" class="cantainer-fluid">
      <h4 class="text-center" style="padding-top: 60px; font-weight: 600; font-size: 30px;">Recent Jobs</h4>
      <div class="row d-flex justify-content-center" style="margin-top: 20px;">

        <div class="col-sm-3">
          <div class="r_jobs">
            <div class="row" style="margin-top: 10px">
              <div style="margin-left: 15px;">
                <h6 style="font-weight: 600">React Native Devloper</h6>
                <p style="font-size: 14px;font-weight: 600;color: #838383;line-height: 5px;">Mavoix Solution</p>
              </div>
              <img class="c_logo" src="https://www.mavoix.in/img/logos/mavoix.png" alt="company logo">
            </div>
            <div style="background-color: #838383;height: 1px"></div>
            <div style="margin-top: 5px">
              <p style="font-size: 14px;font-weight: 600">Package:<span style="color: #838383"> 4.5 lac per annum</span></p>
              <p style="font-size: 14px;font-weight: 600">Start Date:<span style="color: #838383"> 11 Nov, 2020</span></p>
            </div>
            <div style="background-color: #838383;height: 1px"></div>
            <div style="margin-top: 10px;margin-bottom: 5px">
              <p style="font-size: 12px;line-height: 0px;font-weight: 600;color: #838383;display: inline-block;">Apply by 12 jun</p>
              <div class="apply">
                <button type="button" class="btn btn-secondary" style="padding-left: 5px;padding-right: 5px;padding-top: 0px;padding-bottom: 2px">Know More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="r_jobs">
            <div class="row" style="margin-top: 10px">
              <div style="margin-left: 15px;">
                <h6 style="font-weight: 600">React Native Devloper</h6>
                <p style="font-size: 14px;font-weight: 600;color: #838383;line-height: 5px;">Mavoix Solution</p>
              </div>
              <img class="c_logo" src="https://www.mavoix.in/img/logos/mavoix.png" alt="company logo">
            </div>
            <div style="background-color: #838383;height: 1px"></div>
            <div style="margin-top: 5px">
              <p style="font-size: 14px;font-weight: 600">Package:<span style="color: #838383"> 4.5 lac per annum</span></p>
              <p style="font-size: 14px;font-weight: 600">Start Date:<span style="color: #838383"> 11 Nov, 2020</span></p>
            </div>
            <div style="background-color: #838383;height: 1px"></div>
            <div style="margin-top: 10px;margin-bottom: 5px">
              <p style="font-size: 12px;line-height: 0px;font-weight: 600;color: #838383;display: inline-block;">Apply by 12 jun</p>
              <div class="apply">
                <button type="button" class="btn btn-secondary" style="padding-left: 5px;padding-right: 5px;padding-top: 0px;padding-bottom: 2px">Know More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="r_jobs">
            <div class="row" style="margin-top: 10px">
              <div style="margin-left: 15px;">
                <h6 style="font-weight: 600">React Native Devloper</h6>
                <p style="font-size: 14px;font-weight: 600;color: #838383;line-height: 5px;">Mavoix Solution</p>
              </div>
              <img class="c_logo" src="https://www.mavoix.in/img/logos/mavoix.png" alt="company logo">
            </div>
            <div style="background-color: #838383;height: 1px"></div>
            <div style="margin-top: 5px">
              <p style="font-size: 14px;font-weight: 600">Package:<span style="color: #838383"> 4.5 lac per annum</span></p>
              <p style="font-size: 14px;font-weight: 600">Start Date:<span style="color: #838383"> 11 Nov, 2020</span></p>
            </div>
            <div style="background-color: #838383;height: 1px"></div>
            <div style="margin-top: 10px;margin-bottom: 5px">
              <p style="font-size: 12px;line-height: 0px;font-weight: 600;color: #838383;display: inline-block;">Apply by 12 jun</p>
              <div class="apply">
                <button type="button" class="btn btn-secondary" style="padding-left: 5px;padding-right: 5px;padding-top: 0px;padding-bottom: 2px">Know More</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div id="Companies" class="cantainer-fluid">
      <h4 class="text-center" style="font-weight: 600; font-size: 30px;padding-top: 60px;">Companies</h4>
      <div class="row d-flex justify-content-center" style="margin-left: 10px;margin-right: 10px">
        <button type="button" class="btn btn-dark" style="width: 120px; height: 85px;margin-left: 10px;margin-top: 10px"><span>TATA</span> </br><span>Consultancy</span> </br><span>Services</span></button>
        <button type="button" class="btn btn-success" style="width: 120px; height: 85px;margin-left: 10px;margin-top: 10px"><span>Crest</span> </br><span>Data</span> </br><span>Systems</span></button>
        <button type="button" class="btn btn-danger" style="width: 120px; height: 85px;margin-left: 10px;margin-top: 10px"><span>Larsen</span> </br><span>&</span> </br><span>Toubro</span></button>
        <button type="button" class="btn btn-warning" style="width: 120px; height: 85px;margin-left: 10px;margin-top: 10px"><span>Infosys</span></button>
        <button type="button" class="btn btn-info" style="width: 120px; height: 85px;margin-left: 10px;margin-top: 10px"><span>Adani</span> </br><span>Group</span></button>
        <button type="button" class="btn btn-light" style="width: 120px; height: 85px;margin-left: 10px;margin-top: 10px"><span>Aditya</span> </br><span>Birla</span> </br><span>Group</span></button>
      </div>
    </div>    

    <div id="Aboutus" class="cantainer-fluid">
      <h4 class="text-center" style="font-weight: 600; font-size: 30px;padding-top: 60px;">About Us</h4>
      <div class="row d-flex justify-content-center">
        <div class="col-sm-4 aboutus">
          <img style="width: 90%; height: 190px;margin-left: 5%" src="https://www.susangreenecopywriter.com/wp-content/uploads/2013/01/iStock_000039291924_Medium.jpg" alt="about us">
        </div>
        <div class="col-sm-7 aboutus">
          <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>

    <div id="Contactus" class="container-fluid">
      <h4 class="text-center" style="font-weight: 600; font-size: 30px;padding-top: 60px;">Contact Us</h4>
      <div class="row bg-grey" style="margin-top: 15px;padding-top: 15px;">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="fas fa-map-marker-alt"></span> Changa-388 421, Anand, Gujarat, INDIA</p>
          <p><span class="fas fa-mobile-alt"></span> 02697-265011</p>
          <p><span class="fas fa-mobile-alt"></span> 02697-265021</p>
          <p><span class="fas fa-envelope"></span> info@charusat.ac.in</p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Modal for Login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="row">
            <img style="width: 200px; height: 50px;display: block;margin: auto;margin-top: 20px;" src="https://www.charusat.ac.in/images/logo.png" alt="charusat">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h5 class="modal-title text-center" style="margin-top: 10px;margin-bottom: 10px;">Login as</h5>
          <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="js_login-tab" data-toggle="tab" href="#js_login" role="tab" aria-controls="js_login"
                  aria-selected="true">Job Seekers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="e_login-tab" data-toggle="tab" href="#e_login" role="tab" aria-controls="e_login"
                  aria-selected="false">Employers</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" style="color: #131313" id="js_login" role="tabpanel" aria-labelledby="js_login-tab">
                <form name="f1" action = "php/js_login.php" method = "POST">
                  <div class="cantainer-fluid">
                    <p style="font-size: 16px;margin-left: 17px;margin-top: 10px;">E-mail ID :-</p>
                    <input type="email" name="js_email" class="form-control" style="margin-left: 16px;margin-right: 16px;width: 90%;" placeholder="Enter Your E-mail Address" required>
                    <p style="font-size: 16px;margin-left: 17px;margin-top: 10px;">Password :-</p>
                    <input type="password" name="js_password" class="form-control" style="margin-left: 16px;margin-right: 16px;width: 90%;" placeholder="Enter Your Password" required>
                    <div class="m_footer" align="right">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" style="color: #131313" id="e_login" role="tabpanel" aria-labelledby="e_login-tab">
                <div class="cantainer-fluid">
                  <p style="font-size: 16px;margin-left: 17px;margin-top: 10px;">E-mail ID :-</p>
                  <input type="text" class="form-control" style="margin-left: 16px;margin-right: 16px;width: 90%;" placeholder="Enter Your E-mail Address" required>
                  <p style="font-size: 16px;margin-left: 17px;margin-top: 10px;">Password :-</p>
                  <input type="text" class="form-control" style="margin-left: 16px;margin-right: 16px;width: 90%;" placeholder="Enter Your Password" required>
                  <div class="m_footer" align="right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Login</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>