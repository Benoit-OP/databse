<!doctype html>
<html>
<head>
<title>
Le répertoire de sites
</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<h1>
Interrogation de la table avec PDO
</h1>

<?php
require_once("connect.php");


$sql="SELECT * from ANNUAIRE";
if(!$connexion->query($sql)) echo "Pb d'accès à l'annuaire de sites";
else{
    ?>
<table class="tableau" id="tableau">
<tr> <td> ID </td> <td> Prénom </td> <td> Nom </td><td> Naissance </td> </tr>
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