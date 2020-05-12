<?php
  require_once ("../controller/ajout-user.php");
  require_once ("../autoload.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/even.css">
    <title>Add Users</title>
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
        <a class="nav-link" href="index.php"><span class="deconn"> Deconnexion</span> </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
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
               <h3> Liste des Utilisateurs</h3>
            <table class="table table-bordered">
                              <thead>
                                <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Nom et Prénom</th>
                                  <th id="colone" scope="col">Nom utilisateur</th>
                                  <th id="colone" scope="col">mot de passe</th>
                                  <th id="colone" scope="col">Role</th>
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
                                            <td id="colone"><?=$value->nom_user?></td>
                                            <td id="colone"><?=$value->login?></td>
                                            <td id="colone"><?=$value->pwd?></td>
                                            <td id="colone"><?=$value->role?></td>
                                            <td id="colone"><a href="editUser.php?id_users=<?= $value->id_users?>" type="button"> Editer </a></td>
                                            <td id="colone"><a href="addUser.php?id_users=<?= $value->id_users?>" type="button"> delete </a></td>
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
                            <input type="text" class="form-control" name="nom_user" placeholder="Nom et Prénom"  required ="required">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="login" placeholder="Nom utilisateur" required ="required">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="password" class="form-control" name="pwd" placeholder="Mot de passe" required ="required">
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col">
                          <select class="form-control" id="exampleFormControlSelect1" name="role">
                             <option>Admin</option>
                             <option>Super Admin</option>
                           </select>
                          </div>
                        </div><br>
                            
                            <div class="panel-footer" class="btn">
                                <input type="submit"   class="btn btn-success pull-right btn" value='Enregistrer'>
                                <button type="reset" class="btn btn-success pull-right btn"> Annuler</button>
                            </div>
                         </form>
            </div>
    </div>
    <script type="text/javascript" src="../font/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../font/js/jquery.min.js"></script>
</body>
</html>