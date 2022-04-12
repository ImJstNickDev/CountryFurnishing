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

?>

</body>
</html>