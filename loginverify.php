<?php

require('inc/banco.php');

$nome = $_POST['nome'] ?? null ; 
$senha = $_POST['senha'] ?? null ; 



if($nome && $senha){
    $query =  $pdo->prepare('SELECT * FROM usuarios WHERE :nome = nome');
    $query->bindValue(':nome', $nome);
    $query->execute();
    $data = $query->fetch();
    $verify = password_verify($senha, $data["senha"]);

    if($verify){
        header('location:index.php');
    }else{
        header('location:login.php');
    }
};