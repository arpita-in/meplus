
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo base_url()?>css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url()?>css/default.css" rel="stylesheet">
    
   
    <!-- Main Style -->
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/u_pro.css">
</head>
<body>
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
           <a class="navbar-brand logo" href="index.html"><img src="<?php echo base_url()?>images/logo.jpg" alt="logo" ></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                       
            <li><a href="#from-blog">Mayurikar </a></li>      
            <li><a href="u_registration/logout">LOGOUT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->
               
      </div>          
    </nav> 
  </section>
  
	<section id="wrapper">
		<div id="content" class="container-fluid">
			<div id="main" class="row">
				<div id="left" class="col-lg-2">
					<div id="profile" class="row">
						<div id="pic" class="col-lg-12 col-md-12 col-sm-12">
							<div id="a_pic">
                <?php
              if($path&&$file_name)
                {?>
          <img src="<?php echo base_url().$path.'/'.$file_name;?>"  style="width: 120px; height: 120px; border-radius: 50%;">
        <?php }
        else
        { ?>
          <img src="">
          <?php
        }?>
							</div>
						</div>
						<!--<div id="pic" class="col-lg-6 col-md-6 col-sm-6">
							<span id="admin_name">MAYURIKA</span>
							<div id="admin_logout"><a href="#">Logout</a></div> 
						</div>-->
					</div><!--end of profile-->
					<div id="imp_links" class="row">
					 <div id="imp_links_col"class="col-lg-12 col-sm-12 col-md-12">
					<ul class="nav">
			            <li class="nav-item nav-category">
			              <span class="nav-link cat_head">USER SETTINGS</span>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link" href="<?php echo base_url();?>change_password">
			                <span class="menu-title">Change Password</span>
			                <i class="icon-speedometer menu-icon"></i>
			              </a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link" href="<?php echo base_url();?>profile/edit">
			                <span class="menu-title">Edit Profile </span>
			                <i class="icon-wrench menu-icon"></i>
			              </a>
			            </li>
			            <li class="nav-item nav-category">
			              <span class="nav-link cat_head">CERTIFICATES</span>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
			                <span class="menu-title">Hacking</span>
			                <i class="icon-layers menu-icon"></i>
			              </a>
			              
	            		</li>
	           			 <li class="nav-item">
			              <a class="nav-link" href="#">
			                <span class="menu-title">Web</span>
			                <i class="icon-grid menu-icon"></i>
			              </a>
			            </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Cyber Security</span>
                      <i class="icon-grid menu-icon"></i>
                    </a>
                  </li>
			            <li class="nav-item">
			              <a class="nav-link" href="#">
			                <span class="menu-title">Networking</span>
			                <i class="icon-globe menu-icon"></i>
			              </a>
			            </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Data analytics</span>
                      <i class="icon-globe menu-icon"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Architecturing World</span>
                      <i class="icon-globe menu-icon"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Instrumentation</span>
                      <i class="icon-globe menu-icon"></i>
                    </a>
                  </li>
			            <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="menu-title">Programming Languages</span>
                      <i class="icon-globe menu-icon"></i>
                    </a>
                  </li>
                  
			            
			            
          			</ul>
					</div><!--End of Imp_Links_col-->
				</div><!--End of Imp Links-->
				</div><!--end of left side-->
			    <div id="right" class="col-lg-10">
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
				</div>
			</div>
		</div>
	</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="<?php echo base_url()?>js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="<?php echo base_url()?>js/slick.js"></script>
  <!-- Counter -->
   <script type="text/javascript" src="<?php echo base_url()?>js/waypoints.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/waypoints.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="<?php echo base_url()?>js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="<?php echo base_url()?>js/custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/counterup.min.js"></script>
   
</body>
</html>
