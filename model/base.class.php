<?php
class conn
{
   private $base;
   function __construct(){
    $this->base=new PDO("mysql:host=localhost;dbname=bd_event","root","");
   }
   function getBase(){
   return $this->base;
   }
}
?>
