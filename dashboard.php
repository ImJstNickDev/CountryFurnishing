<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="userstyles.css">
</head>
<body>


<?php

	session_start();
	$_SESSION['sid'] = session_id();
	echo '
		<br>
		<br>
		<div id="menuToggle">
			<input type="checkbox" />
			<span></span>
			<span></span>
			<span></span>
			<ul id="menu">
				<a href="#"><li>Home</li></a>
				<a href="inserimento.php"><li>Aggiungi Smartphone</li></a>
				<a href="eliminazione.php"><li>Elimina Smartphone</li></a>
				<a href="modifica.php"><li>Modifica Smartphone</li></a>
				<a href="wip.php"><li>Cerca Smartphone [WIP]</li></a>
				<a href="visualizza.php"><li>Lista Smartphone</li></a>
				<a href="" target="_blank"><li>Show me more</li></a>
			</ul>
		</div>
		<div class="predashboard">
			<div class="rectform">
				<center>
					Benvenuto: '.$_SESSION['username'].'
					<br>
					P.IVA: IT3802059072
					<br>
					Codice Fiscale: MRNTRT80L21H501L
				</center>
			</div>
		</div>
		<div class="dashboard">
			<div class="container">
				<div class="card">
					<div class="face face1">
						<div class="content">
							<div class="cardicon">
								<img src="orderhistory.png"/>
							</div>
							<h3>Storico Ordini</h3>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<p>Telefoni Presenti: 3</p>
								<a href="visualizza.php">Visualizza</a>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="face face1">
						<div class="content">
							<div class="cardicon">
								<img src="order.png"/>
							</div>
							<h3>Ordina</h3>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
								<a href="inserimento.php">EFFETTUA UN NUOVO ORDINE</a>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="face face1">
						<div class="content">
							<div class="cardicon">
								<img src="mail.png"/>
							</div>
							<h3>Contatti</h3>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<p>Lol Lmao</p>
								<a href="http://www.loser.com" target="_blank">Immagina fare schifo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		';

?>

</body>
</html>