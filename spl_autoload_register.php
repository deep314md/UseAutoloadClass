
<?php

spl_autoload_register('classLoader');

function classLoader($class){
 $path = "classes/".$class.".class.php";
 require_once $path;
}
