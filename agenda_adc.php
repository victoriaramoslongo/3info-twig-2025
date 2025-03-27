<?php
 
require('inc/banco.php');

$item = $_POST['titulo'] ?? null ; 
$data= $_POST['data'] ?? null ; 

if($item){
    $query =  $pdo->prepare('INSERT INTO agenda (titulo, data) VALUES (:it,:da)');
    $query->bindValue(':it' , $item);
    $query->bindValue(':da' , $data);
    $query->execute();
}

header('location:agenda.php');
