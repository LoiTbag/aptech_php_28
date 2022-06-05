<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>
</head>
<body>
	<h1>Đăng nhập</h1>
	<form action="login_submit.php" method="POST">
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="txtEmail"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="txtPassword"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="đăng nhập" />
         <input type="reset" value="làm mới" />       
	</form>
</body>
</html>