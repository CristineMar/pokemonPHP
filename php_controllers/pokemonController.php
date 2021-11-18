<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Cristine_Marquez_Pokemon/php_librarys/pokedex.php";
require $path;

if (isset($_SESSION['pokedex'])) {
    $pokedex = $_SESSION['pokedex'];
} else {
    $pokedex = [];
    $sessionMsg = [];
}

$number = (isset($_POST['inputNumber']) ? $_POST['inputNumber'] : "");
$name = (isset($_POST['inputName']) ? $_POST['inputName'] : "");
$region = (isset($_POST['inputRegion']) ? $_POST['inputRegion'] : "");
$type = (isset($_POST['inputType']) ? $_POST['inputType'] : "");
$height = (isset($_POST['inputHeight']) ? $_POST['inputHeight'] : "");
$weight = (isset($_POST['inputWeight']) ? $_POST['inputWeight'] : "");
$evolution = (isset($_POST['inputEvolution']) ? $_POST['inputEvolution'] : "");
$image = (isset($_FILES['inputImage']) ? $_FILES['inputImage'] : "");

if (isset($_POST["submitPokemon"])) {

    if ($image !== null || $image !== "") {
        $img_dir = "../media/pokemon";
        $img_path_temp = $image["tmp_name"];
        $img_file_name = $image["name"];
        $imageFileType = strtolower(pathinfo($img_file_name, PATHINFO_EXTENSION));
        $img_path_absolute = "/Cristine_Marquez_Pokemon/" . $img_dir . "/00" . $number . "." . $imageFileType;
        $img_path_relative = $img_dir . "/00"  . $number . "." . $imageFileType;
    }

    $pokemon = createPokemon($number, $name, $region, $type, $height, $weight, $evolution, $img_path_relative);

    if (
        !empty($_POST['inputNumber']) &&
        !empty($_POST['inputName']) &&
        !empty($_POST['inputRegion']) &&
        !empty($_POST['inputType']) &&
        !empty($_POST['inputHeight']) &&
        !empty($_POST['inputWeight']) &&
        !empty($_POST['inputEvolution']) &&
        !empty($_FILES['inputImage'])
    ) {
        addPokemon($pokedex, $pokemon);
        if (isset($_SESSION['sessionCorrect'])) {
            $uploaded = move_uploaded_file($img_path_temp, $img_path_relative);
            $_SESSION['pokedex'] = $pokedex;
            if ($uploaded) {
                $_SESSION["sessionCorrect"] = "uploaded correctly";
            } else {
                $_SESSION["sessionError"] = "uploaded incorrectly.";
            }
            header("Location: ../php_views/pokemon_list.php");
            exit();
        } else {
            $_SESSION['pokemon'] = $pokemon;
            $sessionMsg = [$_SESSION['pokemon'], $_SESSION["sessionError"]];
            $_SESSION["sessionError"] = $sessionMsg;
            header("Location: ../php_views/pokemon.php");
            exit();
        }
    }
}

if (isset($_POST["delete"])) {
    deletePokemonNum($pokedex, $_POST['inputHidden']);
    if (isset($_SESSION['sessionCorrect'])) {
        $deleted = unlink($img_path_absolute);
         if ($deleted) {
            $_SESSION["sessionMsg"] = "Pokemon borrado correctamente";
            $sessionMsg = [$_SESSION['sessionCorrect'], $_SESSION["sessionMsg"], $pokedex, $pokemon];
            $_SESSION['pokedex'] = $pokedex;
            header("Location: ../php_views/pokemon_list.php");
            exit();
        } else {
            $_SESSION["sessionMsg"] = "No se ha borrado el pokemon. Problemes al borrar la imagen";
            header("Location: ../php_views/pokemon_list.php");
            exit();
        }
    }
    
}

if (isset($_POST["edit"])) {
    $_SESSION['hiddenNumber'] = $_POST['inputHidden'];
    $num = searchPokemonByNum($pokedex, $_POST['inputHidden']);
    if ($num !== -1) {
        $_SESSION['pokemon'] = $pokedex[$num];
        header("Location: ../php_views/pokemon_edit.php");
        exit();
    } else {
        $_SESSION['sessionError']  = "Error";
    }
}

if (isset($_POST["edited"])) {
    if (
        !empty($_POST['inputNumber']) &&
        !empty($_POST['inputName']) &&
        !empty($_POST['inputRegion']) &&
        !empty($_POST['inputType']) &&
        !empty($_POST['inputHeight']) &&
        !empty($_POST['inputWeight']) &&
        !empty($_POST['inputEvolution']) &&
        !empty($_FILES['inputImage'])
    ) {
        $image = $_SESSION['pokemon']['image'];
        modifyPokemon($pokedex, $number, $name, $region, $type, $height, $weight, $evolution, $image);
        $_SESSION['pokedex'] = $pokedex;
        header("Location: ../php_views/pokemon_list.php");
        exit();
    }
}
?>