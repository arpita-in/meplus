<!DOCTYPE html>
<html>
<head>
	<title>login page reference here </title>
</head>
<body>
<div style="height: 550px;width: 550px ;background-color: black;position: fixed;top: 200px;left: 500px;">
<div style="height: 500px;width: 500px ;background-color:  #00FA9A;position: relative;top: 80px;left: 80px;">
	
	<form method="post" action="localhost/meplus/index.php/login/login_validation">
		<P style="position: absolute;top: 50px;left: 10px;font: cursive;font-size: 17px">USERNAME HERE:</P> 
		<input type="text" name="username" style="position: absolute;top: 50px; left:180px;height: 40px;width: 300px;border-radius: 0px;border:none;">
		<P style="position: absolute;top: 150px;left: 10px;font: cursive;font-size: 17px">PASSWORD:</P> 
		<input type="password" name="password" style="position: absolute;top: 150px; left:180px;height: 40px;width: 300px;border-radius: 0px;border:none;">
		<!--button type="submit" value="submit"  style="position: absolute;top: 250px;left: 150px;height: 80px;width: 200px;background-color:black;color:#00FA9A;border: none;border-radius: 10px; ">SUBMIT</button-->
		<input type="submit" name="submit" value="Sing In">
        <br><span style="color:red"><?php echo $this->session->flashdata('error');?></span>

	</form>
</div>
</div>


</body>
</html>