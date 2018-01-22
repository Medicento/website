<?php
$url = 'https://newsapi.org/v2/everything?sources=medical-news-today&apiKey=32cd906e772f4f9cb72539fbc2a22a79';
 
$contents = file_get_contents($url);
 
if($contents !== false){


$arr = json_decode($contents, true);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>medicento.</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="medicento - your medicine channel" name="description">
    <meta content="Prashant Bhardwaj" name="author">
    <!--Fav-->
    <link href="images/favicon.ico" rel="shortcut icon">
    
    <!--styles-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <img alt="logo" src="images/logo_small.png">
      </div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo" style="margin-top: -13px;">
          <a href="index.html"><h2><b>medicento.</b></h2></a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about">
              <span>About</span>
            </a>
            <a data-scroll="" href="#work">
              <span>Work</span>
            </a>
             <a data-scroll="" href="#services">
              <span>Services</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>Health & Things</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Skills</span>
            </a>
            <a data-scroll="" href="#education">
              <span>Education</span>
            </a>
            <a data-scroll="" href="#testimonial">
              <span>Testimonial</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Blog</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    
    
        

         <section class="grey-bg" style="padding: 17px 0; min-height: 250px;" id="about">
          
          <div class="col-md-12 col-sm-12 col-xs-12 grey-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel2">
                <div class="col-md-12">
                  <br>
                  <br>
                  <h3 class="title-small text-center">
                  <span>Careers at <b>medicento.</b></span>
                </h3>
                  <div class="wrap-about" style="min-height: 136px;">
                    <div class="w-content">
                      <p class="head-about">
                        Medicento is a health tech start-up in pharmaceutical space building up an unified channel for seamless flow of pharmaceutical products using data driven approach.
                      </p>
                    </div>
                  </div>
                </div>
              
               
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>

        <!--EDUCATION-->
        <section class="white-bg" id="education">
            <div class="container">
                <div class="row">
              
                    <div class="col-md-12 content-right">
                        <div class="row">
                            <ul class="listing-item">
                                <li>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="wrap-card">
                                            <div class="card">
                                                <h2 class="year">
                                                    Sales Executive
                                                </h2>
                                                <p class="job">
                                                    Senior
                                                </p>
                            
                                                <hr>
                                                <div class="text-detail">
                                                    <p>Responsibilities</p>
                                                    <p>
                                                        <ul>
                                                            <li>Taking orders from pharmacists</li>
                                                            <li>Experience of pharmaceutical products</li>
                                                            <li>Field sales experience</li>
                                                            <li>Vendor acquisition</li>
                                                        </ul>
                                                    </p>
                                                    <p class="text-center">
                                                        <button href="#senior" data-toggle="modal" data-target=".bs-modal-sm" class="btn btn-default">Apply Now</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="wrap-card">
                                            <div class="card">
                                                <h2 class="year">
                                                    Sales Executive
                                                </h2>
                                                <p class="job">
                                                    Junior
                                                </p>
                            
                                                <hr>
                                                <div class="text-detail">
                                                    <p>Responsibilities</p>
                                                    <p>
                                                        <ul>
                                                            <li>Taking orders from pharmacists</li>
                                                            <li>Experience of pharmaceutical products</li>
                                                            <li>Field sales experience</li>
                                                            <li>Vendor acquisition</li>
                                                        </ul>
                                                    </p>
                                                    <p class="text-center">
                                                        <button href="#junior" data-toggle="modal" data-target=".bs-modal-sm1" class="btn btn-default">Apply Now</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/.EDUCATION END-->

        <hr>
        

        <!--CONTACT-->
       <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Contact</span>
                </h3>
                <p class="content-detail">
                  There are four ways, and only four ways, in which we have contact with the world. We are evaluated and classified by these four contacts: what we do, how we look, what we say, and how we say it.
                </p>

              </div>
              <div class="col-md-9 content-right">
                <form action="mailto:contactus@medicento.com" method="post" enctype="text/plain">
                  <div class="group">
                    <input required="" type="text"><span class="highlight"></span><span class="bar"></span><label>Name</label>
                  </div>
                  <div class="group">
                    <input required="" type="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
                  </div>
                  <div class="group">
                    <textarea required=""></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label>
                  </div>
                  <input id="sendMessage" name="sendMessage" type="submit" value="Send Message">
                </form>
              </div>
            </div>
          </div>
        </section>
        <!--/.CONTACT END-->
        
        <!--FOOTER-->
        <footer>
          <div class="footer-top">
            <ul class="socials">
              <li class="facebook">
                <a href="https://www.facebook.com/medicento" target="_blank" data-hover="Facebook">Facebook</a>
              </li>
              <li class="insta">
                <a href="https://www.instagram.com/medicento" target="_blank" data-hover="Instagram">Instagram</a>
              </li>
              <li class="twitter">
                <a href="https://www.twitter.com/medicento" target="_blank" data-hover="Twitter">Twitter</a>
              </li>
              <li class="WhatsApp">
                <a href="https://api.whatsapp.com/send?phone=919743959497" " target="_blank"  data-hover="WhatsApp">WhatsApp</a>
              </li>
              <li class="linkedin">
                <a href="https://www.linkedin.com/company/13351575/" target="_blank" data-hover="LinkedIn">LinkedIn</a>
              </li>
            </ul>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
               <h3 class="text-center"><b>Email -</b> contactus@medicento.com, <b>Call -</b>+91-9743959497 / 080-41131583</h3>
               <h1 class="text-center"><b>Mediclick Healthcare Services Pvt. Ltd.</b></h1>
              </div>
            </div>
          </div>
        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>
    

    <div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="min-width: 500px;margin-left: -70px;">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
             
              <li class="active"><a href="#senior" data-toggle="tab">Sales Executive (Senior)</a></li>
             
            </ul>
        </div>
      <div class="modal-body" style="padding: 35px;">
        <div id="myTabContent" class="tab-content">
        
        <div class="tab-pane fade active in" id="senior">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->

             <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Name:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="text" placeholder="Full Name" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="Email" class="form-control" type="text" placeholder="demo@example.com" class="input-large" required="">
              </div>
            </div>

             <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Phone:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="text" placeholder="Contact Number" class="input-large" required="">
              </div>
            </div>

             <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Upload CV:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="file" class="input-large" required="">
              </div>
            </div>
            
           
            
            <!-- Password input-->
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Apply</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bs-modal-sm1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="min-width: 500px;margin-left: -70px;">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
             
              <li class="active"><a href="#junior" data-toggle="tab">Sales Executive (Junior)</a></li>
             
            </ul>
        </div>
      <div class="modal-body" style="padding: 35px;">
        <div id="myTabContent" class="tab-content">
        
        <div class="tab-pane fade active in" id="junior">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->

             <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Name:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="text" placeholder="Full Name" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="Email" class="form-control" type="text" placeholder="demo@example.com" class="input-large" required="">
              </div>
            </div>

             <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Phone:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="text" placeholder="Contact Number" class="input-large" required="">
              </div>
            </div>

             <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Upload CV:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="file" class="input-large" required="">
              </div>
            </div>
            
           
            
            <!-- Password input-->
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Apply</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>

    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>