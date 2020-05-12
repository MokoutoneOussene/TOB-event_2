<?php
  require_once ("../model/base.class.php");
  require_once ("../autoload.php");

  $db=new conn();
  $base=$db->getBase();
  $evenManager=new EvenementManager($base);
  $commentManager=new CommentaireManager($base);
  $list=$evenManager->Affiche();
  $list2=$commentManager->Affiche();

  if(isset($_GET['id_event']))
  {
      $id_event=$_GET['id_event'];
      $value=$evenManager->get((int)$id_event);
  }

  if (isset($_POST['id_event']) and $_POST['sujet'] and $_POST['nom_v'] and $_POST['email_v']) 
  {
    $commentManager=new CommentaireManager($base);
    $event=new Commentaire($_POST);
    $commentManager->ajout($event);
    header("location: ../view/comment-even.php");
  }
?>