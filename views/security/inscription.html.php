<?php 
    if (isset($_SESSION['arrayError'])) {
        $arrayError=$_SESSION['arrayError'];
        unset($_SESSION['arrayError']);
    }
 
?>
<?php require (ROUTE_DIR.'views/inc/menu.html.php');?> 
<div class="container">                
 <div class="mt-5" > 
                      <form method="POST" action="<?=WEB_ROUTE?>" class="row g-3" enctype="multipart/form-data">
                        <input type="hidden" name="controlleur"value="security">
                        <input type="hidden" name="action"value="inscrire"> 
                      <div class="col-md-6">
                        <label class="form-label" >Nom</label>
                        <input type="text" name="nom"  class="form-control" >
                        <small  class="form-text text-muted">
                                    <?= isset($arrayError['nom']) ? $arrayError['nom']:""; ?>
                        </small>
                      </div>
                      <div class="col-md-6">
                        <label  class="form-label"  >Prenom</label>
                        <input type="text" name="prenom" class="form-control" >
                        <small  class="form-text text-muted">
                              <?= isset($arrayError['prenom']) ? $arrayError['prenom']:""; ?>
                        </small>
                      </div> 
                                    
                                <div class="col-md-6 mt-1">
                                  <label  class="form-label" >Login</label>
                                  <input type="text" name="email" class="form-control"placeholder="mamade@gmail">
                                  <small  class="form-text text-muted">
                                         <?= isset($arrayError['email']) ? $arrayError['email']:""; ?>
                                </small>
                                </div>
                                
                                <div class="col-md-6">
                                  <label class="form-label">Password</label>
                                  <input type="password" name="password" class="form-control">
                                  <small  class="form-text text-muted">
                                          <?= isset($arrayError['password']) ? $arrayError['password']:""; ?>
                                 </small>
                                </div>
                                          
                                           

                      <div class="col-12 offset-5 mt-2" >
                        <button type="submit" class="btn btn-warning" name="">inscrire</button>
                      </div>
                    </form>
  </div>
  </div>

<?php require (ROUTE_DIR.'views/inc/footer.html.php');?>

                                   

                                          
