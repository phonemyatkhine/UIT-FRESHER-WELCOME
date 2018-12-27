<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<h2>Admin Login</h2>
	<form action="{{ URL::to('0ZxpO6mib9QhagMx2x2aRaUlD4NAW68KwQww82+sBwt5DpBGbuSKJbD2QclBXw49') }}" method="post" enctype="multipart/form-data">
		@csrf	
		Gmail :
		<input type="text" name="adminEmail">
		Password :
		<input type="password" name="adminPassword">
		<input type="submit" name="btnlogin" value="Login">
	</form>
</body>
</html>