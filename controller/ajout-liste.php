<?php
  require_once ("../model/base.class.php");
  require_once ("../autoload.php");

  $db=new conn();
  $base=$db->getBase();
  $evenManager=new EvenementManager($base);
  $list=$evenManager->Affiche();
  
  if (isset($_POST['nom_event']) and $_POST['d_debut'] and $_POST['d_fin'] and $_POST['organisateur'] 
  and $_POST['descript'] and $_FILES['photo']) 
  {
    move_uploaded_file($_FILES['photo']['tmp_name'], '../font/picture/'.$_POST['nom_event'].'photo.jpg');
    $_POST['photo']='../font/picture/'.$_POST['nom_event'].'photo.jpg';
    $evenManager=new EvenementManager($base);
    $event=new Evenement($_POST);
    $evenManager->ajout($event);
    header("location: addEvent.php");
  }

  if(isset($_GET['id_event']))
  {
      $evenManager->supp($_GET['id_event']);
      header("location: addEvent.php");
  }
?>
