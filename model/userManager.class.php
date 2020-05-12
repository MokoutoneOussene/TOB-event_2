<?php
class UserManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function ajout(User $user)
   {
     $sql=$this->_db->prepare("INSERT INTO users(nom_user,login,pwd,role) 
     VALUES(:nom_user,:login,:pwd,:role)");
     $d=$sql->execute(array(
      "nom_user"=>$user->nom_user,
      "login"=>$user->login,
      "pwd"=>sha1($user->pwd),
      "role"=>$user->role,
    ));
   }

  public function get($id_users)
   {
     $sql=$this->_db->query("SELECT * FROM users WHERE id_users=".$id_users);
     $row=$sql->fetch();
     $sql->closeCursor();
     $us=new User($row);
     return $us;
   }

   public function supp($id_users)
   {
        $resq=$this->_db->prepare("DELETE FROM users WHERE id_users=?");
        $resq->execute(array($id_users));
   }
   
   public function Affiche()
    {
        $user=[];
        $resq=$this->_db->query("SELECT * FROM users");
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $user[]=new User ($donnees);
        }
        return $user;
    }

   public function modif(User $user)
    {
     try{ 
            $sql=$this->_db->prepare("UPDATE users SET nom_user =:nom_user, login =:login, pwd =:pwd, role=:role WHERE id_users=:id_users");
            $d=$sql->execute(array(
            'nom_user'=>$user->nom_user,
            'login'=>$user->login,
            'pwd'=>$user->pwd,
            'role'=>$user->role,
            'id_users'=>$user->id_users
          ));  

     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }
}
