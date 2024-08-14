<?php


$filme = [
    "nome"=> "Deadpool",
    "ano"=> 2024,
    "genero"=> "Ação",

];

$FilmeJson = json_encode($filme);

print_r($FilmeJson);

$filmes = json_decode($FilmeJson, true);

print_r($filmes);