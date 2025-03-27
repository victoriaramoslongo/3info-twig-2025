<?php
//compas adcp . php 
require('inc/banco.php');

$item = $_GET['id'] ?? null ; 

if($item){
$query =  $pdo->prepare('DELETE FROM agenda WHERE id=:id ');
$query->bindValue(':id' , $item);
$query->execute();


}

header('location:agenda.php');
