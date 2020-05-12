<?php
  require_once ("../model/base.class.php");
  require_once ("../autoload.php");

  $db=new conn();
  $base=$db->getBase();
  $userManager=new UserManager($base);
  $list=$userManager->Affiche();
 
  if (isset($_POST['nom_user']) and $_POST['login'] and $_POST['pwd'] and $_POST['role']) 
  {
    $userManager=new UserManager($base);
    $user=new User($_POST);
    $userManager->ajout($user);
    header("location: addUser.php");
  }
  if(isset($_GET['id_users']))
  {
      $userManager->supp($_GET['id_users']);
      header("location: addUser.php");
  }
?>