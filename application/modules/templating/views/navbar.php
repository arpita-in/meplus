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
            <li class="active"><a href="<?php echo base_url();?>templating/landing">Home</a></li>
            <li><a href="#about">ABOUT</a></li> 
            <li><a href="#team">TEAM</a></li>                    
            <li><a href="#service">BRANCHES</a></li> 
            <li><a href="#portfolio">HOT TOPICS</a></li>
            <li><a href="templating/login">LOGIN</a></li>             
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

  