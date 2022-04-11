<?php

    session_start();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = md5($_POST['password']);
    $_SESSION['sid'] = session_id();
    for($cont = 0; $cont < 5; $cont++)
    {
        echo '<h1><center>LOGIN EFFETTUATO, REDIRECT IN 5 SECONDI...</center></h1>';
        sleep(1);
    }
    header('Refresh: 5; URL=dashboard.php');
?>