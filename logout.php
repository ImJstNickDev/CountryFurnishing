<?php
    session_start();

    session_unset();
    session_destroy();
    echo '<h1>Sessione terminata, effettuare nuovamente il login</h1>';
    header('Refresh: 2; URL=index.html');
?>