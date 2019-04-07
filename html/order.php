<?php 
	session_start();			//重启session
	date_default_timezone_set("PRC"); 
	$arr=$_SESSION["mycar"];//从session中拿出二维数组
	$ids = array_column($arr,"pid"); 
	$goods=array_column($arr,"name");
	$id=implode(",",$ids);
	$goods_na=implode(",",$goods);
	$nums=$_COOKIE["nums"];
	$mysqli=new mysqli("localhost","root","12345678","shop");
	if(isset($_COOKIE["username"])){
		$username=$_COOKIE["username"];
		$sql="select * from tb_user where username='{$_COOKIE["username"]}'";
		$result = $mysqli->query($sql);
		$row=mysqli_fetch_assoc($result);
		
		if(isset($_COOKIE["num"])){
			$payment=$_COOKIE["sum"];
			$payment_time=date('Y-m-d h:i:s', time());
			$user_id=$row["id"];
			$buyer_nick=$row["username"];
			$address=$row["address"];
			$phone=$row["phone"];
			$goods_id=$id;
			$goods_name=$goods_na;
			$sqle="insert into tb_order(payment,payment_time,user_id,buyer_nick,num,address,phone,goods_id,goods_name) values('$payment','$payment_time','$user_id','$buyer_nick','$nums','$address','$phone','$goods_id','$goods_name') ";
			$mysqli->query($sqle);
			if($mysqli->affected_rows>0){
				setcookie("nums");
				setcookie("num");
				exit("<script>alert('购买成功！请留意物流信息哦。');location.href='delete.php?id=$id';</script>");
				
			}
		}else{
			exit("<script>alert('请勾选需要购买的商品！');location.href='shopcart.php';</script>");
		}
		
	}else{
		exit("<script>
		alert('请先登陆！');
		location.href='login.html';
		</script>");
	}
	
?>
