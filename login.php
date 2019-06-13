<html lang="en" class=" js no-touch">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">


<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<title>  </title>
</head>

 <body>

 WELLCOM
	<div id="form-login">
		<form action="chk_login.php" method="post"name="frmLogin"enctype="multipart/form-data" onSubmit="return chkPost();">
			<input type="hidden" name="SID">
					<label for="user">ID</label>
						<div class="input-line">
							<input type="text" name="txtUser" maxlength="10" size="20">
						</div>
					<label for="password">Password</label>
						<div class="input-line">
							<input type="password" name="txtPwd" maxlength="10" size="20">
						</div>
			<input type="submit" value="Login">
		</form>
	</div>
  
 </body>
</html>