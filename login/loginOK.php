<?php
	header("content-type=text/html;charset=utf-8");
	session_start();
	if(!empty($_SESSION['name'])){
		echo "欢迎您！".$_SESSION['name']."<br/>";
		echo "<a href='login.php'>退出登录</a>";
		session_destroy();
	}else{
		header("location:login.php");
	}
?>