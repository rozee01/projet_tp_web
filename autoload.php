<?php
function loading($className)
{
    
    include_once"./$className.php";
    
}
spl_autoload_register('loading');