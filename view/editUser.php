<?php
  require_once ("../controller/modif-user.php");
  require_once ("../autoload.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/even.css">
    <title>Edit Users</title>
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
            
            </div>

            <div class="form">
            <h3> Formulaire Modifier User</h3>
            <form action="" method="post" enctype="multipart/form-data"> 
                            <input type="text" class="form-control" name="id_users" hidden value="<?= $value->id_users?>">
                        <div class="row">
                        
                          <div class="col">
                            <input type="text" class="form-control" name="nom_user" value="<?= $value->nom_user?>">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="login" value="<?= $value->login?>">
                          </div>
                        </div><br>

                        <div class="row">
                          <div class="col">
                            <input type="password" class="form-control" name="pwd" value="<?= $value->pwd?>">
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col">
                          <select class="form-control" id="exampleFormControlSelect1" name="role">
                              <?php
                                if($value->role!=""){
                                echo "<option>".$value->role."</option>"; 
                                 }
                              ?>
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