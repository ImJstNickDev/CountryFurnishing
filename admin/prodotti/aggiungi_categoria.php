<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista Categorie - Country Furnishing (Admin)</title>
	<link rel="stylesheet" href="adminstyles.css">
</head>
<body>
	<?php
		if(isset($_POST['inviato']))
		{
			$categoria = $_POST['categoria'];
			$conn = new mysqli("localhost", "root", "", "countryfurnishings");
			$query = 'INSERT INTO categorieprodotti(nome) VALUES("'.$categoria.'");';
			if($conn->connect_errno)
			{
				exit;
			}
			$result = $conn->query($query);
            $conn->close();
            HEADER("location:lista_categorie.php");
		} else
		{
			echo
			'
				<center>
					<h1>
						<form action="aggiungi_categoria.php" method="post" style="margin-top:5%;">
							<input type="text" name="categoria" placeholder="Nome Categoria" style="font-size: 1em; border-radius:10px; text-align:center;">
							<br>
							<input type="submit" name="inviato" value="Inserisci" style="font-size: 1em; margin-top:2%; border-radius:10px;">
						</form>
					</h1>
				</center>
			';
		}
		
	?>
</body>