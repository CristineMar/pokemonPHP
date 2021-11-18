<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <title>Pokémon</title>
</head>

<body>

  <?php
  session_start();
  include __DIR__ . "../../php_partials/menu.php";
  ?>

  <div class="card vh-100">
    <div class="card-header bg-secondary">
      <a class="navbar-brand text-light" href="#">
        <img src="../media/pokeball.png" alt="" width="50px" height="50px" class="d-inline-block align-text-center img-fluid">
        Pokemon
      </a>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <?php
        if (isset($_SESSION['pokemon'])) {
          $pokemon = $_SESSION['pokemon'];
          if (isset($_SESSION['sessionCorrect'])) {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['sessionCorrect'] . '</div>';
            //unset($_SESSION['sessionCorrect']);
          }
        } else {
          if (isset($_SESSION['sessionError'])) {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['sessionError'] . '</div>';
            //unset($_SESSION['sessionError']);
          }

          $pokemon = [
        'number' => "",
        'name' => "",
        'region' => "",
        'type' => [],
        'height' => "",
        'weight' => "",
        'evolution' => "",
        'image' => ""];
        }

        echo ' <form method="post" action="../php_controllers/pokemonController.php" enctype="multipart/form-data">
          <div class="row g-2 align-items-center">

            <div class="col-2">
              <label for="inputNumber" class="col-form-label">Numero</label>
            </div>
            <div class="col-10">
              <input type="number" maxlength="3" autofocus min="0" name="inputNumber" class="form-control" id="inputNumber" placeholder="Introduzca un numero" aria-describedby="numberHelp" value="' . $pokemon['number'] . '">
            </div>

            <div class="col-2">
              <label for="inputName" class="col-form-label">Nombre</label>
            </div>
            <div class="col-10">
              <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Introduzca el nombre del pokemon" value="' . $pokemon['name'] . '">
            </div>

            <div class="col-2">
              <label for="inputRegion" class="col-form-label">Region</label>
            </div>
            <div class="col-10">
              <select id="inputRegion" name="inputRegion" class="form-select">';
        $regions = ["Kanto", "Jotho", "Hoenn", "Sinnoh", "Teselia"];
        foreach ($regions as $region) {
          if ($pokemon['region'] === $region) {
            echo '<option selected value="' . $region . '">' . $region . '</option>';
          } else {
            echo '<option value="' . $region . '">' . $region . '</option>';
          }
        }

        echo ' </select>
            </div>

            <div class="col-2">
              <label class="col-form-label">Tipo</label>
            </div>
            <div class="col-10">';

        $typesName = ["Planta", "Veneno", "Fuego", "Volador", "Agua", "Eléctrico", "Hada", "Bicho", "Lucha", "Psíquico"];
        $types = ["plant", "poison", "fire", "fly", "water", "electric", "fairy", "insect", "fighter", "psychic"];
        $selected = [$pokemon['type']];
        $i = 0;
        $y = 0;

        foreach ($types as $type) {
          if ($y < count($pokemon['type'])) {
            echo '<div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="' . $type . '" value="' . $type . '" name="inputType[]" checked>
                            <label class="form-check-label" for="' . $type . '" id="' . $type . '">' . $typesName[$i++] . '</label>
                            </div>';
            $y++;
          } else {
            echo '<div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="' . $type . '" value="' . $type . '" name="inputType[]">
                            <label class="form-check-label" for="' . $type . '" id="' . $type . '">' . $typesName[$i++] . '</label>
                            </div>';
          }
        }
        echo ' </div>

                    <div class="col-2">
                        <label for="inputHeight" class="col-form-label">Altura</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="number" name="inputHeight" min="1" class="form-control" id="inputHeight" placeholder="Height" value="' . $pokemon['height'] . '">
                            <span class="input-group-text">cm</span>
                        </div>
                    </div>

                    <div class="col-2">
                        <label for="inputWeight" class="col-form-label">Peso</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="number" name="inputWeight" step=".01" pattern="^\d*(\.\d{0,2})?$" min="0" class="form-control" id="inputWeight" placeholder="Weight" value="' . $pokemon['weight'] . '">
                            <span class="input-group-text">kg</span>
                        </div>
                    </div>

                    <div class="col-2">
                        <label class="col-form-label">Evolución</label>
                    </div>
                    <div class="col-10">';
        $evolutions = ["noEvolucion", "firstEvolucion", "otherEvolucion"];
        $evolutionName = ["Sense evolució", "Primera evolución", "Otras evoluciones"];
        $index = 0;
        foreach ($evolutions as $evolution) {
          if ($pokemon['evolution'] === $evolution) {
            echo '<div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inputEvolution" name="inputEvolution" value="' . $type . '" checked>
                            <label class="form-check-label" for="inputEvolution">
                                ' . $evolutionName[$index++] . ' </label>
            </div>';
          } else {
            echo '<div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="inputEvolution" name="inputEvolution" value="' . $type . '">
              <label class="form-check-label" for="inputEvolution">
                ' . $evolutionName[$index++] . '
              </label>
            </div>';
          }
        }
        echo '
          </div>

          <div class="col-2">
            <label for="inputImage" class="col-form-label">Imagen</label>
          </div>
          <div class="col-10">
            <div class="input-group">
              <input class="form-control" type="file" id="inputImage" name="inputImage" accept="image/*" value="' . $pokemon['image'] . '">
            </div>
          </div>

    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-lg-3 mt-md-3 mt-sm-0">
      <a href="/Cristine_Marquez_Pokemon/php_views/pokemon_list.php" class="btn btn-secondary" role="button" target="_self">Cancelar</a>
      <button class="btn btn-primary me-md-2" name="submitPokemon" type="submit">Aceptar</button>
    </div>
    </form>';
        ?>
      </blockquote>
    </div>
  </div>


</body>

</html>