<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Registrati - Country Furnishing</title>
</head>
<body>
	<div class="login">
		<div class="form">
			<?php
				if(!isset($_POST['submit']))
				{
					echo
					'
								<form action="register.php" method="POST" class="login-form" >
									<span class="material-icons">CIAO!</span>
									<br>
									<br>
									<br>
									<input type="text" name="nome" id="nome" placeholder="Nome" required>
									<input type="text" name="cognome" id="cognome" placeholder="Cognome" required>
									<input type="text" name="username" id="username" placeholder="Nome Utente" required>
									<input type="email" name="email" id="email" placeholder="E-Mail" required>
									<input type="text" name="codfis" id="codfis" placeholder="Codice Fiscale" required>
									<input type="password" name="password" id="password" placeholder="Password" required />
									<button name="submit" id="submit" type="submit">REGISTRATI</button>
									<br>
									<br>
									<a href=".">Sei iscritto? Effettua il login</a>
								</form>
							</div>
						</div>
					';
				} else
				{
					$nome = $_POST['nome'];
					$cognome = $_POST['cognome'];
					$username = $_POST['username'];
					$email = $_POST['email'];
					$codfis = $_POST['codfis'];
					$password = md5($_POST['password']);

					$conn = new mysqli("localhost", "root", "", "countryfurnishings");
					if($conn->connect_errno)
					{
						exit;
					}
					$query = "INSERT INTO utenti(nome,cognome,username,passphrase,email,codfis) VALUES('$nome', '$cognome', '$username', '$password', '$email', '$codfis');";
					echo($query);
					$result = $conn->query($query);
					echo
					'
						<form class="login-form" >
							<span class="material-icons">FATTO!</span>
							<br>
							<br>
							<br>
							<p style="font-size:larger;">Clicca il link arrivato sulla tua mail per proseguire.<br><br>Una volta attivato l'."'".'account potresti dover attendere che il titolare abiliti la tua utenza.</p>
							<br>
							<a href=".">Confermato la mail?<br>Torna al login</a>
						</form>
					</div>
				</div>
					';
				}
			?>
</body>
</html>