<?php

require('twig_carregar.php');
Use Carbon\Carbon;



echo $twig->render('horario.html', [
   'datas' => ['hoje' => Carbon::now(), 'amanha' => Carbon::now()->addDay() ]
]);
