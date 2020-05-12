<?php
require_once ("../model/base.class.php");

 function verif()
{
$db=new conn();
$base=$db->getBase();
if(isset($_POST['user']) AND isset($_POST['pwd']))
{
    $user=htmlspecialchars($_POST['user']);
    $pwd=htmlspecialchars($_POST['pwd']);

        $requette=$base->prepare('SELECT * FROM users WHERE login =:user AND pwd =:pwd');
        $requette->execute(array('user'=>$user, 'pwd'=>$pwd));
        $rep=$requette->fetch();
        if($rep)
        {
            return 'ok';
        }
        else
        {
            $erreur="mot de passe ou nom d'utilisateur incorect";
            return $erreur;
        }
}    
}

?>