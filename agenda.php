
<?php


require_once('twig_carregar.php');
require('inc/banco.php');


$dados = $pdo->query('SELECT * FROM agenda');

$comp = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('agenda.html', [
    'titulo' => 'agenda',
    'agenda' => $comp,
]);

