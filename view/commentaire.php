<?php 
require_once ("../controller/ajout-comment.php");
require_once ("../autoload.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/even.css">
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
        <a class="nav-link" href="addEvent.php"><span class="menu">EVENEMENTS</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="commentaire.php"><span class="menu"> COMMENTAIRES</span> </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><span class="deconn"> Deconnexion</span> </a>
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
  <div class="container" id="cont-comment">
            <div class="liste-comment">
               <h3> Liste des Commentaires</h3>
            <table class="table table-bordered">
                              <thead>
                                <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Libélé</th>
                                  <th id="colone" scope="col">Evènement</th>
                                  <th id="colone" scope="col">Nom internaut</th>
                                  <th id="colone" scope="col">Email</th>
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
                                            <td id="colone"><?=$value->sujet?></td>
                                            <td id="colone"><?=$value->id_event?></td>
                                            <td id="colone"><?=$value->nom_v?></td>
                                            <td id="colone"><?= $value->email_v?></td>              
                                            <td id="colone"><a href="commentaire.php?id_comment=<?= $value->id_comment?>" type="button"> delete </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>
                              </tr>
                              </tbody>
                            </table>
            </div>
</body>
</html>