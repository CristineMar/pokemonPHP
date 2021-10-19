<?php

$pokedex = [];
$pokemon = [];

/* $number = $_POST['number'];
$name = $_POST['name'];
$region = $_POST['region'];
$type = $_POST['type'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$evolution = $_POST['evolution'];
$image = $_POST['image']; */

$number;
$name;
$region;
$type; //this will be changed to array remember to modify
$height;
$weight;
$evolution;
$image;

$pokemon = createPokemon(001, "Bulbasaur", "Hoen", "Planta, Veneno", 70, 6.9, "Sense evolucionar", "001.png");
showPokemon($pokemon);
addPokemon($pokedex, $pokemon);
$pokemon = createPokemon(002, "Ivysaur", "Hoen", "Planta, Veneno", 100, 13, "Primera evolució", "002.png");
showPokemon($pokemon);
addPokemon($pokedex, $pokemon);
$pokemon = createPokemon(004, "Charmander", "Jotho", "Fuego", 60, 8.5, "Sense evolucionar", "003.png");
showPokemon($pokemon);
addPokemon($pokedex, $pokemon);

showPokedex($pokedex);
deletePokemon($pokedex, 2);
showPokedex($pokedex);

function createPokemon($number, $name, $region, $type, $height, $weight, $evolution, $image){
    $pokemon = [
        'number' => $number,
        'name' => $name,
        'region' => $region,
        'type' => $type,
        'height' => $height,
        'weight' => $weight,
        'evolution' => $evolution,
        'image' => $image
    ];

    return $pokemon;
}

function showPokemon($pokemon){
    echo 'Numero: ' . $pokemon['number'] . '<br>';
    echo 'Nombre: ' . $pokemon['number'] . '<br>';
    echo 'Region: ' . $pokemon['number'] . '<br>';
    echo 'Tipo: ' . $pokemon['number'] . '<br>';
    echo 'Altura: ' . $pokemon['number'] . '<br>';
    echo 'Peso: ' . $pokemon['number'] . '<br>';
    echo 'Evolución: ' . $pokemon['number'] . '<br>';
    echo 'Img: ' . $pokemon['number'] . '<br>';
    echo '<br>';
}

function addPokemon($pokedex, $pokemon){
    $notEmpty = false;
    $lengthPokedex = count($pokedex);
    $index = 0;

    do {
        if ($pokedex[$index] === []) {
            $pokedex[$index] = $pokemon;
            $notEmpty = true;
        } else {
            $index++;
        }
    } while (!$notEmpty || $index >= $lengthPokedex);

    return $pokedex;
}

function showPokedex($pokedex){
    $totalPokedex = count($pokedex);

    print_r($pokedex);

    for ($i = 0; $i < $totalPokedex; $i++) {
        print_r($pokedex[$i]);
    }
}

function deletePokemon($pokedex, $number){
    $totalPokedex = count($pokedex);
    $ifFound = false;
    $index = 0;

    while ($index < $totalPokedex && !$ifFound) {
        if ($pokedex[$index]['number'] === $number) {
            //array_splice($pokedex, $index);
            unset($pokedex[$index]);
            $pokedex = array_values($pokedex);
            $ifFound = true;
        } else {
            $index++;
        }
    }

    return $pokedex;
}

function searchPokemonByNum($pokedex, $number){

    $totalPokedex = count($pokedex);
    $ifFound = false;
    $index = 0;
    $notFound = -1;

    while ($index < $totalPokedex && !$ifFound) {
        if ($pokedex[$index]['number'] === $number) {
            $ifFound = true;
            $notFound = $index;
        } else {
            $index++;
        }
    }

    return $notFound;
}

function modifyPokemon($pokedex, $number, $name, $region, $type, $height, $weight, $evolution, $image){
    $totalPokedex = count($pokedex);
    $ifFound = false;
    $index = 0;

    while ($index < $totalPokedex && !$ifFound) {
        if ($pokedex[$index]['number'] === $number) {
            $pokedex[$index]['number'] = $number;
            $pokedex[$index]['name'] = $name;
            $pokedex[$index]['region'] = $region;
            $pokedex[$index]['type'] = $type;
            $pokedex[$index]['height'] = $height;
            $pokedex[$index]['weight'] = $weight;
            $pokedex[$index]['evolution'] = $evolution;
            $pokedex[$index]['image'] = $image;
            $ifFound = true;
        } else {
            $index++;
        }
    }

    return $pokedex;
}

?>

