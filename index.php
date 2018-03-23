<?php
require_once'db/config.php';

$url = 'https://newsapi.org/v2/everything?sources=medical-news-today&apiKey=32cd906e772f4f9cb72539fbc2a22a79';
 
$contents = file_get_contents($url);
 
if($contents !== false){


$arr = json_decode($contents, true);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111686267-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-111686267-1');
    </script>
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
    <script type="text/javascript">
   
      function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
      }

      function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
      }

    </script>
    <style type="text/css">
      .prettyline {
        height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}

*/ Color line credit to ninjamonk: [[http://bootsnipp.com/snippets/featured/mix-amp-match-login]]
  .fa:hover {
    opacity: 0.7;
}

    </style>
    
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
          <a href="index.php"><img alt="logo" style="margin-top: 11px;"  src="images/logo_small.png"></a>
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
         <!--   <a data-scroll="" href="#work">
              <span>Work</span>
            </a>  -->
             <a data-scroll="" href="#services">
              <span>Services</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>Health & Things</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Achievements</span>
            </a>
            <a data-scroll="" href="#education">
              <span>Blogs</span>
            </a>
            <a data-scroll="" href="#testimonial">
              <span>Testimonial</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Team</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
            <a target="_blank" href="career.php">
              <span>Career</span>
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
                    
                        <h4>your medicine channel</h4>                  
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
            <form method='post' action="search.php">
             <input type="text" name="key" id="default" list="languages" placeholder="e.g. JavaScript">
              <datalist id="languages">
                <?php
                $sql = $link->query("SELECT * FROM `TABLE 1` ORDER BY `medicine_name` ASC");
                while($row = @mysqli_fetch_assoc($sql))
                 {
                ?>
                <option value="<?php echo $row['medicine_name']; ?>">
                <?php
              }
              ?>
              </datalist>
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
                        medicento is a health tech startup in pharmaceutical space building up a unified channel for seamless flow of pharmaceutical products using a data driven approach. We intend to change the healthcare ecosystem by introducing demand (pull based) flow of medicines rather than push based, thus optimizing Inventory, delivery model and minimizing expired products. Our smart AI based inventory management system would segregate products based on the demand of the market, thus decreasing stock in period and generating better revenues.
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
                <i class="fa fa-users fa-4x" aria-hidden="true"></i>
                <h3 class="title-small">
                  <span>DISTRIBUTOR SERVICES</span>
                </h3>
               <!-- <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>-->
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
                          Better connectivity with retailers, reach new sale windows. Retailers on-board are verified going through stringent checks. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                        
                        <p class="head-sm">
                          EFFICIENT LOGISTICS
                        </p>
                        <p class="text-grey">
                          Delivery as per-determined slots as per your convenience. 
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
                          We facilitate cash, card and on credit payments.

                        </p>
                      </div>
                    </li>
                  </ul>

                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                       <i class="fa fa-list-ul" aria-hidden="true"></i>

                        <p class="head-sm">
                          BETTER OPTIMIZATION OF INVENTORY
                        </p>
                        <p class="text-grey">
                            Our mapping platform matches your inventory as per the demand driven from the market.
                        </p>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <i class="fa fa-plus-square fa-4x" aria-hidden="true"></i>
                <h3 class="title-small">
                  <span>PHARMACY SERVICES</span>
                </h3>
             <!--   <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p> -->
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
                          Get access to the real time live inventory of distributors. An easy and convenient way to order.
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
                          Simple returns and better management of expired medicines. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <i class="fa fa-inr" aria-hidden="true"></i>

                        <p class="head-sm">
                          HASSLE FREE PAYMENTS

                        </p>
                        <p class="text-grey">
                          Innovative payment solutions for all your purchases and settlements. 

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
                          Instant notifications about confirmation, pick-up and delivery. Get a secured two-way authenticated delivery of your products. 
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
                  <span>Achievements</span>
                </h3>
                <p class="content-detail">
                  Believe in yourself. You are braver than you think, more talented than you know, and capable of more than you imagine.
                  There is only one thing that makes a dream impossible to achieve: the fear of failure.
                </p>

              </div>
              <div class="col-md-9 content-right">
                <!--SKILLST-->
                <div class="skillst">
                  <!-- <div class="skillbar" data-percent="780">
                    <div class="title head-sm">
                      Orders Processed
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div> -->
                  <div class="skillbar" data-percent="40%">
                    <div class="title head-sm">
                      Retailers Onboarded
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="80%">
                    <div class="title head-sm">
                      Distributors' Inventory Coverage
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="90%">
                    <div class="title head-sm">
                      Companies Served
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="40%">
                    <div class="title head-sm">
                      Product Coverage Per Retailer
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
                  <span>Be healty, stay tuned</span>
                </h3>
                <p class="content-detail">
                  Physical fitness is not only one of the most important keys to a healthy body, it is the basis of dynamic and creative intellectual activity.
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
                  <span>Blogs</span>
                </h3>
                <p class="content-detail">
                  Where the Internet is about availability of information, blogging is about making information creation available to anyone. Don’t focus on having a great blog. Focus on producing a blog that’s great for your readers.
                </p>
                <p>
               <button class="btn" href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Post Your Own</button></p>  
              </div>
              <div class="col-md-9 content-right">
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


         <!--WORK-
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
                <!--PORTFOLIO IMAGE--
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
                <!--/.PORTFOLIO IMAGE END-
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
                        “I have been using <b>medicento.</b> Pharmacy for my diabetic supplies for over a year now. The entire staff is so helpful, I am very happy to say that Physician Choice Pharmacy my pharmacy”
                      </h3>
                      <p class="people">
                       Tanveer Mehtab, Mehtab Pharmacy 
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “ Always a pleasure dealing with <b>medicento.</b> Your customer service is unbeatable. You should be teaching ALL other companies how to handle their customers so well. ”
                      </h3>
                      <p class="people">
                        Amit Sharma, Sri Tirupati Medicals
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “I really appreciate the care and consideration <b>medicento.</b> give to me and the medications. The quality of storage and handling of the meds is far superior to that of my local pharmacy. ”
                      </h3>
                      <p class="people">
                        Poonam Medicals, Poona Ram Chaudhry
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
                      <center>
                       <a href="https://www.linkedin.com/in/arpan-debasis-794a1050/" target="_blank">
                        <i class="fa fa-linkedin-square fa-2x" onMouseOver="this.style.opacity='0.7'" onMouseOut="this.style.opacity='1'" aria-hidden="true"></i>
                      </a>
                      </center>
                      <h3 class="title">
                         CEO & Founder
                        </h3>
                      <p class="content-blog">
                        Arpan, the Lord Commander of castle black *our office*, makes sure everyone is fed well because men of the night's watch can't work without food. The word burning passion is personified by him, having knowledge of almost all the buzz going around the start-up world he gets a new business idea every now and then. If you are looking for someone to talk about the healthcare business, you can find him at Chai Point, yes, he hoggs on tea and since winter has already come to Westros only tea comes to rescue.
                      </p>
                      <p>&nbsp;</p><br>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                     <img alt="blog-4" class="img-circle text-center" src="images/abhishek.jpg">
                     <p class="subtitle fancy">
                        <span>Abhishek Sharma</span>
                      </p>
                      <center> <a href="https://www.linkedin.com/in/abhishek-sharma-443206126/" target="_blank">
                        <i class="fa fa-linkedin-square fa-2x" onMouseOver="this.style.opacity='0.7'" onMouseOut="this.style.opacity='1'" aria-hidden="true"></i>
                      </a>
                      </center>
                      <h3 class="title">
                          Product Manager
                        </h3>
                      <p class="content-blog">
                        He drinks and knows things, yes Abhishek is the Tyrion of our team. If not, making strategies for hiring new ninjas or on-boarding customers you can find him searching for exotic party locations. Abhishek makes sure the product development is on time and the team is going in the right direction. Having worked for many startups, he tries to know as many people as he can, you never know which one you'll need.
                      </p><br><br><br><br><br>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog6" class="img-circle text-center" src="images/aditya.jpg">
                      <p class="subtitle fancy">
                        <span>Aditya Garg</span>
                      </p>
                      <center>
                       <a href="https://www.linkedin.com/in/aditya-garg-3085b9a4/" target="_blank">
                         <i class="fa fa-linkedin-square fa-2x" onMouseOver="this.style.opacity='0.7'" onMouseOut="this.style.opacity='1'" aria-hidden="true"></i>
                      </a>
                      </center>
                      <h3 class="title">
                          Operations Head
                        </h3>
                      
                      <p class="content-blog">
                       Aditya, the man of honour, the almost IITian, the overachiever, the most respected Stark, folks Ned Stark was characterized after looking at Aditya. Don't judge him on his looks, he is a pro CS player, we can bet his head shots are better than yours. Illness can't suppress the passion for his work, this workaholic soul once came to the office with a drip in his wrist. Having worked as the delivery chain strategist at giants like Flipkart, he swiftly manages all the operations and the revenue plans of the company. But well, if it is a weekend and you have a mouse, the challenge for CS is on.  
                      </p>
                    </div>
                  </div>


                   <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog5" class="img-circle text-center" src="images/darshan.jpg">
                      <p class="subtitle fancy">
                        <span>Darshan Mishra</span>
                      </p>
                      <center>
                      <a href="https://www.linkedin.com/in/darshan-mishra-90aa1890/" target="_blank">
                         <i class="fa fa-linkedin-square fa-2x" onMouseOver="this.style.opacity='0.7'" onMouseOut="this.style.opacity='1'" aria-hidden="true"></i>
                        
                      </a>
                      </center>
                      <h3 class="title">
                          Lead Developer
                        </h3>
                      <p class="content-blog">
                        Have you ever came across a wildling who codes? Well, we have one, Darshan or Tormund as we call him, is equally wild and equally geek. If the world allocated only two things to do for a man, he would choose to code and to sleep. He knows how to survive the cold. He says, "You have to keep moving, that's the secret. Walking's good, fighting's better, coding's best." 
                      </p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <br>
                      <br>
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
                          <a href="career.php">Join Us!</a>
                        </h3>
                      </a>
                      <p class="content-blog">
                        Do you equally love Game of Thrones and have a passion to work with such dedicated and motivated souls? medicento is the correct world for you. Come aboard and let's make the next big thing. Valar morghulis!
                        <br><br><br><br><br><br><br><br>
                      </p>
                      <p>
                        <b>P.S</b>: Yes, we judge you if you are not a fan of GoT. :p
                      </p>
                      
                    </div>
                  </div>  

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog2" class="img-circle text-center" src="images/prashant.jpg">
                      <p class="subtitle fancy">
                        <span>Prashant Bhardwaj</span>
                      </p>
                      <center>
                      <a href="https://www.linkedin.com/in/prashantkbhardwaj/" target="_blank">
                         <i class="fa fa-linkedin-square fa-2x" onMouseOver="this.style.opacity='0.7'" onMouseOut="this.style.opacity='1'" aria-hidden="true"></i>

                      </a>
                      </center>
                       <h3 class="title">
                          CTO
                        </h3>
                      <p class="content-blog">
                            This Khal of his Khalasaars *tech team*, has only one moon of his life, his mac. The youngest of all, Drogo *Prashant* has tried it all be it any kind of tech stack or any kind of food. Having a start-up of his own while in college, he knows almost all the pains and pleasures of starting one. In the office he spends his time either creating bots or surfing Zomato. Yes, our CTO is a food hogger, nothing can make him happier than a plate of jalebis. When it comes to product deplyoment he becomes the fierce coder Drogo and kills all the bugs in no time. M'athchomaroon! 
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
                <h4 class="text-center">Click Here for :- <a href="https://docs.google.com/forms/d/e/1FAIpQLScOWA1r5SNRKXlOpRp74-nUkCk8pXAFg51QFA5zNvuV-rsBLQ/viewform?usp=sf_link" style="color: white;" target="_blank">Distributor Onboarding form</a>  ---- <a href="https://docs.google.com/forms/d/e/1FAIpQLSc8ZpVZKE1IJKT6KiP5rSH8jZRrvCvoSXyIhda5UrjkQpqrFg/viewform?usp=sf_link" style="color: white;"  target="_blank">Pharmacy Onboarding form</a> </h4>
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
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
            </ul>
        </div>
      <div class="modal-body" style="padding: 35px;">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>JoeSixPack@Sixpacksrus.com</a> for any other inquiries.</p>
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">E-mail:</label>
              <div class="controls">
                <input required="" id="userid" name="email" type="text" class="form-control" placeholder="JoeSixpack" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Name:</label>
              <div class="controls">
                <input id="userid" name="name" class="form-control" type="text" placeholder="JoeSixpack" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="Email" class="form-control" type="text" placeholder="JoeSixpack@sixpacksrus.com" class="input-large" required="">
              </div>
            </div>
            
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <em>1-8 Characters</em>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
              </div>
            </div>
            
            <!-- Multiple Radios (inline) -->
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
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