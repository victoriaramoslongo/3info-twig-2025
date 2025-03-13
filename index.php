<?php
//

//carregar o carregador do twig 
require_once('twig_carregar.php');

//mostra na tela
echo $twig->render('index.html' , [
    'fruta' => 'Abacaxi',
    'carro'=> 'velho',
]);

