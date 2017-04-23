<?php
	if(isset($_POST['f_name'], $_POST['l_name'], $_POST['username'], $_POST['password'], $_POST['email'])){
	$ime = trim($_POST['f_name']);
	$prezime = trim($_POST['l_name']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);
	$status = 2;
	
	if(!empty($ime) && !empty($prezime) && !empty($username) && !empty($password) && !empty($email)){
		include_once "core/db.php";
		$InsertUser = $pdo->prepare("INSERT INTO users(f_name, l_name, username, password, email, status) VALUES ('$ime','$prezime','$username','$password','$email', '$status')");
		$InsertUser->bindValue(1, $ime);
		$InsertUser->bindValue(2, $prezime);
		$InsertUser->bindValue(4, $username);
		$InsertUser->bindValue(4, $password);
		$InsertUser->bindValue(5, $email);
		$InsertUser->execute();
		if($InsertUser->rowCount() > 1){
			die("Greska u sistemu.");
		}else if($InsertUser->rowCount() == 0){
			die("korisnik nije uspijesno registrovan");
		}
	
	}
	
	echo "Uspjesno ste registrovani. <br> Molimo kliknite ovde da se <a href='index.php'>logujete</a>";

	
	}
	
	

?>