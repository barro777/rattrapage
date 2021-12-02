<?php 
require (ROUTE_DIR.'views/inc/menu.html.php');
$scths=get_type();

?>
 <form method="POST" action="<?=WEB_ROUTE?>" class="row g-3" enctype="multipart/form-data">
 <div class="container"> 

         <input type="hidden" name="controlleur"value="produit">
         <input type="hidden" name="action"value="inser_produit">

   <div> <h4 style="text-align: center;" id="ptitre" class="mt-3 ">Enregistrer un Produit <hr> </h4></div> 
     
      <div class=""id="input"style=""> 
      <h4 style="text-align: center;" class="mt-3">Formulaire<hr> </h4>
           <div class="row mt-5">
           <div class=" col-sm ml-2">
                <label for="">camion</label>
                <input type="text" class=" col-sm" name="libelle" id="bord">
            </div>
            <div class="col-sm ml-1">
                            <label for=""class="">matricule</label>
                            <input type="text" class="col-sm" name="prix" id="bord" placeholder="                                 fcfa">
            </div>
                      <div class="col-sm mr-2" >
                            <label for=""class="mr-2">type</label>
                            <select name="souscate"class="col-sm" id="bord">
                            <?php foreach ($scths as $scth):?>
                              <option value="<?=$scth['id_type']?>"><?=$scth['nom_type']?></option>
                              <?php endforeach?>
                            </select>
            </div>
           </div>
           
           <div>
           
          <button  type="submit" class="btn btn-warning mt-3 " id="right">Valider</button>
           </div>
           
        </div> 
    </div>
             
  </div>

 </div>
 </form>

<?php require (ROUTE_DIR.'views/inc/footer.html.php');?>







