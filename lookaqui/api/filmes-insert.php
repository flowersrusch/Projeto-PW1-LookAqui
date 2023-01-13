<?php

$filme = filter_var_array($_POST, FILTER_DEFAULT);

if(in_array("",$filme)){
    $response = [
        "type" => "error",
        "message" => "Informe Nome, Genêro do filme e o Ano de lançamento"
    ];
    echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

include __DIR__ . "/../source/connection.php";

$query = "INSERT INTO filmes (id, title, gender, year) 
          VALUES (NULL, '{$filme["title"]}','{$filme["gender"]}', {$filme["year"]})";
$conn->query($query);

$response = [
    "type" => "success",
    "message" => "Filme cadastrado com sucesso!"
];