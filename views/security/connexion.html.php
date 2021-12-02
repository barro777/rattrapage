<?php 
    if (isset($_SESSION['arrayError'])) {
        $arrayError=$_SESSION['arrayError'];
        unset($_SESSION['arrayError']);
    }
  
?>
<?php require (ROUTE_DIR.'views/inc/header.html.php');?>
  <body>
          <div class="bg-danger">
                <div class="haut">   
                          <h4
                          class="txt">
                          location de camion
                          </h4>
                </div>  
                                        
          </div>
   
      <div class="container">
                  
          <div class="mt-5 offset-1" id="box">

                <form method="POST" action="<?=WEB_ROUTE?>"class="offset-3" >
                        <input type="hidden" name="controlleur" value="security">
                        <input type="hidden" name="action"value="connexion">
                        <h5 class="offset-3 ">Se Connecter</h5>
                        <?php if(isset($arrayError['error_Connexion'])): ?>
                            <div class="alert alert-danger col-8" role="alert">     
                            <?= $arrayError['error_Connexion']?>
                            </div>
                            <?php endif ?>
                            
                                <div class="form-group col-8 ">
                                <label for="">login</label><i class="bi bi-person-circle" id="icon" ></i>
                                <input type="text" class="form-control" name="email" id=""  placeholder="">
                                <small  class="form-text text-danger">
                                      <?= isset($arrayError['email']) ? $arrayError['email']:""; ?>
                                </small>
                                </div>

                                <div class="form-group col-8 ">
                                <label for="">Password</label><i class="bi bi-key-fill" id="icone"></i>
                                <input type="password" class="form-control" name="passer" id="" aria-describedby="helpId" placeholder="">
                                <small  class="form-text text-danger">
                                    <?= isset($arrayError['passer']) ? $arrayError['passer']:""; ?>
                                </small>
                                </div>
                                        <button type="submit" name="connexion" class="btn btn-warning offset-3">connexion</button>
                </form>
            </div>    
      </div>
      <?php require (ROUTE_DIR.'views/inc/footer.html.php');?>
      
  