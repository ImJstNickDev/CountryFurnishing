<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="userstyles.scss">
</head>
<body>


<?php

	session_start();
	$orderlink = "'ordina.php'";
	$_SESSION['sid'] = session_id();
	echo '
		<nav>
			<div class="logo">Ciao?</div>
			<input type="checkbox" id="checkbox">
			<label for="checkbox" id="icon">
				<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
			</label>
			<ul>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="ordina.php">Ordina</a></li>
				<li><a href="#">Contattaci</a></li>
				<li><a href="../logout.php">Logout</a></li>
			</ul>
		</nav>
		<br>
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
		<div class="flexdashboard">
			<div class="element">
				<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
			</div>
		</div>
		';

?>

</body>
</html>