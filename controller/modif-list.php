<?php
  require_once ("../model/base.class.php");
  require_once ("../autoload.php");

  $db=new conn();
  $base=$db->getBase();
  $evenManager=new EvenementManager($base);
  $list=$evenManager->Affiche();
  
  if(isset($_GET['id_event']))
{
    $id_event=$_GET['id_event'];
    $value=$evenManager->get((int)$id_event);
}

if (isset($_POST['nom_event']) and $_POST['d_debut'] and $_POST['d_fin'] and $_POST['organisateur'] 
and $_POST['descript'] and $_FILES['photo'] and $_POST['id_event']) 
  {
    $evenManager=new EvenementManager($base);
    $user=new Evenement($_POST);
    $evenManager->modif($user);
    header("location: addEvent.php");
  }

?>