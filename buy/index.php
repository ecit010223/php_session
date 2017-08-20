<html>
	<head>
		<title>购物车</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/> 
	</head>
	<body>
	<?php
		if(isset($_GET['PHPSESSID'])){
			$s_id=$_GET['PHPSESSID'];
			//session_id的设置必须放在session_start()的前面，当通过session_id设置了id后，session_start将不会
			//产生一个新的id号
			session_id($s_id);
		}
		session_start();
		$s_id=session_id(); 
	?>
		<table align="center">
			<tr><th colspan="2">欢迎购买</th></tr>
			<tr><td>天龙八部</td><td><a href="buyIt.php?book_id=sn1&book_name='天龙八部'&<?php echo SID;?>">点击购买</a></td></tr>
			<tr><td>笑傲江湖</td><td><a href="buyIt.php?book_id=sn2&book_name='笑傲江湖'&<?php echo SID;?>">点击购买</a></td></tr>
			<tr><td>射雕英雄传</td><td><a href="buyIt.php?book_id=sn3&book_name='射雕英雄传'&<?php echo SID;?>">点击购买</a></td></tr>
			<tr><td>雪山飞孤</td><td><a href="buyIt.php?book_id=sn4&book_name='雪山飞孤'&<?php echo SID;?>">点击购买</a></td></tr>
			<tr><td colspan="2"><hr/></td></tr>
			<tr><td colspan="2"><a href="hasBuy.php?<?php echo SID;?>">查看您已经购买的商品列表</a></td></tr>
		</table>
	</body>
</html>