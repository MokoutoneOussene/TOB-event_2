<?php 
require_once ("../model/login.class.php");
// require_once ("../autoload.php");
$rep=verif();
if($rep=='ok')
{
    header("location: ../view/addEvent.php");
}

 else {
 $erreur=$rep; 
 echo $erreur;
}
?> 
