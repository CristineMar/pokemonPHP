<?php

//$pokedex = [];
//$pokemon = [];
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
$type = [];
$height;
$weight;
$evolution;
$image;

// to create a pokemon
function createPokemon($number, $name, $region, $type, $height, $weight, $evolution, $image)
{
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

// to show all pokemon that has been created
function showPokemon($pokemon)
{
    echo 'Numero: ' . $pokemon['number'] . '<br>';
    echo 'Nombre: ' . $pokemon['name'] . '<br>';
    echo 'Region: ' . $pokemon['region'] . '<br>';

    $type = '';
    for ($i=0; $i < count($pokemon['type']); $i++) { 
        $type .= $pokemon['type'][$i] . ' ';
    }  

    echo 'Tipo: ' . $type . '<br>';
    echo 'Altura: ' . $pokemon['height'] . '<br>';
    echo 'Peso: ' . $pokemon['weight'] . '<br>';
    echo 'Evolución: ' . $pokemon['evolution'] . '<br>';
    echo 'Img: ' . $pokemon['image'] . '<br>';
    echo '<br>';
}

// to add pokemon in pokedex
function addPokemon(&$pokedex, $pokemon)
{
    $itExist = searchPokemonByNum($pokedex, $pokemon['number']);

    if ($itExist == -1) {
        array_push($pokedex, $pokemon);
    }
}

// to show all contents of pokedex
function showPokedex($pokedex)
{
    $totalPokedex = count($pokedex);

    for ($i = 0; $i < $totalPokedex; $i++) {
        showPokemon($pokedex[$i]);
    }
    
}

// this will delete pokemon by number
function deletePokemonNum(&$pokedex, $value){

    $isItDeleted = false;
    $index = searchPokemonByNum($pokedex, $value);

    if ($index > 0) {
        unset($pokedex[$index]);
        $isItDeleted = true;
        $pokedex = array_values($pokedex);
    }

    return $isItDeleted;
}

//search pokemon by number
function searchPokemonByNum($pokedex, $number)
{

    $totalPokedex = count($pokedex);
    $ifFound = false;
    $index = 0;
    $notFound = -1;

    while ($index < $totalPokedex && !$ifFound) {
        if ($pokedex[$index]['number'] === $number) {
            $notFound = $index;
            $ifFound = true;
        } else {
            $index++;
        }
    }
    return $notFound;
}

// this function will modify pokemon
function modifyPokemon(&$pokedex, $number, $name, $region, $type, $height, $weight, $evolution, $image)
{
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
}

?>
