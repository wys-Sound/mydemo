<?php
	$mysqli=new mysqli("localhost","root","12345678","shop");
	if(!$mysqli){
		die('连接出错');
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$phone=$_POST["phone"];
		$sql="select * from tb_user where phone='{$_POST["phone"]}'";
		$result=$mysqli->query($sql);
		$row=mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result)==1){
			$result='{"success": true,"msg": "手机号码正确'.$row["username"].'"}';
		}else{
			$result='{"success": false,"msg": "手机号码不正确"}';
		}
		echo $result;
	}
	
?>
