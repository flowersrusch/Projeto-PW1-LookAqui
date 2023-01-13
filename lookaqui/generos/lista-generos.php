<?php
$gen = filter_input(INPUT_GET, "gen", FILTER_DEFAULT);
if(file_exists(__DIR__ . "/../json/filmes.json")){
    $stringFilms = file_get_contents(__DIR__ . "/../json/filmes.json");
    $arrayFilms = json_decode($stringFilms,true);
    $arrayGen = array();
    foreach ($arrayFilms as $filme){
        if($filme["gender"] == $gen){
            $arrayGen[] = $filme;
        }
    }
    if($arrayGen){
        $stringFilms = json_encode($arrayGen);
        echo $stringFilms;
    }
}