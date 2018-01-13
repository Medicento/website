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
    <title>Bodo - Simple One Page Personal</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Bodo - Simple One Page Personal" name="description">
    <meta content="BdgPixel" name="author">
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
    <script type="text/javascript">
   
      function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
      }

      function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
      }

    </script>
    
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
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.html"><img alt="logo" style="margin-top: 11px;"  src="images/logo_small.png"></a>
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
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">

              <video autoplay loop muted poster="screenshot.jpg" id="background">
                  <source src="images/Medicento.mp4" type="video/mp4">
              </video>

            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1 style="font-size: 60px;"><b>medicento.</b></h1>
                    
                    <h4>Your Medicines has a new address</h4>
                    <br>
                    <br>
                    <button  class="button button2" onclick="openSearch()">Know Your Medicine</button>
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>

        <div id="myOverlay" class="overlay">
          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <!--/.HOME END-->

        <!--ABOUT-->
        <section id="about">
          
          <div class="col-md-12 col-sm-12 col-xs-12 white-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel2">
                <div class="col-md-12">
                  <h3 class="title-small text-center">
                  <span>About Us</span>
                </h3>
                  <div class="wrap-about">
                    <div class="w-content">
                      <p class="head-about">
                        Medicento is a health tech start-up in pharmaceutical space building up an unified channel for seamless flow of pharmaceutical products using data driven approach. We intend to change the health-care ecosystem by introducing demand (pull based)flow of medicines rather than push based, thus optimizing Inventory, delivery model and minimizing expired products. Our smart AI based inventory management system would segregate products based on the demand of the market thus decreasing stock in period and generating better revenues.
                      </p>
                    </div>
                  </div>
                </div>
              
               
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

         <!--SERVICES-->
        <section class="grey-bg" id="services">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>DISTRIBUTOR SERVICES</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-yelp" aria-hidden="true"></i>
                        
                        <p class="head-sm">
                          ONE POINT SALE
                        </p>
                        <p class="text-grey">
                          Single point of contact for all your pharmaceutical needs. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                        
                        <p class="head-sm">
                          EFFICIENT DELIVERY SYSTEM
                        </p>
                        <p class="text-grey">
                          Delivery at per-determined slots as per your convenience. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-cc-visa" aria-hidden="true"></i>
                        
                        <p class="head-sm">
                          EASY PAYMENTS

                        </p>
                        <p class="text-grey">
                          We facilitate cash, card and on credit payments..

                        </p>
                      </div>
                    </li>
                  </ul>

                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                       <i class="fa fa-user-circle-o" aria-hidden="true"></i>

                        <p class="head-sm">
                          VERIFIED RETAILERS
                        </p>
                        <p class="text-grey">
                          Retailers on-board are verified going through stringent checks. 
                        </p>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>PHARMACY SERVICES</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-opencart" aria-hidden="true"></i>

                        <p class="head-sm">
                          LIVE ORDERING SYSTEM
                        </p>
                        <p class="text-grey">
                          Get access to real time live inventory of the distributor. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-retweet" aria-hidden="true"></i>

                        <p class="head-sm">
                          EASY RETURNS
                        </p>
                        <p class="text-grey">
                          No questions asked returns. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-align-justify" aria-hidden="true"></i>

                        <p class="head-sm">
                          REAL TIME INVENTORY

                        </p>
                        <p class="text-grey">
                          No more notebook stuff, track your inventory real-time anywhere

                        </p>
                      </div>
                    </li>
                  </ul>

                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                        <p class="head-sm">
                          LIVE TRACKING
                        </p>
                        <p class="text-grey">
                          Know where your delivery is in real-time. 
                        </p>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.SERVICES END-->


         <!--SKILLS-->
        <section class="white-bg" id="skill">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Skills</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--SKILLST-->
                <div class="skillst">
                  <div class="skillbar" data-percent="78%">
                    <div class="title head-sm">
                      HTML 5
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="91%">
                    <div class="title head-sm">
                      CSS 4
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="58%">
                    <div class="title head-sm">
                      jQuery
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="63%">
                    <div class="title head-sm">
                      PHP
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="95%">
                    <div class="title head-sm">
                      Photoshop
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                </div>
                <!--/.SKILLST END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.SKILLS END-->

       

        <!--EMPLOYEMENT-->
        <section class="grey-bg" id="employement">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Health & Things</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              <?php echo $arr['articles'][0]['title'];  ?>
                            </h2>
                            
                            <hr>
                            <div class="text-detail">
                              <p>
                                <?php echo $arr['articles'][0]['description'];  ?>
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
                              <?php echo $arr['articles'][1]['title'];  ?>
                            </h2>
                            
                            <hr>
                            <div class="text-detail">
                              <p>
                                <?php echo $arr['articles'][1]['description'];  ?>
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
                              <?php echo $arr['articles'][2]['title'];  ?>
                            </h2>
                            
                            <hr>
                            <div class="text-detail">
                              <p>
                                <?php echo $arr['articles'][2]['description'];  ?>
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
                               <?php echo $arr['articles'][3]['title'];  ?>
                            </h2>
                            
                            <hr>
                            <div class="text-detail">
                              <p>
                                 <?php echo $arr['articles'][3]['description'];  ?>
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
        <!--/.EMPLOYEMENT END-->

       

        <!--EDUCATION-->
        <section class="white-bg" id="education">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Education</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2002 - 2005
                            </h2>
                            <p class="job">
                              Information System
                            </p>
                            <p class="company">
                              Telkom University
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
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
                              2005 - 2007
                            </h2>
                            <p class="job">
                              DKV
                            </p>
                            <p class="company">
                              UNIKOM
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
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
                              2007 - 2009
                            </h2>
                            <p class="job">
                              Magister DKV 
                            </p>
                            <p class="company">
                              ITB
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
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
                              2009 - 2010
                            </h2>
                            <p class="job">
                              Typhography Magister
                            </p>
                            <p class="company">
                              Florida University
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
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


         <!--WORK-->
        <section class="grey-bg mar-tm-10" id="work">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Work</span>
                </h3>
                <p class="content-detail">
                  Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <br><br>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--PORTFOLIO IMAGE-->
                <ul class="portfolio-image">
                  <li class="col-md-6">
                    <a href="images/bw-1.png"><img alt="image" src="images/bw-1.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc">My Resume</p>
                        </div>

                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-2.png"><img alt="image" src="images/bw-2.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Pangirutan
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-3.png"><img alt="image" src="images/bw-3.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Black Mug
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-4.png"><img alt="image" src="images/bw-4.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Notebook Mockup
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-5.png"><img alt="image" src="images/bw-5.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Presentation
                          </p>  
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-6.png"><img alt="image" src="images/bw-6.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Letter Branding
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!--/.PORTFOLIO IMAGE END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.WORK END-->


        <!--TESTIMONIAL-->
        <section id="testimonial">
          <div class="container">
            <div class="row wrap-testimonial">
              <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel">
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “ Reza did a phenominal job setting up my a website for my product He performed the task very quickly and efficiently. We know we have the superior topical pain relief cream on the market and he has helped us communicate that message via the website he built from scratch. Thanks! ”
                      </h3>
                      <p class="people">
                        Darin Cohen - Active10
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “ Another successful project working with Reza. He has great design skills, is very responsive and professional. Looking forward to the next opportunity to work together. ”
                      </h3>
                      <p class="people">
                        Marko Milicevic
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “ Great designer! I like his sense of design, especially the color scheme. Quick turnaround. Look forward to work with him again. Thanks!! ”
                      </h3>
                      <p class="people">
                        JK Thang
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mask-testimonial"></div>
        </section>
        <!--/.TESTMONIAL END-->

        <!--BLOG-->
        <section class="grey-bg" id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-small-center text-center">
                  <span>Team</span>
                </h3>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p class="content-details text-center">
                     Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results. 
                    </p>
                  </div>
                </div>
                <!--GRID BLOG-->
                <div class="grid">
                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog-1" class="img-circle text-center" src="images/arpan.jpg">
                      <p class="subtitle fancy">
                        <span>Arpan Debasis</span>
                      </p>
                       <a href="https://www.linkedin.com/in/arpan-debasis-794a1050/" target="_blank">
                        <h3 class="title">
                         CEO & Founder
                        </h3>
                      </a>
                      <p class="content-blog">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                     <img alt="blog-4" class="img-circle text-center" src="images/abhishek.jpg">
                     <p class="subtitle fancy">
                        <span>Abhishek Sharma</span>
                      </p>
                       <a href="https://www.linkedin.com/in/abhishek-sharma-443206126/" target="_blank">
                        <h3 class="title">
                          Product Manager
                        </h3>
                      </a>
                      <p class="content-blog">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog6" class="img-circle text-center" src="images/aditya.jpg">
                      <p class="subtitle fancy">
                        <span>Aditya Garg</span>
                      </p>
                       <a href="https://www.linkedin.com/in/aditya-garg-3085b9a4/" target="_blank">
                        <h3 class="title">
                          Operation Head
                        </h3>
                      </a>
                      <p class="content-blog">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog5" class="img-circle text-center" src="images/darshan.jpg">
                      <p class="subtitle fancy">
                        <span>Darshan Mishra</span>
                      </p>
                      <a href="https://www.linkedin.com/in/darshan-mishra-90aa1890/" target="_blank">
                        <h3 class="title">
                          Lead Developer
                        </h3>
                      </a>
                      <p class="content-blog">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog-3" class="img-circle text-center" src="images/employee.jpg">
                      <p class="subtitle fancy">
                        <span>You</span>
                      </p>
                       <a href="#" target="_blank">
                        <h3 class="title">
                          Joining Soon
                        </h3>
                      </a>
                      <p class="content-blog">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
                      </p>
                    </div>
                  </div>  
                  
                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog2" class="img-circle text-center" src="images/prashant.jpg">
                      <p class="subtitle fancy">
                        <span>Prashant Bhardwaj</span>
                      </p>
                      <a href="https://www.linkedin.com/in/prashantkbhardwaj/" target="_blank">
                        <h3 class="title">
                          CTO
                        </h3>
                      </a>
                      <p class="content-blog">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                      </p>
                    </div>
                  </div>

                                  

                </div>
                <!--/.GRID BLOG END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.BLOG END-->

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