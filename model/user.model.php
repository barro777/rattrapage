


<?php

function add_user(array $data):int{
    $pdo = ouvrir_connexion_bd();
    extract ($data);
    $sql = "INSERT INTO `user` (`nom_user`, `prenom_user`, `email_user`, `password`) 
     VALUES ( ?, ? ,? , ?)";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($nom,$prenom,$email,$password,));
    fermer_connexion_bd($pdo);
    return $sth->rowCount();
} 

 
function find_user($login , $password):array{
    $pdo = ouvrir_connexion_bd();
    $sql = "SELECT * From user u
                 Where 
                 u.email_user=? 
                 and u.password=?";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute([$login,$password]);
    $find = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $find;
   
   
    
}
?>