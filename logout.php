<link rel="stylesheet" href="styles.css">

<?php
    session_start();

    session_unset();
    session_destroy();
    echo '<h1><center>Sessione terminata, effettuare nuovamente il login</center></h1>';
    header('Refresh: 2; URL=index.html');
?>