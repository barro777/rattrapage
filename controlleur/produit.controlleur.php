<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='prod') {
       mes_produit();
       }elseif ($_GET['views']=='insert') {
        require(ROUTE_DIR.'views/produit/insert_produit.html.php');
       }elseif ($_GET['views']=='edit') {
         //update
        require(ROUTE_DIR.'views/produit/insert_produit.html.php');
       }elseif ($_GET['views']=='supprimer') { 
        $id_produit= $_GET ['id_produit'];
        delete_produit($id);
        require(ROUTE_DIR.'views/produit/delete.html.php');
       }elseif ($_GET['views']=='delete') { 
        delete_produit($id);
       }
       


    }else{
            require(ROUTE_DIR.'views/security/connexion.html.php');
        }

}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
        if (isset($_POST['action'])) {
             if ($_POST['action']=='inser_produit') {  
                 unset($_POST['controlleur']);
                 unset($_POST['action']);
                inscrire_produit($_POST);
              }
          }
       
      }



      function inscrire_produit(array $post){
        $arrayError=array();
          extract($post);
          error_name($arrayError,'libelle',$libelle); 
          error_montant($arrayError,'prix',$prix);
          if (!form_valid($arrayError)){
            $_SESSION['arrayError']=$arrayError;
            
        }else{
         // $target_dir = ROUTE_DIR.'public/image';
          //$target_file = $target_dir . basename($files["photo"]["name"]);
          //upload_image($file,$target_file);
          //add_produit($post,$files);
            header('location:'.WEB_ROUTE.'?controlleur=produit&views=insert');
        } 
      }



function mes_produit(){
  $count = count_produit();
  $par_page = NBR_PAGE;
  $current_page=isset($_GET['page'])?$_GET['page']:1;
  $page=ceil($count/$par_page);
  $premier=($current_page*$par_page)-$par_page;
  $produits=get_produit($premier);
  $prod=$produits['data'];
  //var_dump($prod); die;

require(ROUTE_DIR.'views/produit/produit.html.php');
}
       

//`nom_produit`,`prix`, `id_fournisseur`, `quantite_stock`, `id_sous_categorie`, `image`
         // $produit=[
           // $libelle,$prix,$four,$quant,$souscate,$files["photo"]["name"]
          //];



function delete_produit($id_produit){
   delete ($id_produit);
   require_once(ROUTE_DIR.'views/produit/produit.html.php');
    exit;
}

 ?>