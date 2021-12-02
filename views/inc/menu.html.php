<?php
 require (ROUTE_DIR.'views/inc/header.html.php'); ?>
  <body>
  <div class="bg-danger">
                <div class="haut">  
                          <h3
                          class="txt">
                          gestion des camion 
                          </h3>
                          <img class=""src="<?=CHAINE_DE_CONNECTION.$_SESSION['useConnect'][0]['image']?>" alt="" style="">
                        <?php if (isset($_GET['views'])=='Déconnexion'):?>
                            <a href="controlleur=security&views=Déconnexion"class="btn btn-primary offset-9 " >Déconnexion</a>
        
                        <?php endif ?>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=WEB_ROUTE.'?controlleur=produit&views=prod'?>">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="<?=WEB_ROUTE.'?controlleur=security&views=inscription'?>">ajouter un utilisateur </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=WEB_ROUTE.'?controlleur=produit&views=insert'?>">ajouter un camion</a>
      </li>
     
    </ul>
  </div>
</nav>
