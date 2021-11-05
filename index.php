<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="
background-image: url(/Cristine_Marquez_Pokemon/media/Pokedex.png); 
background-size: cover; 
background-repeat:no-repeat; 
background-position: center; 
background-attachment: fixed;">

<?php
require __DIR__ . "/php_librarys/pokedex.php";
include __DIR__ . "/php_partials/menu.php";

//empty pokedex
$pokedex = [];

//create pokemon
$pokemon = createPokemon(001, "Bulbasaur", "Hoen", ["Planta", "Veneno"], 70, 6.9, "Sense evolucionar", "001.png");
//adding pokemon to pokedex
addPokemon($pokedex, $pokemon);

$pokemon = createPokemon(002, "Ivysaur", "Hoen", ["Planta", "Veneno"], 100, 13, "Primera evolució", "002.png");
addPokemon($pokedex, $pokemon);

$pokemon = createPokemon(004, "Charmander", "Jotho", ["Fuego"], 60, 8.5, "Sense evolucionar", "003.png");
addPokemon($pokedex, $pokemon);

$pokemon = createPokemon(001, "Bulbasaur", "Hoen", ["Planta", "Veneno"], 70, 6.9, "Sense evolucionar", "001.png");
//adding pokemon to pokedex
addPokemon($pokedex, $pokemon);

showPokedex($pokedex);
$deleted = deletePokemonNum($pokedex, 2);

//var_dump(deletePokemonNum($pokedex, 2));

if($deleted == "1") {
  echo "Eliminado correctamente" . '<br>';
} else {
  echo "No existe este pokemon por lo tanto no se puede eliminar" . '<br>';
}

showPokedex($pokedex);

?>
</body>
</html>