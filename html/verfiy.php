<?php
	require_once 'code.php';
	session_start();
	$_SESSION['verfiyCode']=gernerateVerify();
	?>