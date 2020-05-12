<?php
  require_once ("../model/base.class.php");
  require_once ("../autoload.php");

  $db=new conn();
  $base=$db->getBase();
  $userManager=new UserManager($base);
  
  if(isset($_GET['id_users']))
{
    $id_users=$_GET['id_users'];
    $value=$userManager->get((int)$id_users);
}

  if (isset($_POST['nom_user']) and $_POST['login'] and $_POST['pwd'] and $_POST['role']) 
  {
    $userManager=new userManager($base);
    $user=new user($_POST);
    $userManager->modif($user);
    header("location: addUser.php");
  }
?>