<?php

function est_vide($valeur):bool{
   return empty($valeur);
}
function est_numeric($valeur):bool{
   return is_numeric($valeur);
} 
function valid_email(string $mail ):bool{
   $pattern = "#\w|(.{1})(^yahoo|iclood|gmail)(^.com|.sn)$#";
    if(preg_match($pattern,$mail)){
       return true;
    }
    return false;
    
    
}
function valid_password(string $password ):bool{
    $pattern = "#(\w|.{6-8})#";
     if(preg_match($pattern,$password)){
        return true;
     }
     return false;
     
 }
 function valid_format(string $format):bool{
   $pattern = "#\w(.png|.jpeg)$#";
    if(preg_match($pattern,$format)){
       return true;
    }
    return false;
    
}
function error_image(array &$arrayError,string $key,$format):array{
   if (est_vide($format)){
      $arrayError[$key]='aucune image' ;
   }elseif(!valid_email($format)){
      $arrayError[$key]='veiller revoire votre format';
   }
   return $arrayError;
}
 function error_email (array &$arrayError,string $key,$mail):array{
      if (est_vide($mail)){
         $arrayError[$key]='champ vide' ;
      }elseif(!valid_email($mail)){
         $arrayError[$key]='email invalide';
      }
      return $arrayError;
 }
 function error_password (array &$arrayError,string $key,$passer):array{
   if (est_vide($passer)){
      $arrayError[$key]='champ vide';
   }elseif(!valid_password($passer)){
      $arrayError[$key]='password invalide';
   }
   return $arrayError;
}

 function form_valid($arrayError):bool{
   if (count($arrayError)==0) {
       return true;
   }
   return false;
}
function valid_name(string $name):bool{
         $pattern="#(^[a-zA-Z\s]{3,50})#";
   if (preg_match($pattern,$name)){
      return true;
   }
   return false;
}
function error_name(array &$arrayError,string $key,$name):array{
   if (est_vide($name)){
      $arrayError[$key]='champ vide';
   }elseif(!valid_name($name)){
      $arrayError[$key]='veiller revoire votre nom';
   }
   return $arrayError;
}
function valid_number (string $numb):bool{
   $pattern ="#^(77|78|75|78|76|33)?(\d){5,7}$#";
   if (preg_match_all($pattern,$numb)){
         return true;
   }
  return false;
}function valid_nombre (string $numb):bool{
   $pattern ="#(\d){0,7}#";
   if (preg_match_all($pattern,$numb)){
         return true;
   }
  return false;
}
function error_number(array &$arrayError,string $key,$numb):array{
   if (est_vide($numb)){
      $arrayError[$key]='champ vide';
   }elseif(!valid_number($numb)){
      $arrayError[$key]='veiller revoire votre numéro de téléphone';
   }
   return $arrayError;
}
function error_chiffre(array &$arrayError,string $key,$numb):array{
   if(!est_numeric($numb)){
         $arrayError[$key]='veiller revoire votre saisi';
      }elseif(est_numeric($numb<-1)){
         $arrayError[$key]='veiller revoire votre saisi';
   }elseif(!valid_nombre($numb)){
      $arrayError[$key]='veiller revoire votre dette';
   }
   return $arrayError;
}
function error_montant(array &$arrayError,string $key,$numb):array{
   if(!est_numeric($numb)){
         $arrayError[$key]='veiller revoire votre saisi';
      }elseif(est_numeric($numb<-1)){
         $arrayError[$key]='veiller revoire votre saisi';
   }elseif(!valid_nombre($numb)){
      $arrayError[$key]='veiller revoir le montant';
   }
   return $arrayError;
}
function generer_date(string $key):array{
   $date=array();
   $actu =date_create ();
   $date [$key] = (date_format($actu,'D'));
   $date [$key] = (date_format($actu,'M'));
   $date [$key] = (date_format($actu,'Y'));
   //(date_format($actu,'D-m-d H:i:s'));
return $date ;
}

function corr_date_en (DateTime $actu):string{
   $actu =date_create ();
   return  date_format($actu,"d/m/Y");
}
function error_lettre(array &$arrayError,string $key,$numb):array{
   if(est_numeric($numb)){
         $arrayError[$key]='veiller revoire votre saisi';
      }
   return $arrayError;
}

/*

function gene_date (int $d , int $m ,int $a): void {
       $dte_jour = date_create("$a/$m/$d");
       var_dump(date_format($dte_jour, "d/m/Y"));  
}
function format_date_en (int $d , int $m ,int $a):void{
       $date_en = date_create("$a/$m/$d");
}
function format_date_fr (int $d , int $m ,int $a):void{
   $date_fr = date_create("$d/$m/$a");
   var_dump($date_fr("d/m/a"));
}
function corr_date_en (DateTime $date):string{
   return  date_format($date,"d/m/Y");
}
function ogi_date (string $format='fr'):string{
   $now = date_create();
   if ($format='fr'){
       return $now;
   }else {
       return corr_date_en($now);
       

   }
       

}
function sum_date (string $format='fr' , ?int $d = null, ?int $m ,?int $a):string{
   if (!is_null($d)){
       $date = date_create("$a/$m/$d");
   }else {
       $date = date_create();
   }
   if($format=='fr'){
       return corr_date_en($date);
   
   }else {
     return $date ;  
   }
}
function date_compare (Datetime $date_avant, DateTime $date_after):void{
           $date_avant = date_create("a/m/j");
           $date_after = date_create();
   if ($date_avant > $date_after) {
       "$date_avant".'older than' ."$date_after";
   }elseif ($date_avant > $date_after) {
        "$date_after".'older than' ."$date_avant"; 
   }else {
        "$date_after".'egal' ."$date_avant"; 
   }
   

}
function date_intervalle (Datetime $date_avant, DateTime $date_after):void{
   $intreval = date_diff($date_after,$date_avant);
echo date_interval_format($intreval,"%y ans %m mois %j jour %H heur ");
}
*/

?>