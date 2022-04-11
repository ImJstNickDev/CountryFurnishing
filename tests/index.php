<!doctype html>
<html lang=en>
<head>
<meta charset=utf-8>
<title>PHP Function in JavaScript Demo</title>
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
</head>
<body>
<div>Redirect in <span id="time">5</span></div>
<script>
	function startTimer(duration, display) {
		var timer = duration, minutes, seconds;
		timer--;
		setInterval(function () {
			display.textContent = timer;

			if (--timer < 0) {
				window.location = 'wrap.php';
			}
		}, 1000);
	}

	window.onload = function () {
		var display = document.querySelector('#time');
		startTimer(5, display);
	};
</script>
</body>
</html>