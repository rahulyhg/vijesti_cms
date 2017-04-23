				<?php
			
				$res = $pdo->query("SELECT id_vesti, naslov, vreme_objave FROM vesti ORDER BY vreme_objave DESC LIMIT 2 ");
				
				while($vest = $res->fetch(PDO::FETCH_ASSOC)){
					
					echo "<div class='section-content'>";
					echo "<ul class='nice-list'>";
					echo "<li>";
					echo "<div class='left'><a href='saznajVise.php?id=" . $vest['id_vesti'] ."'>" . $vest['naslov'] . "</a></div>";
					echo "<div class='left'><i>" . $vest['vreme_objave'] . "</i></div>";
					echo "<div class='clearer'></div>";
					echo "</li>";
					echo "<hr>";
				}	 
	?>