<?php


require_once('vendor/autoload.php');

//pega a timezone de sp
date_default_timezone_set('America/Sao_Paulo');

// tag do username
use Carbon\Carbon;

//agora
echo Carbon::now() . '<br>' ; 

//adiciona um dia 
echo Carbon::now()->addDay() . '<br>' ;

//subtrair uma semana 
echo Carbon::now()->subWeek(). '<br>' ; 

//Adicionar 4 anos 
echo 'Próximas olimpiedas: ' . Carbon::createFromDate(2024)->addYears(4)->year . '<br>';

//idade de alguém 
echo 'Sua idade é: ' . Carbon::createFromDate(2007,3,7)->age . '<br>' ; 


// final de semana 
if(Carbon::now()->isWeekend()){
    echo 'Fim de semana , festa' ;
}else{ 
    echo 'Tristeza de semana , sem fim de semana :( ' .  '<br>' ;
};

//calcula diferençça entre datas
$nascimento = Carbon::createFromDate(2007,03,07);
echo 'Diferença de datas:' . Carbon::now()->diff($nascimento) .  '<br>';





