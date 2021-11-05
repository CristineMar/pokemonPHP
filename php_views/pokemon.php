<!DOCTYPE html>
<html lang="en">

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

  <div class="card vh-100">
    <div class="card-header bg-secondary">
      <a class="navbar-brand text-light" href="#">
        <img src="../media/pokeball.png" alt="" width="50px" height="50px" class="d-inline-block align-text-center img-fluid">
        Pokemon
      </a>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <form>
          <div class="row g-2 align-items-center">

            <div class="col-2">
              <label for="inputNumber" class="col-form-label">Numero</label>
            </div>
            <div class="col-10">
              <input type="number" maxlength="3" autofocus min="0" name="numero" class="form-control" id="inputNumber" placeholder="Introduzca un numero" aria-describedby="numberHelp">
            </div>

            <div class="col-2">
              <label for="inputName" class="col-form-label">Nombre</label>
            </div>
            <div class="col-10">
              <input type="text" name="name" class="form-control" id="inputName" placeholder="Introduzca el nombre del pokemon">
            </div>

            <div class="col-2">
              <label for="inputRegion" class="col-form-label">Region</label>
            </div>
            <div class="col-10">
              <select id="region" name="inputRegion" class="form-select">
                <option selected value="Kanto">Kanto</option>
                <option value="Jotho">Jotho</option>
                  <option value="Hoenn">Hoenn</option>
                  <option value="Sinnoh">Sinnoh</option>
                  <option value="Teselia">Teselia</option>
              </select>
            </div>

            <div class="col-2">
              <label class="col-form-label">Tipo</label>
            </div>
            <div class="col-10">
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="plant" checked>
                <label class="form-check-label" for="type" name="type">Planta</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="poison">
                <label class="form-check-label" for="type" name="type">Veneno</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="fire">
                <label class="form-check-label" for="type" name="type">Fuego</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="fly">
                <label class="form-check-label" for="type" name="type">Volador</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="water">
                <label class="form-check-label" for="type" name="type">Agua</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="electric">
                <label class="form-check-label" for="type" name="type">Eléctrico</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="fairy">
                <label class="form-check-label" for="type" name="type">Hada</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="insect">
                <label class="form-check-label" for="type" name="type">Bicho</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="fight">
                <label class="form-check-label" for="type" name="type">Lucha</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type" value="psychic">
                <label class="form-check-label" for="type" name="type">Psíquico</label>
            </div>
            </div>

            <div class="col-2">
              <label for="inputHeight" class="col-form-label">Altura</label>
            </div>
            <div class="col-10">
              <div class="input-group">
                <input type="number" name="height" min="1" class="form-control" id="inputHeight" placeholder="Height">
                <span class="input-group-text">cm</span>
              </div>
            </div>

            <div class="col-2">
              <label for="inputWeight" class="col-form-label">Peso</label>
            </div>
            <div class="col-10">
              <div class="input-group">
                <input type="number" name="weight" step=".01" pattern="^\d*(\.\d{0,2})?$" min="0" class="form-control" id="inputWeight" placeholder="Weight">
                <span class="input-group-text">kg</span>
              </div>
            </div>

            <div class="col-2">
              <label class="col-form-label">Evolución</label>
            </div>
            <div class="col-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="evolution" name="evolution" value="noEvolucion" checked>
                <label class="form-check-label" for="evolution">
                  Sense evolució
                </label>
              </div>
  
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="evolution" name="evolution" value="firstEvolucion">
                <label class="form-check-label" for="evolution">
                      Primera evolución
                  </label>
                </div>
  
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="evolution" name="evolution"  value="otherEvolucion">
                <label class="form-check-label" for="evolution">
                      Otras evoluciones
                  </label>
                </div>
            </div>

            <div class="col-2">
              <label for="inputImage" class="col-form-label">Imagen</label>
            </div>
            <div class="col-10">
              <div class="input-group">
                <input class="form-control" type="file" id="inputImage" name="image">
              </div>
            </div>

          </div>

          <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-lg-3 mt-md-3 mt-sm-0">
          <a href="/Cristine_Marquez_Pokemon/php_views/pokemon_list.php" class="btn btn-secondary" role="button" target="_self">Cancelar</a>
            <button class="btn btn-primary me-md-2" type="submit">Aceptar</button>
          </div>
        </form>
  
      </blockquote>
    </div>
  </div>

   
</body>
</html>
