<?php 
require 'vendor/autoload.php';

$pdo = new PDO('mysql:dbname=fluentdb', 'user', 'password');
$fluent = new \Envms\FluentPDO\Query($pdo);

   /*
     $user = 'root';
     $password= '';
     $pdo =  new PDO ("mysql:host=localhost;dbname=lab_4",$user,$password);
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

     */
?>