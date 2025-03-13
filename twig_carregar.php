<?php 
// carrega o carregador do composer 


require_once('vendor/autoload.php');

//loader é quem carrega os arquivos html 
$loader = new \Twig\Loader\FilesystemLoader('./templates');

//criar um objeto de twig 
$twig = new \Twig\Environment($loader); // envirnment ta dentro do twig


