<?php
	require_once 'config.php';
	require_once 'lib/functions.php';
    require_once 'template.php';

   
    $obj=new functions();
    //$obj->get_string('1');
    $obj->get_simbol('1', '5');
    echo readfile('file.txt'); 

 ?>
