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
          <a href="index.html"><h2><b>mediblog.</b></h2></a>
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
                  <span>Welcome To <b>mediblog.</b></span>
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
                              Atlantic Health
                            </h2>
                            <p class="job">
                              Atlantic magazine blog
                            </p>
                            
                            <hr>
                            <div class="text-detail">
                              <p>
                                This Atlantic magazine blog features counterintuitive research findings, emerging public health problems, questionable practices  and articles that explore medicine from historical, anthropological and sociological perspectives. It's easy to linger here, reading stories about accidental medical breakthroughs  and evolving medical theories. Readers can also find information about novel medical experiments and the struggle to eradicate Ebola.
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
                             Becker's Hospital Review
                            </h2>
                            <p class="job">
                             Becker's Hospital
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Aimed at industry leaders, Becker's Hospital Review External link  keeps pace with healthcare's ever-changing legal and business landscape. The Review diligently tracks infection control efforts   and makes note of emerging epidemics. The latest thinking on improving patient experience  and other measures of quality care can be found here as well.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Healthy Living
                            </h2>
                            <p class="job">
                              Huffington 
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                This blog takes a pop culture approach to healthcare with a multitude of stories about healing foods and spices, new fitness regimes and healthy lifestyles. The blog culls healthcare information from television broadcasts, the Internet, medical experts, alternative health practitioners, wire services and an array of other sources. You'll find posts about the supplement industry, stress-busting foods and experimental diets .
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
                              Vital Signs
                            </h2>
                            <p class="job">
                              Modern Healthcare
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                With straightforward prose and catchy headlines, this blog explores the political, financial and technological dimensions of the healthcare industry. It encompasses a range of thorny healthcare issues, from operating room inefficiencies and healthcare industry fraud to primers on what Medicare pays for equipment and fixes for meaningful use rules. The comings and goings of healthcare CEOs and other leaders are also reported.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
               <div class="col-md-12 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Atlantic Health
                            </h2>
                            <p class="job">
                              Atlantic magazine blog
                            </p>
                            
                            <hr>
                            <div class="text-detail">
                              <p>
                                This Atlantic magazine blog features counterintuitive research findings, emerging public health problems, questionable practices  and articles that explore medicine from historical, anthropological and sociological perspectives. It's easy to linger here, reading stories about accidental medical breakthroughs  and evolving medical theories. Readers can also find information about novel medical experiments and the struggle to eradicate Ebola.
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
                             Becker's Hospital Review
                            </h2>
                            <p class="job">
                             Becker's Hospital
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Aimed at industry leaders, Becker's Hospital Review External link  keeps pace with healthcare's ever-changing legal and business landscape. The Review diligently tracks infection control efforts   and makes note of emerging epidemics. The latest thinking on improving patient experience  and other measures of quality care can be found here as well.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Healthy Living
                            </h2>
                            <p class="job">
                              Huffington 
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                This blog takes a pop culture approach to healthcare with a multitude of stories about healing foods and spices, new fitness regimes and healthy lifestyles. The blog culls healthcare information from television broadcasts, the Internet, medical experts, alternative health practitioners, wire services and an array of other sources. You'll find posts about the supplement industry, stress-busting foods and experimental diets .
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
                              Vital Signs
                            </h2>
                            <p class="job">
                              Modern Healthcare
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                With straightforward prose and catchy headlines, this blog explores the political, financial and technological dimensions of the healthcare industry. It encompasses a range of thorny healthcare issues, from operating room inefficiencies and healthcare industry fraud to primers on what Medicare pays for equipment and fixes for meaningful use rules. The comings and goings of healthcare CEOs and other leaders are also reported.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
               <div class="col-md-12 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Atlantic Health
                            </h2>
                            <p class="job">
                              Atlantic magazine blog
                            </p>
                            
                            <hr>
                            <div class="text-detail">
                              <p>
                                This Atlantic magazine blog features counterintuitive research findings, emerging public health problems, questionable practices  and articles that explore medicine from historical, anthropological and sociological perspectives. It's easy to linger here, reading stories about accidental medical breakthroughs  and evolving medical theories. Readers can also find information about novel medical experiments and the struggle to eradicate Ebola.
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
                             Becker's Hospital Review
                            </h2>
                            <p class="job">
                             Becker's Hospital
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Aimed at industry leaders, Becker's Hospital Review External link  keeps pace with healthcare's ever-changing legal and business landscape. The Review diligently tracks infection control efforts   and makes note of emerging epidemics. The latest thinking on improving patient experience  and other measures of quality care can be found here as well.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Healthy Living
                            </h2>
                            <p class="job">
                              Huffington 
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                This blog takes a pop culture approach to healthcare with a multitude of stories about healing foods and spices, new fitness regimes and healthy lifestyles. The blog culls healthcare information from television broadcasts, the Internet, medical experts, alternative health practitioners, wire services and an array of other sources. You'll find posts about the supplement industry, stress-busting foods and experimental diets .
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
                              Vital Signs
                            </h2>
                            <p class="job">
                              Modern Healthcare
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                With straightforward prose and catchy headlines, this blog explores the political, financial and technological dimensions of the healthcare industry. It encompasses a range of thorny healthcare issues, from operating room inefficiencies and healthcare industry fraud to primers on what Medicare pays for equipment and fixes for meaningful use rules. The comings and goings of healthcare CEOs and other leaders are also reported.
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


        

        <!--CONTACT-->
        <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Contact</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>

              </div>
              <div class="col-md-9 content-right">
                <form>
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
                <a href="#" data-hover="Facebook">Facebook</a>
              </li>
              <li class="twitter">
                <a href="#" data-hover="Twitter">Twitter</a>
              </li>
              <li class="insta">
                <a href="#" data-hover="Instagram">Instagram</a>
              </li>
            </ul>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
               <h3 class="text-center"><b>Email -</b> contactus@medicento.com, <b>Call -</b>+91-9743959497 / 080-41131583</h3>
               <h1 class="text-center"><b>medicento.</b></h1>
              </div>
            </div>
          </div>
        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
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