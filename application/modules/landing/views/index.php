<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rex : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url();?>css/default.css" rel="stylesheet">
    
    <link href="<?php echo base_url();?>css/preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- BEGAIN PRELOADER-->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!--END PRELOADER -->    

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="<?php echo base_url();?>images/header-bg.jpg" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide">WE MAKE
          <span>MOST VALUABLE</span>
          <span>MOST PROFESSIONAL</span>
          <span>MOST GLORIOUS</span>
          OUT OF YOU</h2>
        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="#service">KNOW MORE</a>
          <a class="download-btn" href="#portfolio">HOT TOPICS</a>
        </div>
      </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="index.html"><img src="<?php echo base_url();?>images/logo.jpg" alt="logo" ></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#about">ABOUT</a></li> 
            <li><a href="#team">TEAM</a></li>                    
            <li><a href="#service">BRANCHES</a></li> 
            <li><a href="#portfolio">HOT TOPICS</a></li>
            <li><a href="u_registration">LOGIN</a></li>             
            <li><a href="#from-blog">BLOG </a></li>      
            <li><a href="#contact">CONTACT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->
       <div class="search-area">
          <form action="">
            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>MePLUS</span></h2>
              <span class="tittle-line"></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniamo laboris nis</p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-users wc-icon"></span>
                    <h4 class="wc-tittle">Creative concept</h4>
                    <p>Adding values to the deploma holders which will nurture their future. </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle">Certificates Stack</h4>
                    <p>A Large list of Professional Certificates to add values to your skills.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">Strategy</h4>
                    <p></p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">Business</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-area">
            <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-left wow fadeInLeft">
                  <img src="<?php echo base_url();?>images/about-img.jpg" alt="img">
                  <a class="introduction-btn" href="#">Introduction</a>
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-right wow fadeInRight">
                  <div class="title-area">
                    <h2 class="tittle">About <span>MePLUS</span> </h2>
                    <span class="tittle-line"></span>
                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illotore itatis et quasi architecto beatae vitae dicta sunt explicabo.</p> 

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores e</p>
                    <div class="about-btn-area">
                      <a href="#" class="button button-default" data-text="KNOW MORE"><span>KNOW MORE</span></a>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="<?php echo base_url();?>images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2>The most valuable certificates you will find just in few bucks</h2>
          <a href="#" class="button button-default" data-text="GET IT NOW"><span>GET IT NOW</span></a>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle">Meet our team</h2>
              <span class="tittle-line"></span>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                <!-- li>
                  < div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>John Richerd</p>
                    <span>CEO & Founder</span>
                  </div>
                </li-->
                <li>
                  <div class="team-item team-img-2 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="https://www.facebook.com/arpitasrivastavaggpl"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/ArpitaS59517906"><span class="fa fa-twitter"></span></a>
                      <a href="https://www.linkedin.com/in/arpita-srivastava-074777167/"><span class="fa fa-linkedin"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>ARPITA SRIVASTAVA</p>
                    <span>Co-founder</span>                  
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-3 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="https://www.linkedin.com/in/mayurika-rastogi-ab2639167/"><span class="fa fa-linkedin"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>MAYURIKA RASTOGI</p>
                    <span>Developer</span>
                  </div>
                </li>
                  <!-- li>
                  <div class="team-item team-img-4 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>ROB HANSOM</p>
                    <span>Senior designer</span>
                  </div>
                </li-->
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">BRANCHES BASED CERTIFICATIONS WE OFFER</h2>
              <span class="tittle-line"></span>
              <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>
            <!-- service content -->
            <div class="service-content">
              <ul class="service-table"><a href="<?php echo base_url();?>certificate/web">
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-edit service-icon"></span>
                    <h4 class="service-title">Web </h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a><a href="<?php echo base_url();?>certificate/networking">
                <li class="col-md-3 col-sm-6" id="networking">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Networking</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a><a href="<?php echo base_url();?>certificate/security">
                <li class="col-md-3 col-sm-6" id="cyber_security">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">Cyber Security</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a><a href="<?php echo base_url();?>certificate/dataanalytics">
                <li class="col-md-3 col-sm-6" id="data_analytics">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Data analytics</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a><a href="<?php echo base_url();?>certificate/plls">
                <li class="col-md-3 col-sm-6" id="programming_languages">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-car service-icon"></span>
                    <h4 class="service-title">Programming languages</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a><a href="<?php echo base_url();?>certificate/hacking">
                <li class="col-md-3 col-sm-6" id="hacking">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-bank service-icon"></span>
                    <h4 class="service-title">Hacking</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a><a href="<?php echo base_url();?>certificate/architecturing">
                <li class="col-md-3 col-sm-6" id="architecture">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-user-secret service-icon"></span>
                    <h4 class="service-title">Architecturing World</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a><a href="<?php echo base_url();?>certificate/instrumentation">
                <li class="col-md-3 col-sm-6" id="instrumentation">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-support service-icon"></span>
                    <h4 class="service-title">Instrumentation</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle">Hot Topics</h2>
              <span class="tittle-line"></span>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
                <!-- portfolio menu -->
               <div class="portfolio-menu">
                 <ul>
                   <li class="filter" data-filter="all">All</li>
                   <li class="filter" data-filter=".branding">Branding</li>
                   <li class="filter" data-filter=".design">Design</li>
                   <li class="filter" data-filter=".development">Development</li>
                   <li class="filter" data-filter=".photography">Photography</li>
                 </ul>
               </div>
               <!-- Portfolio container -->
               <div id="mixit-container" class="portfolio-container">
                 <div class="single-portfolio mix branding">
                   <div class="single-item">

                     <!--img src="../../images/portfolio-img-small1.jpg" alt="img"-->

                     <img src="<?php echo base_url();?>images/portfolio-img-small1.jpg" alt="img">

                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big1.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix design">
                   <div class="single-item">
                     <img src="<?php echo base_url();?>images/portfolio-img-small2.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix development">
                   <div class="single-item">
                     <img src="<?php echo base_url();?>images/portfolio-img-small3.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big3.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php echo base_url();?>images/portfolio-img-small4.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big4.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php echo base_url();?>images/portfolio-img-small5.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big5.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php echo base_url();?>images/portfolio-img-small6.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big6.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php echo base_url();?>images/portfolio-img-small7.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big7.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php echo base_url();?>images/portfolio-img-small2.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url();?>images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
               </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio section -->

  <!-- Start counter section -->
  <section id="counter">
    <img src="<?php echo base_url();?>images/counter-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-users"></span>
                  <div class="counter-count">
                    <span class="counter">10500</span>
                    <p>Happy Clients</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-bus"></span>
                  <div class="counter-count">
                    <span class="counter">750</span>
                    <p>Project delivery</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-twitter"></span>
                  <div class="counter-count">
                    <span class="counter">2,300</span>
                    <p>Followers</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-tasks"></span>
                  <div class="counter-count">
                    <span class="counter">800</span>
                    <p>Project done</p>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End counter section -->

  <!-- Start Pricing Table section -->
  <!--section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-table-area">
            <div class="title-area">
              <h2 class="tittle">Pricing table</h2>
              <span class="tittle-line"></span>
              <p>unde omnis iste natus error sit voluptatem accusantium doloremque laudantium  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div-->
            <!--service content -->
            <!--div class="pricing-table-content">
                <ul class="price-table">
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header">Basic</h4>
                      <span class="price-amount">$0.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price standard-price">
                      <h4 class="price-header">Standard</h4>
                      <span class="price-amount">$10.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header">Advance</h4>
                      <span class="price-amount">$19.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header">Mighty</h4>
                      <span class="price-amount">$39.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
               </ul>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </section-->
  <!-- End Pricing Table section -->

  <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="<?php echo base_url();?>images/testimonial-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle">What people say about us</h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="<?php echo base_url();?>images/testimonial-image1.png" alt="img">
                      <p>Jonna Hike</p>
                      <span>CEO, Themeforest</span>
                    </div>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="<?php echo base_url();?>images/team-member2.png" alt="img">
                      <p>Jonna Hike</p>
                      <span>CEO, Themeforest</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->

  <!-- Start from blog section -->
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle">Our blog</h2>
              <span class="tittle-line"></span>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="<?php echo base_url();?>images/the-sky.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="<?php echo base_url();?>images/photographer.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="<?php echo base_url();?>images/sealand.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->

  <!--section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="<?php //echo base_url();?>images/envato.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/google.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/amazon.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/discovery.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/envato.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/tuenti.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/envato.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/google.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/amazon.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/discovery.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/envato.png" alt="client logo"></li>
              <li><img src="<?php //echo base_url();?>images/tuenti.png" alt="client logo"></li>                    
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section-->
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Contact with us</h2>
            <address class="single-address">
              <h4>Postal address:</h4>
              <p>Indra Nagal <br> Smileganj,Lucknow</p>
            </address>
             <address class="single-address">
              <h4>Headquaters:</h4>
              <p>Cybercreeksolutions<br> Secter-F, Lucknow</p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p>Phone Number: 9450283733</p>
              <p>Phone Number: 7460018052</p>
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p>Support: meplus@zoho.com</p>
              <p>Sales: sales@example.com</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact_change contact-right wow fadeInRight">
            <h2>Send a message</h2>
            <form action="https://formspree.io/arpitasrivastavaggpl@gmail.com" method="post" class="contact-form">
              <div class="form-group">                
                <input type="text" class="form-control" placeholder="Name" name="name">
              </div>
              <div class="form-group">                
                <input type="email" class="form-control" placeholder="Enter Email" name="_replyto"> 
              </div>              
              <div class="form-group">
                <input type="text" style="height: 210px;" class="form-control" name="message" placeholder="Enter_Message" >

                <!--textarea class="form-control"></textarea-->
              </div>
              <input type="submit" class="button button-default" value="send"><!--<span>SUBMIT</span>  -->       
             </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map
  <section id="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>  
  </section> -->
  <!-- End Google Map -->

  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <a class="footer-logo" href="#"><img src="<?php echo base_url();?>images/logo.jpg" alt="Logo" height="100px"></a>              
              <div class="footer-social">
                <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                <!--<a class="youtube" href="#"><span class="fa fa-youtube"></span></a>-->
                <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                <!--<a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MePlus@zoho.com</a></p>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="<?php echo base_url();?>js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="<?php echo base_url();?>js/slick.js"></script>
  <!-- Counter -->
   <script type="text/javascript" src="<?php echo base_url();?>js/waypoints.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/waypoints.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="<?php echo base_url();?>js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="<?php echo base_url();?>js/custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/counterup.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>js/certificate.js"></script>
    
  </body>
</html>
