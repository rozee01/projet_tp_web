<?php 
function load($class){
   include_once ("{$class}.php");
}
spl_autoload_register('load');

?>