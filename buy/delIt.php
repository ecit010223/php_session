<?php
	if(!empty($_GET['key'])){
		$key=$_GET['key'];
		if(isset($_GET['PHPSESSID'])){
			$s_id=$_GET['PHPSESSID'];
			session_id($s_id);
		}
		session_start();
		unset($_SESSION[$key]);
	}
	echo "<a href='hasBuy.php?".SID."'>查看购物车</a>";
?>