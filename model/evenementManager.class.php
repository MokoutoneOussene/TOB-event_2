<?php

class EvenementManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function ajout(Evenement $event)
   {
     $sql=$this->_db->prepare("INSERT INTO evenements(nom_event,d_debut,d_fin,organisateur,descript,photo) 
     VALUES(:nom_ev,:debut,:fin,:organisateur,:descript,:photo)");
     $d=$sql->execute(array(
      "nom_ev"=>$event->nom_event,
      "debut"=>$event->d_debut,
      "fin"=>$event->d_fin,
      "organisateur"=>$event->organisateur,
      "descript"=>$event->descript,
      "photo"=>$event->photo,
    ));
   }

   public function get($id_event)
  {
    $sql=$this->_db->query("SELECT * FROM evenements WHERE id_event=".$id_event);
    $row=$sql->fetch();
    $sql->closeCursor();
    $even=new Evenement($row);
    return $even;
  }

   public function supp($id_event)
   {
        $resq=$this->_db->prepare("DELETE FROM evenements WHERE id_event=?");
        $resq->execute(array($id_event));
   }
   
   public function Affiche()
    {
        $even=[];
        $resq=$this->_db->query("SELECT * FROM evenements ORDER BY nom_event");
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $even[]=new Evenement ($donnees);
        }
        return $even;
    }

   public function modif(Evenement $even)
    {
     try{ 
            $sql=$this->_db->prepare("UPDATE evenements SET nom_event =:nom_event, d_debut =:d_debut, d_fin =:d_fin, 
            organisateur=:organisateur, descript=:descript, photo=:photo WHERE id_event=:id_event");
            $d=$sql->execute(array(
            'nom_event'=>$even->nom_event,
            'd_debut'=>$even->d_debut,
            'd_fin'=>$even->d_fin,
            'organisateur'=>$even->organisateur,
            'descript'=>$even->descript,
            'photo'=>$even->photo,
            'id_event'=>$even->id_event ));  
     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }
}
