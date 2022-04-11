<?php

    session_start();
    $sid = session_id();
    echo '<center>Sessione aperta con SessionID: '.$_SESSION['sid'].'<br>Username: '.$_SESSION['username'].'<br>Password(MD5): '.$_SESSION['password'].'<br><br><br><br><br><a href="logout.php">ESEGUI IL LOGOUT</a></center>';

?>