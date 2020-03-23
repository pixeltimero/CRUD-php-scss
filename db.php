<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




$db= new Mysqli;
$db -> connect('localhost', 'root', '', 'crud');
if(!$db){
    echo "success";
}
?>