<?php 

function Controller_autoload($className)
{
    include 'controllers/' . $className . '.php';
}

spl_autoload_register('Controller_autoload');
