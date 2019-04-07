<?php
	if(isset($_COOKIE['auth'])){
	$auth=$_COOKIE['auth'];
	$resArr=explode(':',$auth);
	$userId=end($resArr);
	$mysqli=new mysqli("localhost","root","12345678","lyb");
	$sql="select * from tb_user where id=$userid";
	$result=$mysqli->query($sql);
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		$username=$row['username'];
		$password=$row['password'];
		$authStr=md5($username,$password);
		if($authStr!=$resArr[0]){
			exit("<script>
			
			alert('请你登陆之后访问');
			location.href='login.html';
			</script>");
		}
	}
	else{
		exit("<script>
		alert('请你登陆之后访问');
		location.href='login.html';
		</script>");
	}
	}
?>
