<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=annuaire', 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    /*echo 'connection ok';*/
}
catch(PDOException $e){
    echo $e;
}
?>