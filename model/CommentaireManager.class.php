<?php

class CommentaireManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function ajout(Commentaire $comment)
   {
     $sql=$this->_db->prepare("INSERT INTO commentaires(id_event,sujet,nom_v,email_v) VALUES(:id_event,:sujet,:nom_v,:email_v)");
     $d=$sql->execute(array(
      "id_event"=>$comment->id_event,
      "sujet"=>$comment->sujet,
      "nom_v"=>$comment->nom_v,
      "email_v"=>$comment->email_v,
    ));
   }

   public function get($id_comment)
   {
     $sql=$this->_db->query("SELECT * FROM commentaires WHERE id_comment=".$id_comment);
     $row=$sql->fetch();
     $sql->closeCursor();
     $contrib=new Commentaire($row);
     return $comment;
   }

   public function supp($id_comment)
   {
     $sql=$this->_db->prepare("DELETE FROM commentaires WHERE id_comment=".$id_comment);
     $sql->execute(array($id_comment));
     return $sql>0;
   }
   
   public function affiche()
   {
     $comment=[];
     $sql=$this->_db->query("SELECT * FROM commentaires ORDER BY id_comment");
     $rows=$sql->fetchAll();
     $sql->closeCursor();
     
     foreach ($rows as $row) {

     $comment[]=new Commentaire($row);
     }
     return $comment;
   }
}
