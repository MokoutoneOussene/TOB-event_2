<?php 
require_once ("../controller/modif-list.php");
require_once ("../autoload.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/even.css">
    <link rel="stylesheet" href="../font/css/footer.css">
    <link rel="stylesheet" href="../font/css/evenement.css">
    <title>Evènement</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
     <img src="../font/picture/ts.png" alt="logo platforme" class="logo">
     <div class="collaps">
    <ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link" href="../index.php"><span class="menu">ACCUEIL</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><span class="menu">EVENEMENTS</span></a>
      </li>

    </ul>
    </div>
  </div>
</nav>
<body>
    <div class="contener">
        <div class="publicite">
            <h4 id="pub">Espace publicitaire</h4>
            <div class="contenu">
                <img src="../font/picture/ts.png" alt="logo platforme" class="logo-footer">
            </div>
            <hr>
        </div>
        <!-- <h4>TOUS LES EVENEMENTS</h4> -->
        <div class="list-event">
                       <?php
                         foreach($list as $key => $value) {
                       ?>
            <div class="content-event">
              <div class="event-num"> Evenement N°: <?=$value->id_event?></div>
              <div class="event"><?=$value->nom_event?></div>
              <p class="organ">Organisé par : <?=$value->organisateur?> <br>
              <span>Du &nbsp &nbsp <?=$value->d_debut?> &nbsp &nbsp Au &nbsp &nbsp <?=$value->d_fin?></span>
              </p>
              <div> 
                <img src="<?=$value->photo?>" alt="" class="even-pic"> 
              </div>
              <div>
                <div class="descript"><?=$value->descript?></div>
              </div>
              <div>
                
                <a href="comment-even.php?id_event=<?= $value->id_event?>" type="button" class="btn btn-success pull-right btn"> Commenter </a>
              </div>
            </div>
            <?php
               }
            ?>
        </div>
    </div>
</body>
    
<footer>
    <section class="niv2-foot">
      <div class="gauche">
        <img src="../font/picture/ts.png" alt="logo platforme" class="logo-footer">
      </div>
      <div class="droite">
          <div class="qui-sommes-nous">
                <h3>QUI SOMMES NOUS</h3>
                <p>TOB est une entreprise de gestion des évènements plus precisement les evenements educatifs, artistiques et nuptials</p>
          </div>
          <div class="nous-contacter">
                <h3>NOUS CONTACTER</h3>
                <ul>
                    <li>www.tobevent.com</li>
                    <li>tobevent1@gmail.com</li>
                    <li>Tel: 67126984</li>
                    <li>Tel: 67186063</li>
                    <li>Tel: 70603065</li>
                </ul>
          </div>
      </div>
    </section>
 </footer>
</html>