<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>
	<script src="<?php base_url();?>js/jquery.min.js"></script>
</head>
<body>
	<div style="background-color: orange;height: 100px;width: 100%;position: absolute;top: 0px;left: 0px;">
		<h4 style="position: absolute;right: 80px;top: 15px;">ADMIN LOGGED IN</h4>
	</div>

	<div style="background-color: black;height: 850px;width: 20%;position: absolute;top: 100px;left: 0px;"></div>
	<div style="background-color: white;height: 850px;width: 80%;position: absolute;top: 100px;right: 0px;">
		
		
			<form method="post" id="adminform">
				<button  style="background-color: orange;height: 150px;width: 150px;position: absolute;top: 200px;left: 300px;border-radius: 10px;border:solid 3px;border-color: black" type="button" id="add_certificate"  >CLICK TO ADD CERTIFICATE</button>
				<button style="background-color: orange;height: 150px;width: 150px;position: absolute;top: 200px;left: 600px;border-radius: 10px;border:solid 3px;border-color: black" type="button" id="fetch_data">CLICK TO FETCH USER DATA</button>
			</form>
			<div id="divid" style="position: absolute;top: 400px;left: 200px;background-color: orange">
				<!--MAIN CERTIFICATE ADDING FORM STARTS HERE-->
						<form id="form"  method="post" action=""><BR>
							<strong>FILL ALL THE DETAILS OF FORM FOR ADDING CERTIFICATE IN DATABASE</strong></BR>TITLE OF CERTIFICATE:
							<input type="text" name="title"><BR>SHORT DESCRIPTION:
							<input type="text" name="short_description"><BR>FULL DESCRIPTION:
							<input type="text" name="full_description"><BR>SELECT BRANCH:
							<select name="branch">
								
								<option value="networking">NETWORKING</option>
								<option value="hacking">HACKING</option>
								<option value="web development">WEB DEVELOPMENT</option>
								<option value="architecturing">ARCHITECTURING</option>
								<option value="instrumentation">INSTRUMENTATION</option>
								<option value="programmig languages">PROGRAMMING LANGUAGES</option>
								<option value="data analytics">DATA ANALYTICS</option>
								<option value="cyber security">CYBER SECURITY</option>
							</select><BR>WRITE COST IN INR
							<input type="number" name="cost"><BR>VALIDITY OF CERTIFIATE:
							<input type="text" name="validity"><BR>COMPANY NAME HERE:
							<input type="text" name="company"><BR>
							<button id="btn" type="button">ADD THIS DATA</button>
						</form>
						<!--MAIN CERTIFICATE ADDING FORM ending HERE-->
			</div>
			<button id="hide" type="button" style="position: absolute;top:700px;left: 200px;height: 100px;width: 100px;background-color: black; color:white;">CLEAR SCREEN</button>


			 <div class="row">
					<div class="col-md-2">
						<label id="search_name"></label>
					</div>
					<div class="col-md-3">
						<label id="search_mobile"></label>
					</div>

					<div class="col-md-3">
						<label id="search_dob"></label>
					</div>

			</div>


	<div class="row" id="fff">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-10">
				<table class="table border" border="2px">
					<thead>
						<tr>
							<td width="5%">Sno</td>
							<td width="10%">USERNAME</td>
							<td width="10%">Mobile</td>
							<td width="7%">DOB</td>
							<td width="10%">user id</td>
							<td width="20%">email</td>
							<td width="5%">DELETE</td>
							
						</tr>
					</thead>

					<tbody id="user_details">

					</tbody>
				</table>
			</div>
			<div class="col-md-2">
				
			</div>
			<button type="button" id="fet">DONE</button>
	</div>

<a href="u_registration/logout">LOGOUT</a>


<script type="text/javascript" src="<?php echo base_url();?>/js/admin.js"></script>
	
</body>
</html>



<!--283999
032BB4
C70039-->