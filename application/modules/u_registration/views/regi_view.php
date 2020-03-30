<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.min.css">
<!-----------------------------------Google css------------------------------>
    


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url()?>css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/log.css">
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/login_view_js.js"></script>

  </head>

  <body>

                                  <!-- Fixed navbar -->

    
    <div class="container" id="content">

      <div class="row singin">
          
            <div class="col-lg-3"></div>
                <div class="col-lg-3 singup">
                  
                <h3 class="heading">CREATE  ACCOUNT</h3>
                  <form method="post" onsubmit="return form_vali()" action="<?php echo base_url()?>u_registration/regist">
                    <table>
                      <tr><td>
                      <input type="text" name="username" id="username" placeholder="Username" >
                      <!-- <span id="showerror1"></span>-->
                      </td></tr>
                      <tr><td>
                      <input type="password" name="password" id="password" placeholder="Password">
                       <!--<span id="showerror2"></span>-->
                        </td></tr>
                        <tr><td>
                      <input type="password" name="c_password" id="c_password" placeholder="Confirm Password">
                       <!--<span id="showerror3"></span>-->
                        </td></tr>
                      <tr><td>
                      <input type="text" name="email" id="email" placeholder="Email-Id">
                       </br><!--<span id="showerror4"></span>-->
                      </td></tr>
                      <tr><td>
                      <input type="phone" name="mobile" id="mobile" placeholder="Mobile">
                      </td></tr>
                       <!--<span id="showerror5"></span>-->
                      <tr><td>
                    <input type="submit" name="submit" value="CREATE" class="sub_btn">
                    <br><span id="showerror"></span>
                    <?php  
        
        if(isset($errorMsg))
        {
          echo '<div class="error-msg">';
          echo $errorMsg;
          echo '</div>';
          unset($errorMsg);
        }
      ?>
                    </td></tr>
                    </table>
                  </form>
                </div><!--End of Signup-->
                <div class="col-lg-3 in" >
                  <div class="log_with" > 
                    <h3 class="heading">SIGN UP WITH</h3>
                      <div class="log_with_div">
                        <a href="#"><div class="with" id="google"></div></a>
                        <a href="#"><div class="with" id="facebook"></div></a>
                      </div>
                    <h4 class="heading">or</h4>
                  </div>
                  <h4 class="heading">LOG IN</h4>

                  <form method="post" action="<?php echo base_url()?>u_registration/login_validation" >
                    <table>
                      <tr><td>
                      <input type="text" name="username"placeholder="Username">
                      </td></tr>
                      <tr><td>
                      <input type="password"name="password"placeholder="Password">
                      </td></tr>
                      <tr><td>
                      <input type="submit"name="submit" value="Sing In" class="sub_btn">
                      <br><span style="color:red"><?php echo $this->session->flashdata('error');?></span>

                      </td></tr>
                    </table>
                  </form>
                 

                </div><!--End of In-->
                <div class="col-lg-3"></div>
          </div>
</div><!-- /End of logdiv -->

    </div> <!-- /container-fluid -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url()?>js/jquery.min.js"><\/script>')</script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!--  <script src="<?php //echo base_url()?>js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
