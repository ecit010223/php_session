<?php
	echo "购物车商品有<br/>";

	//不会让服务器创建一个新的session文件
	if(!empty($_GET['PHPSESSID'])){
		$s_id=$_GET['PHPSESSID'];
		session_id($s_id);
	}
	session_start();
	if(!empty($_SESSION)){
		foreach($_SESSION as $key => $val){
			echo $key."===>".$val;
			echo "<a href='delIt.php?key={$key}&".SID."'>删除产品</a><br/>";
		}
	}
	echo "<a href='index.php?".SID."'>继续购买</a>";
?>