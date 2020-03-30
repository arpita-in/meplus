
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/change_pwd.css">
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
    <!------<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 Include the above in your HEAD tag ---------->
</head>
<body>

<div class="wrapper container">
	<div class="row1 row">
		<div id="c_pwd_head"><h1> CHANGE PASSWORD </h1></div>
		<div class="col-sm-3"></div>
		<div class="change_col col-lg-6  col-md-6  col-sm-12 ">

			<div id="error_login"><?php echo @$error; ?></div>
			<div>
		    <form method="post" action="<?php echo base_url()?>change_password/updatePwd">
			    
			    <div class="form-group pass_show"> 
	                <input type="password" name="curr_password" value="" class="form-control" placeholder="Current Password" required> 
	            </div> 
			      
	            <div class="form-group pass_show"> 
	                <input type="password" value="" name="new_password"class="form-control" placeholder="New Password" required> 
	            </div> 
			      
	            <div class="form-group pass_show"> 
	                <input type="password" value="" name="conf_password" class="form-control" placeholder="Confirm Password" required> 

	            </div> 
	            <input type="submit" value="UPDATE PASSWORD" name="btn"> 
            </form>
            </div>
		</div>
		<div class="col-sm-3"></div>  
	</div>

	
</div>

</body>
</html>
