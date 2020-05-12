<?php
error_reporting(E_ALL);
function autoloard($class)
{
    require "model/".$class.".class.php";
}
spl_autoload_register('autoloard');
?>
