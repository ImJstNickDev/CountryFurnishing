<!doctype html>
<html lang=it>
<head>
<meta charset=utf-8>
<title>REDIRECTING</title>
<style>
body {
	font-family: 'Lato';
	font-weight: 400;
	font-size: 1.4rem;
}
 
p {
	text-align: center;
	margin-bottom: 4rem;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body>


<?php

	$conn = new mysqli("localhost", "root", "", "countryfurnishings");
	if($conn->connect_errno)
	{
		exit;
	}
	$query = 'SELECT username, passphrase, userlevel FROM utenti WHERE username="'.$_POST['username'].'" AND passphrase="'.md5($_POST['password']).'"';
	$result = $conn->query($query);
	if (mysqli_num_rows($result) != 0)
	{
		$row = $result->fetch_assoc();
		session_start();
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = md5($_POST['password']);
		$_SESSION['sid'] = session_id();
		$_SESSION['userlevel'] = $row['userlevel'];
		if($row['userlevel'] == 0)
		{
			$userdashboard = "user/dashboard";
		} else if($row['userlevel'] == 99)
		{
			$userdashboard = "admin/admin_dashboard";
		}
		echo '
		<div><h1><center>LOGIN EFFETTUATO, REDIRECT IN <span id="time">5</span> SECONDI...</center></h1></div>
		<script>
			function startTimer(duration, display) {
				var timer = duration;
				timer--;
				display.textContent = duration;
				setInterval(function () {
					display.textContent = timer;
		
					if (--timer < 0) {
						timer = duration-1;
						window.location = "'.$userdashboard.'.php";
						display.textContent = duration;
					}
				}, 1000);
			}
		
			window.onload = function () {
				var display = document.querySelector("#time");
				startTimer(5, display);
			};
		</script>
		';
	} else
	{
		echo
		'
			<div class="login">
				<div class="form">
					<form action="login.php" method="POST" class="login-form" >
						<span class="material-icons">ERROR</span>
						<br>
						<br>
						<br>
						<p style="font-size:x-large;">Nome utente o password non corretti</p>
						<a href=".">Riprovare</a>
					</form>
				</div>
			</div>
		';
	}
	$result->free();
	$conn->close();
?>

</body>
</html>