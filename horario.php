<?php

require('twig_carregar.php');



echo Carbon::now() . '<br>' ; 
echo Carbon::now()->addDay() . '<br>' ;

echo $twig-> render('horario.html');
