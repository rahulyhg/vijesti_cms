<?php
	
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	include_once "core/db.php";
		$stmtdeleteVest = $pdo->prepare("DELETE FROM vesti WHERE id_vesti = {$id}");
		$stmtdeleteVest->bindValue(1, $id);
		$stmtdeleteVest->execute();
		if($stmtdeleteVest->rowCount() > 1){
			die("Greska u sistemu.");
		}else if($stmtdeleteVest->rowCount() == 0){
			die("Vest nije uspijesno obrisana");
		}
	echo "uspijesno ste uklonili vest iz baze.<br>
	Kliknite da se vratite na <a href='index.php'>pocetnu";
	
	}
		
		
		
?>