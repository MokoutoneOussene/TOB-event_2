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
    <title>Modifier Evènement</title>
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
        <a class="nav-link" href="addEvent.php"><span class="menu">EVENEMENTS</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="commentaire.php"><span class="menu"> COMMENTAIRES</span> </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index"><span class="deconn"> Deconnexion</span> </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="addUser.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compte</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

    </ul>
    </div>
  </div>
</nav>

<body>
  <div class="container" id="contenair">
            <div class="liste">
              <div class="liste-modif">

              </div>             
            </div>

            <div class="form">
            <h3> Formulaire de modification</h3>
            <form action="" method="post" enctype="multipart/form-data"> 
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="id_event" hidden value="<?= $value->id_event?>">
                            <input type="text" class="form-control" name="nom_event" value="<?= $value->nom_event?>">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="date" class="form-control" name="d_debut" value="<?= $value->d_debut?>">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="date" class="form-control" name="d_fin" value="<?= $value->d_fin?>">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="organisateur" value="<?= $value->organisateur?>">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                          <div class="custom-file"> 
                          <input type="file" class="custom-file-input" name="photo" value="<?=$value->photo?>" id="validatedCustomFile">
                          <label class="custom-file-label" for="validatedCustomFile">Charger la photo...</label>
                        </div>
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                          <textarea class="form-control" name="descript" value="<?= $value->descript?>" id="exampleFormControlTextarea1" rows="3">
                          <?php
                               if($value->descript !=""){
                                  echo $value->descript; 
                               }
                            ?>
                          </textarea>
                          </div>
                        </div><br>
                            
                            <div class="panel-footer" class="btn">
                                <input type="submit"   class="btn btn-success pull-right btn"  value='Modifier'>
                                <button type="reset" class="btn btn-success pull-right btn"> Annuler</button>
                            </div>
            </form>
            </div>
    </div>
    <script type="text/javascript" src="../font/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../font/js/jquery.min.js"></script>
</body>
</html>