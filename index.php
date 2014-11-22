<?php

?>

<html>
	<head>
		<title>Pan tadeusz</title>
		<meta charset="UTF-8">
		<link rel="Stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
	</head>
	<body>
		<header>
			<h1>PAN TADEUSZ</h1>
			<h4>czyli<br>OSTATNI ZAJAZD NA LITWIE<br>HISTORIA SZLACHECKA Z ROKU 1811 i 1812<br>WE DWUNASTU KSIĘGACH WIERSZEM </h4>
		</header>
		<div class="row">
			<div class="col-md-4">
				<ul class="nav nav-pills nav-stacked">
					<?php
						for ($i=1;$i<=12;$i++){
							$cos='ksiega'.$i;
							if ($cos==$_GET[co]){
								$cos=' active';
							}
							else $cos='';
							echo '<li role="presentation" class="list-group-item'.$cos.'"><a href="index.php?co=ksiega'.$i.'">Księga '.$i.'</a></li>';
						}


					?>
					<li role="presentation" class="list-group-item"<?php if($_GET[co]=='refleksja') echo '" active"'; ?>><a href="index.php?co=refleksja">Refleksje</a></li>

				</ul>
			</div>
			<div class="col-md-8">
				<?php
					for ($i=1;$i<=12;$i++){
							$cos='ksiega'.$i;
							if ($cos==$_GET[co]){
								$cos='./ksiegi/'.$_GET[co].'.html';
								require_once($cos);
							}
							
						}
					if ($_GET[co]=='refleksja'){
						include 'refleksja.php';
					}
					if ($_GET[co]=='dodaj'){
						include 'dodaj.php';
					}
				?>
			</div>
		</div>	
		<footer>
			<p>(c)Katarzyna Wójcik</p>
		</footer>


	</body>


</html>
