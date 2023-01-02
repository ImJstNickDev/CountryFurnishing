<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminstyles.css">
</head>
<body>


<?php

    session_start();
    $_SESSION['sid'] = session_id();
    if(isset($_SESSION['userlevel']))
    {
        if($_SESSION['userlevel'] == 99)
        {
            echo '
                <br>
                <br>
                <div class="predashboard">
                    <div class="rectform">
                        <center>
                            Benvenuto: '.$_SESSION['username'].'
                            <br>
                            P.IVA: IT3802059072
                            <br>
                            Codice Fiscale: MRNTRT80L21H501L
                        </center>
                    </div>
                </div>
                <div class="dashboard">
                    <center>
                        Benvenuto: '.$_SESSION['username'].'
                        <br>
                        P.IVA: IT3802059072
                        <br>
                        Codice Fiscale: MRNTRT80L21H501L
                    </center>
                </div>
            ';
        } else
        {
            HEADER("url=../logout.php");
        }
    } else
    {
        header("location: ../");
    }

?>
<center><a href="ordini/gestione_ordini.php"><h1>Ordini</h1></a></center>
<center><a href="prodotti/gestione_prodotti.php"><h1>Prodotti</h1></a></center>
<center><a href="utenti/gestione_utenti.php"><h1>Utenti</h1></a></center>
<center><a href="storico/gestione_storico.php"><h1>Storico Ordini</h1></a></center>
</body>
</html>