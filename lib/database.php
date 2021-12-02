<?php

function ouvrir_connexion_bd():PDO{

    try{
        $options=[
            PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
        ];
        $pdo = new PDO(CHAINE_DE_CONNECTION,USER_BD,PASSWORD_DB,$options);
        return $pdo;
    }catch(PDOException $e){
     die ($e -> getMessage());
        
    }
}

function fermer_connexion_bd(PDO $pdo):void{
    $pdo = null;
}
?>
