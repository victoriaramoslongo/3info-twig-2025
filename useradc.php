<?php
 
require('inc/banco.php');

$nome = $_POST['nome'] ?? null ; 
$senha = $_POST['senha'] ?? null ; 
$hash = password_hash($senha , PASSWORD_DEFAULT);



if($nome && $senha){
    $query =  $pdo->prepare('INSERT INTO usuarios (nome, senha) VALUES (:nome , :senha)');
    $query->bindValue(':nome' , $nome);
    $query->bindValue(':senha' , $hash);
    $query->execute();
}

header('location:login.php');
