<?php 
require_once ("../controller/ajout-liste.php");
require_once ("../autoload.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/even.css">
    <title>Ajout d'évènement</title>
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

      <li class="nav-item">
        <a class="nav-link" href="commentaire.php"><span class="menu"> COMMENTAIRES</span> </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php"><span class="deconn"> Deconnexion</span> </a>
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
               <h3> Liste des évènements</h3>
            <table class="table table-bordered">
                              <thead>
                                <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Nom Evènement</th>
                                  <th id="colone" scope="col">Date début</th>
                                  <th id="colone" scope="col">Date fin</th>
                                  <th id="colone" scope="col">Organisateur</th>
                                  <th id="colone" scope="col">Description</th>
                                  <th id="colone" scope="col">Edit</th>
                                  <th id="colone" scope="col">Delete</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              <tr>             
                                       <?php
                                       foreach($list as $key => $value) {
                                       ?>
                                         <tr>
                                            <td id="colone"><?=$key+1?></td>
                                            <td id="colone"><?=$value->nom_event?></td>
                                            <td id="colone"><?=$value->d_debut?></td>
                                            <td id="colone"><?=$value->d_fin?></td>
                                            <td id="colone"><?= $value->organisateur?></td>
                                            <td id="colone"><?= $value->descript?></td>
                                            <td id="colone"><a href="editEvent.php?id_event=<?= $value->id_event?>" type="button"> Editer </a></td>
                                            <td id="colone"><a href="addEvent.php?id_event=<?= $value->id_event?>" type="button"> delete </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>
                              </tr>
                              </tbody>
                            </table>
            </div>

            <div class="form">
            <h3> Formulaire d'insertion</h3>
            <form action="" method="post" enctype="multipart/form-data"> 
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="nom_event" placeholder="Nom de l'évènement" required ="required">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="date" class="form-control" name="d_debut" placeholder="Date du début" required ="required">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="date" class="form-control" name="d_fin" placeholder="Date de fin" required ="required">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="organisateur" placeholder="Oraganisateurs" required ="required">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                          <div class="custom-file"> 
                          <input type="file" class="custom-file-input" name="photo" id="validatedCustomFile">
                          <label class="custom-file-label" for="validatedCustomFile">Charger la photo...</label>
                        </div>
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                          <textarea class="form-control" name="descript" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div><br>
                            
                            <div class="panel-footer" class="btn">
                                <input type="submit" class="btn btn-success pull-right btn" value='Enregistrer'>
                                <button type="reset" class="btn btn-success pull-right btn"> Annuler</button>
                            </div>
            </form>
            </div>
    </div>
    <script type="text/javascript" src="../font/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../font/js/jquery.min.js"></script>
</body>
</html>