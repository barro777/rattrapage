<?php 
      function est_connect():bool{
        return isset($_SESSION['userConnect']);
     }
     function est_gestionnaire():bool{
         return est_connect() && $_SESSION['userConnect'][0]['nid_role']=='1';
     }
     function est_responsable_achat():bool{
         return est_connect() && $_SESSION['userConnect'][0]['id_role']=='2';
     }
     function est_responsable_paiement():bool{
        return est_connect() && $_SESSION['userConnect'][0]['id_role']=='3';
    }
?>