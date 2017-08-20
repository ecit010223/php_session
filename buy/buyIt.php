<?php
	if(!empty($_GET['book_id'])&&!empty($_GET['book_name'])){
		$book_id=$_GET['book_id'];
		$book_name=$_GET['book_name'];
		
		//不能让服务器创建一个新的session文件
		if(isset($_GET['PHPSESSID'])){
			$s_id=$_GET['PHPSESSID'];
			session_id($s_id);
		}
		
		session_start();
		$_SESSION["$book_id"]=$book_name;
	}	
	echo "购买成功<br/>";
	echo "<a href='index.php?".SID."'>返回购物大厅</a>";
?>