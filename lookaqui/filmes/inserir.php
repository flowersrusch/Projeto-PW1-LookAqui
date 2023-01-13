<?php
$filme = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if($filme){
    $arrayFilms = array();
    if(file_exists(__DIR__ . "/../json/filmes.json")) {
        $stringFilms = file_get_contents( __DIR__ . "/../json/filmes.json");
        $arrayFilms = json_decode($stringFilms, true);
    }
    $arrayFilms[] = $filme;
    $filmsJson = json_encode($arrayFilms);
    $file = fopen( __DIR__ . "/../json/filmes.json","w+");
    fwrite($file, $filmsJson);
    fclose($file);
    echo json_encode($filme);
}