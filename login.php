<?php

if(isset($_POST['username'], $_POST['password'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	if(!empty($username) && !empty($password)){
		include_once "core/db.php";
		$stmtUserCheck = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
		$stmtUserCheck->bindValue(1, $username);
		$stmtUserCheck->bindValue(2, $password);
		$stmtUserCheck->execute();
		if($stmtUserCheck->rowCount() > 1){
			die("Greska u sistemu.");
		}else if($stmtUserCheck->rowCount() == 0){
			die("Nepoznat korisnik");
		}
	$user = $stmtUserCheck->fetch(PDO::FETCH_ASSOC);
	
	session_start();
	$_SESSION['f_name'] = $user['f_name'];
	$_SESSION['l_name'] = $user['l_name'];
	$_SESSION['email'] = $user['email'];
	$_SESSION['status'] = $user['status'];
	$_SESSION['w'] = "infoUserW";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
	}
}


?>