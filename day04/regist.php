<?php
//应用pdo完成用户注册
$dsn = "mysql:host=localhost;dbname=psd1604";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
if($_POST){
	$username = isset($_POST['username'])?$_POST['username']:"";
	$password = isset($_POST['password'])?$_POST['password']:"";
	$email = isset($_POST['email'])?$_POST['email']:"";
	$birthday = isset($_POST['birthday'])?$_POST['birthday']:"";
	
	//对数据进行过滤
	if($username==""){
		echo "用户名不能为空";
		exit;
	}
	
	if($password==""){
		echo "密码不能为空";
		exit;
	}
	
	if($email==""){
		echo "邮箱不能为空";
		exit;
	}
	
	if($birthday==""){
		echo "生日不能为空";
		exit;
	}
	
	
	
//PDO通知mysql做准备
$query = "insert into regist (username,password,email,birthday) 
		values
		(:username,:password,:email,:birthday)";
$statm = $pdo->prepare($query);
//PDOStatment绑定参数
$statm->bindParam(":username",$username);
$statm->bindParam(":password",$password);
$statm->bindParam(":email",$email);
$statm->bindParam(":birthday",$birthday);

//PDOStatment 执行 execute
$result = $statm->execute();
if($result){
	echo "注册成功";
}else{
	echo "注册失败";
}
}

?>

















