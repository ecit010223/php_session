<html>
	<head>
		<title>session登录测试</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	</head>
	<body>
		<form action="loginProcess.php" method="POST">
			<table align="center" border="1" bordercolor="green" cellspacing="0">
				<tr>
					<th colspan="2">登录框</th>
				</tr>
				<tr>
					<td>用户名：</td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td>密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
					<td><input type="password" name="passwd"/></td>
				</tr>
				<tr>
					<td>验证码：</td><td><input type="text" name="check_code"/></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<img src="checkCode.php" onclick="this.src='checkCode.php?aa='+Math.random()"/>
					</td>
				</tr>
				<tr>
					<td align="right"><input type="submit" value="登录"/></td>
					<td align="center"><input type="reset" value="重置"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>