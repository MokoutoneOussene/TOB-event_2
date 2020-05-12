<?php 
require_once ("../controller/add_even-comment.php");
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
    <title>Document</title>
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
        <a class="nav-link" href="evenement.php"><span class="menu">EVENEMENTS</span></a>
      </li>
    </ul>
    </div>
  </div>
</nav>
<body>
<body>
  <div class="container" id="contenair">
            <div class="liste">
              <?php
                foreach($list as $key => $value) {
              ?>

            <div class="content-event">
              <div class="event-num"> Evenement N°: <?=$value->id_event?></div>
              <div class="event"><?=$value->nom_event?></div>
              <p class="">Organisé par : <?=$value->organisateur?> <br>
              <span>Du &nbsp &nbsp <?=$value->d_debut?> &nbsp &nbsp Au &nbsp &nbsp <?=$value->d_fin?></span>
              </p>
              <div> 
              <img src="<?=$value->photo?>" alt="" class="even-pic"> 
              </div>
              <div>
                <div class="descript"><?=$value->descript?></div>
              </div> <br>
              <div class="descript">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                            <input type="text" class="form-control" value="<?=$value->id_event?>"  name="id_event" hidden placeholder="Entrer l'evenement" required ="required">
                          <div class="col">
                            <input type="text" class="form-control" name="nom_v" placeholder="Entrer votre nom" required ="required">
                          </div>
                    </div><br>

                    <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="email_v" placeholder="Entrer votre email" required ="required">
                          </div>
                    </div><br>

                    <div class="row">
                          <div class="col">
                            <textarea type="text" class="form-control" name="sujet" placeholder="Laisser votre commentaire" required ="required"> </textarea>
                          </div>
                    </div><br>

                    <div class="panel-footer" class="btn">
                          <input type="submit" class="btn btn-success pull-right btn" value='Envoyer'>
                    </div>

                </form>
              </div>
            </div>
            <?php
               }
            ?>
        </div>
        <div class="form">
               <p class="comment">Commentaire du <?=$value->nom_event?></p>
               <?php
                foreach($list2 as $key => $value) {
              ?>
                  <span class="val">Nom et Prénom:</span> <span class="name"><?=$value->nom_v?></span> <br>
                  <span class="val">Email:</span> <span class="val2"><?=$value->email_v?></span>
                  <p class="com"><?=$value->sujet?></p>
              <?php
               }
            ?>

            </div>
            </div>
            
  </div>
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
 
    <script type="text/javascript" src="../font/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../font/js/jquery.min.js"></script>
</body>
</body>
</html>
