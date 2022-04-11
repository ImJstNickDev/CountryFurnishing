<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1><center>Sei un amministratore!</center></h1>
    <br>
    <br>


<?php

    session_start();
    $_SESSION['sid'] = session_id();
    echo '<center>Sessione aperta con SessionID: '.$_SESSION['sid'].'<br>Username: '.$_SESSION['username'].'<br>Password(MD5): '.$_SESSION['password'].'<br><br><br><br><br><a href="logout.php">ESEGUI IL LOGOUT</a></center>';

?>

</body>
</html>