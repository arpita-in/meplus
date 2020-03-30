
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/edit_profile.css">
</head>
<body>


<div class="container-fluid color" style="background: #c70039;">

    <div id="profile_head" class="row">
      <a class="navbar-brand logo" href="index.html"><img class=" logo_img"src="<?php echo base_url();?>images/logo.jpg" alt="logo" ></a>  
     <a href="#" class="h">HOME</a><span class="h">/</span>
     <a href="<?php echo base_url();?>/profile" class="h">BACK TO DASHBOARD </a><span class="h"/></span>
      <div id="p_head">Edit Profile</div>
    </div>
  	

    <div class="row ">
	      <!---------------STARTING POINT of Column "LEFT" EDIT PROFILE----------->
      <div class="col-md-3 left">
        <div class="text-center">
          <div class="show_image">
            <?php
              if($path&&$file_name)
                {?>
          <img src="<?php echo base_url().$path.'/'.$file_name;?>" class="db_img">
        <?php }
        else
        { ?>
          <img src="">
          <?php
        }?>
          </div><!---------------End of Img Divisiion---------->
          <h6>Upload a different photo...</h6>
          
          <?php echo form_open_multipart('profile/upload_file');?>
          
           <div class="form-group">
              <input type="file" name="myfile" class="form-control">
            </div>
            <div class="form-group"> 
              <input type="text" name="file_name" placeholder="File Name" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Upload File</button>
             </div>
          </form><!--End of file upload form-->
        </div><!--End of text-center-->
      </div><!--END POINT of Column LEFT--->
      
      <!-- edit form column -->
      <!---------------STARTING POINT of Column Right "EDIT PROFILE"----------->

      <div class="col-md-9 column_right" style="boder: 2px solid">
          <div class="alert alert-info alert-dismissable">
             <!--<a class="panel-close close" data-dismiss="danger">×</a>--> 
            <?php if ($this->session->flashdata('error')) { ?>

                <label class="text-error"><?php echo $this->session->flashdata('error'); ?></label>

                <?php }else{ ?>
                <label class="text-success">
                  <?php echo $this->session->flashdata('success'); ?>
                </label>
                <?php } ?>
          </div><!--End of "SHOW ERROR "-->
          <h3>Personal info</h3>
          
              <form class="form-horizontal edit_form" method="post"role="form" action="<?php echo base_url()?>profile/save_personal_info">
                
                  <div class="form-group">
                    <label class="col-lg-3 control-label">First Name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" name="f_name" type="text" value="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Last Name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" name="l_name"  type="text" value="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Date Of Birth:</label>
                    <div class="col-lg-8">
                      <input class="form-control" name="dob" type="date" value="" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Gender:</label>
                    <div class="col-lg-8">
                      Male<input class=" radio" name="Gender" type="radio" value="male">
                      Female<input class=" radio" name="Gender" type="radio" value="female">
                    </div>
                  </div>
                  
                  <div class="form-group" >
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" name="email" type="text" value="" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Mobile:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <input type="submit" class="btn btn-primary" value="Save Changes">
                      <span></span>
                      <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                  </div>
              </form>
              <h3>User Interest</h3>
        
        <form class="form-horizontal" role="form">
          
            <div class="form-group">
              <label class="col-lg-3 control-label">Year Of Deploma:</label>
              <div class="col-lg-8">
                <select class="form-control">
                  <option hidden>Choose Your Year </option>
                  <option> Ist Year</option>
                  <option> 2nd Year</option>
                  <option> 3rd Year</option>
                  <option> Last Year</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Branch:</label>
              <div class="col-lg-8">
                <select class="form-control">
                  <option hidden>Choose Your Branch </option>
                  <option> IDD</option>
                  <option> ELX</option>
                  <option> Computer Science</option>
                  <option> Information Technology</option>
                </select>
              </div>
            </div>
                   
            <div class="form-group">
              <label class="col-md-3 control-label">Higher Education:</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" value="11111122333">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Confirm password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" value="11111122333">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="button" class="btn btn-primary" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
              </div>
            </div>
        </form>

      </div><!--End of Column Right "EDIT PROFILE"-->


  </div><!--End of row-->
  
    <!--<div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>User Interest</h3>
        
        <form class="form-horizontal" role="form">
          
            <div class="form-group">
              <label class="col-lg-3 control-label">Year Of Deploma:</label>
              <div class="col-lg-8">
                <select>
                  <option> Ist Year</option>
                  <option> 2nd Year</option>
                  <option> 3rd Year</option>
                  <option> Last Year</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Branch:</label>
              <div class="col-lg-8">
                <select>
                  <option> IDD</option>
                  <option> ELX</option>
                  <option> Computer Science</option>
                  <option> Information Technology</option>
                </select>
              </div>
            </div>
                   
            <div class="form-group">
              <label class="col-md-3 control-label">Username:</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="janeuser">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" value="11111122333">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Confirm password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" value="11111122333">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="button" class="btn btn-primary" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
              </div>
            </div>
        </form>
    </div>-->
 
  
  
</div><!--container---->


</body>
</html>