<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="orderstyle.scss">
</head>
<body>
	<nav>
		<div class="logo">Ordina!</div>
		<input type="checkbox" id="checkbox">
		<label for="checkbox" id="icon">
			<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
		</label>
		<ul>
			<li><a href="dashboard.php">Home</a></li>
			<li><a href="#" class="active">Ordina</a></li>
			<li><a href="#">Contattaci</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<div class="flexdashboard">
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
		<div class="element">
			<button class="raise" onclick="window.location.href='.$orderlink.'">ORDINA</button>
		</div>
	</div>
</body>

<?php

	$carrello = [];
	$carrello[1]['prodotto'] = "Supplì alla 'nduja";
	$carrello[1]['quantity'] = 1;
	$carrello[1]['prezzo'] = "5,00";

	$carrello[2]['prodotto'] = "Mozzarelline fritte";
	$carrello[2]['quantity'] = 4;
	$carrello[2]['prezzo'] = "3,00";

	$carrello[3]['prodotto'] = "Pizza Margherita";
	$carrello[3]['quantity'] = 1;
	$carrello[3]['prezzo'] = "7,00";

	$carrello[4]['prodotto'] = "Pizza Prosciutto";
	$carrello[4]['quantity'] = 1;
	$carrello[4]['prezzo'] = "7,00";

	$carrello[5]['prodotto'] = "Pizza Funghi";
	$carrello[5]['quantity'] = 1;
	$carrello[5]['prezzo'] = "7,00";

	HEADER("Refresh: 5; url=ordina_tipo_suppli.php"); 

?>