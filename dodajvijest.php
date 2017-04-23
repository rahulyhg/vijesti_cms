<?php 

session_start();
include_once "core/db.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<title>Simple Magazine</title>
</head>

<body id="top">

	

<div id="site">
	<div class="center-wrapper">
           
			 <?php
			 //ukljucivanje menija i hedera
			include_once "moduli/menu.php"
				?>
		

		<div class="main" id="main-three-columns">

			<div class="left" id="main-left">

				<div class="post">

				<?php
			//unosimo formu za proslijedjivanje nove vijesti u bazu				 
	?>         <h1></h1>
	  

					<div class="forma-div">

						  <div class="p2">
							<form class="forma1" action="dodajvijest.php" method="POST">
							<label class="forma1" for="naslov">Naslov:</label><br/>
							<input class="forma1" style=" border: 1px solid #D6D6D6"; type="text" name="naslov"/><br/>
							<label class="forma1" for="naslov">Uvod:</label><br/>
							<input class="forma1" style=" border: 1px solid #D6D6D6"; type="text" name="uvod"/><br/>
							<label class="forma1" for="naslov">Kategorija:</label><br/>
							<select name="kategorija">
								<option value="1">Tehnologija</option>
								<option value="2">Politika</option>
								<option value="3">Sport</option>
								</select><br/>
								<label class="forma1" for="sadrzaj">Sadrzaj:</label><br/>
								<textarea class="forma1" rows="5" cols="50" name="sadrzaj"></textarea><br/>
								<input class="forma1" style=" border: 1px solid #D6D6D6"; type="submit" value="Dodaj">
									</form>
						</div>
						
					</div>
				
				
<?php
	if(isset($_POST['naslov'], $_POST['uvod'], $_POST['sadrzaj'], $_POST['kategorija'])){
	$naslov = trim($_POST['naslov']);
	$uvod = trim($_POST['uvod']);
	$sadrzaj = trim($_POST['sadrzaj']);
	$kategorija = trim($_POST['kategorija']);
	
	
	if(!empty($naslov) && !empty($uvod) && !empty($sadrzaj) && !empty($kategorija)){
		include_once "core/db.php";
		$stmtInsertVest = $pdo->prepare("INSERT INTO vesti(naslov, uvod, sadrzaj, kategorija) VALUES ('$naslov','$uvod','$sadrzaj','$kategorija')");
		$stmtInsertVest->bindValue(1, $naslov);
		$stmtInsertVest->bindValue(2, $uvod);
		$stmtInsertVest->bindValue(3, $sadrzaj);
		$stmtInsertVest->bindValue(4, $kategorija);
		$stmtInsertVest->execute();
		if($stmtInsertVest->rowCount() > 1){
			die("Greska u sistemu.");
		}else if($stmtInsertVest->rowCount() == 0){
			die("Vijest nije uspijesno dodata,zaboravili ste popuniti sve stavke");
		}
	
	}
	
	echo "uspijesno ste dodali novu vijest";
}	
				
?>
				
				
				
				
				
				
				
				
				
				
				
				
				</div>

				<div class="content-separator"></div> 

				<div class="col3 left">
					<div class="column-content">

						<div class="post">
							
						</div>

					</div>
				</div>

				<div class="col3 col3-mid left">
					<div class="column-content">

						<div class="post">
							
						</div>

					</div>
				</div>

				<div class="col3 right">
					<div class="column-content">

						<div class="post">
						
						</div>

					</div>
				</div>

				<div class="clearer">&nbsp;</div>
				
			</div>

			 <div class="left sidebar" id="sidebar-1"> 

				<div class="post">

				<?php
			
				$res = $pdo->query("SELECT id_vesti,vreme_objave, naslov, uvod FROM vesti WHERE id_vesti >4 LIMIT 2");
				
				while($vest = $res->fetch(PDO::FETCH_ASSOC)){
				echo "<div class='post-title'><h5>" . $vest['naslov'] . "</h5></div>";
				
				echo "<div class='post-body'> <p>" . $vest['uvod'] . "</p>";
				echo "<a href='saznajVise.php?id=" . $vest['id_vesti'] ."'>Saznaj vise..</a></div>";
				echo "<br><hr>";
				}	 
	?>
					
				
				</div>

						
<div class="clearer">&nbsp;</div>
			</div>

			<div class="right sidebar" id="sidebar-2">

				<div class="section">

					<div class="section-title">

						<div class="left">Zadnje vijesti</div>
						<div class="right"><img src="img/icon-time.gif" width="14" height="14" alt="" /></div>

						<div class="clearer">&nbsp;</div>

					</div>

	<?php
	include_once "moduli/zadnjevijesti.php"
	?>
	
	
				</div>

				<div class="section">

					
      <?php
	  if(isset($_SESSION['w'])){
		  include_once "moduli/" . $_SESSION['w'] . ".php";
	  }else{
	  include_once "moduli/loginW.php";
	  }
	  ?>

				</div>

				<div class="section network-section">
<?php
//ako je status 1,odnosno admin ukljuci admin widget
	if(isset($_SESSION['w']) && ($_SESSION['status'] == '1')){
		
		include_once "moduli/AdminUser.php";
	 }
	  
		  //ako je status 2,odnosno obican korisnik ukljuci user widget
	elseif(isset($_SESSION['w']) && ($_SESSION['status'] == '2')){ 
	
		include_once "moduli/user.php";
		}
		//akon nije registrovan, registracija widzet
	else{
	         include_once "moduli/registracija.php";}
?>
				</div>

			</div>

			<div class="clearer">&nbsp;</div>

		</div>
	</div>
</div>
		
	
	
 </div>
</body>
</html>