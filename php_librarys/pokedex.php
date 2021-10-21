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

function showPokemon($pokemon)
{
    echo 'Numero: ' . $pokemon['number'] . '<br>';
    echo 'Nombre: ' . $pokemon['name'] . '<br>';
    echo 'Region: ' . $pokemon['region'] . '<br>';
    echo 'Tipo: ' . $pokemon['type'] . '<br>';
    echo 'Altura: ' . $pokemon['height'] . '<br>';
    echo 'Peso: ' . $pokemon['weight'] . '<br>';
    echo 'Evolución: ' . $pokemon['evolution'] . '<br>';
    echo 'Img: ' . $pokemon['image'] . '<br>';
    echo '<br>';
}

function addPokemon(&$pokedex, $pokemon)
{
    array_push($pokedex, $pokemon);
}

function showPokedex($pokedex)
{
    $totalPokedex = count($pokedex);

    for ($i = 0; $i < $totalPokedex; $i++) {
        showPokemon($pokedex[$i]);
    }
}

function deletePokemon(&$pokedex, $number)
{
    $index = searchPokemonByNum($pokedex, $number);
    if ($index > 0) {
        unset($pokedex[$index]);
        $pokedex = array_values($pokedex); 
        echo "Eliminado correctamente";
    } else {
        echo "No existe este pokemon por lo tanto no se puede eliminar";
    }
    
}

function searchPokemonByNum($pokedex, $number)
{

    $totalPokedex = count($pokedex);
    $ifFound = false;
    $index = 0;
    $notFound = -1;

    while ($index < $totalPokedex && !$ifFound) {
        if ($pokedex[$index]['number'] === $number) {
            $ifFound = true;
            $notFound = $index;
            echo "index". $notFound;
        } else {
            $index++;
        }
    }

    return $notFound;
}

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

$pokemon = createPokemon(001, "Bulbasaur", "Hoen", "Planta, Veneno", 70, 6.9, "Sense evolucionar", "001.png");
//showPokemon($pokemon);
addPokemon($pokedex, $pokemon);

$pokemon = createPokemon(002, "Ivysaur", "Hoen", "Planta, Veneno", 100, 13, "Primera evolució", "002.png");
//showPokemon($pokemon);
addPokemon($pokedex, $pokemon);

$pokemon = createPokemon(004, "Charmander", "Jotho", "Fuego", 60, 8.5, "Sense evolucionar", "003.png");
//showPokemon($pokemon);
addPokemon($pokedex, $pokemon);

showPokedex($pokedex);
deletePokemon($pokedex, 2);
showPokedex($pokedex);

?>
