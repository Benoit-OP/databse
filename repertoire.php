<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Répertoire de site </title>
</head>
<body>
<?php
require_once("connect.php");


$sql="SELECT * from ANNUAIRE";
if(!$connexion->query($sql)) echo "Pb d'accès à l'annuaire de sites";
else{
    ?>
<table class="tableau" id="tableau">
<tr> <td> ID </td> <td> Prénom </td> <td> Nom </td><td> Téléphone </td> </tr>
    <?php
    foreach ($connexion->query($sql) as $row)
        echo "<tr><td>".$row['ID']."</td>
                <td>".$row['PRENOM']."</td>
                <td>".$row['NOM']."</td>
                <td>".$row['NUMERO_TELEPHONE']."</td></tr><br/>\n";
    ?>
</table>
<?php } ?>
</body>
</html>