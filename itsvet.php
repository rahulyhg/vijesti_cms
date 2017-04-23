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
			include_once "moduli/menu.php"
				?>
		

		<div class="main" id="main-three-columns">

			<div class="left" id="main-left">
<div class="section-title"><h4>Aktuelne vijesti</h4></div>
				<div class="post">

				<?php
			
				$res = $pdo->query("SELECT id_vesti,vreme_objave, naslov, uvod FROM vesti WHERE kategorija ='1' LIMIT 4");
				
				while($vest = $res->fetch(PDO::FETCH_ASSOC)){
				echo "<div class='post-title'><h2>" . $vest['naslov'] . "</h1></div>";
				echo "<div class='post-date'><br><p>" . $vest['vreme_objave'] . "</p></div>";
				echo "<div class='post-body'> <p>" . $vest['uvod'] . "</p>";
				echo "<a href='saznajVise.php?id=" . $vest['id_vesti'] ."'>Saznaj vise..</a></div>";
				echo "<br><hr>";
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