<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Categorie - Country Furnishing (Admin)</title>
    <link rel="stylesheet" href="adminstyles.css">
    <link rel="stylesheet" href="tabella.css">
</head>
<body>
<center><a href="aggiungi_categoria.php"><h1>Aggiungi Categoria</h1></a></center>
<center><a href="gestione_prodotti.php"><h1>Torna indietro</h1></a></center>
<?php

    $conn = new mysqli("localhost", "root", "", "countryfurnishings");
    if($conn->connect_errno)
    {
        exit;
    }
    $query = "SELECT id, nome FROM categorieprodotti";
    $result = $conn->query($query);
    if (mysqli_num_rows($result) != 0)
    {
        echo
        '
            <table>
                <tr>
                    <th>ID Categoria</th>
                    <th>Categoria</th>
                </tr>
        ';
        while($row = $result->fetch_assoc())
        {
            echo
            '
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['nome'].'</td>
                    </tr>
            ';
        }
        echo '</table>';
    } else
    {
        echo '<center><h1>Nessuna categoria Presente</h1></center>';
    }
?>

</body>