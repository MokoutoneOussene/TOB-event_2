<?php
  require_once ("../model/base.class.php");
  require_once ("../autoload.php");

  $db=new conn();
  $base=$db->getBase();
  $commentManager=new CommentaireManager($base);
  $list=$commentManager->Affiche();
 
  if (isset($_POST['id_event']) and $_POST['sujet'] and $_POST['nom_v'] and $_POST['email_v']) 
  {
    $commentManager=new CommentaireManager($base);
    $event=new Commentaire($_POST);
    $commentManager->ajout($event);
    header("location: ../view/comment-event.php");
  }

  if(isset($_GET['id_comment']))
  {
      $commentManager->supp($_GET['id_comment']);
      header("location: ../view/commentaire.php");
  }
?>
