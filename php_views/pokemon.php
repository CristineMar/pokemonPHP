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

    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber">Email</label>
            <input type="number" name="numero" class="form-control" id="inputNumber" placeholder="Numero">
          </div>
          <div class="form-group col-md-6">
            <label for="name">Numero</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Introduzca el nombre del pokemon">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="region">Region</label>
            <select id="region" name="region" class="form-control">
              <option selected>Kanto</option>
              <option>Jotho</option>
                <option>Hoenn</option>
                <option>Sinnoh</option>
                <option>Teselia</option>
            </select>
          </div>

          <div class="form-group col-md-8">
            <label class="form-check-label">Tipo</label>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Planta</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Veneno</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Fuego</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Volador</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Agua</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Eléctrico</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Hada</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Bicho</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Lucha</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="type">
                <label class="form-check-label" for="type" name="type">Psíquico</label>
            </div>
          </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="height">Altura</label>
              <input type="number" name="height" min="1" class="form-control" id="height" placeholder="Height">
            </div>
            <div class="form-group col-md-6">
              <label for="weight">Numero</label>
              <input type="number" name="weight" step=".01" pattern="^\d*(\.\d{0,2})?$" min="0" class="form-control" id="weight" placeholder="Weight">
            </div>
          </div>

          <div class="form-group">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="evolution" name="evolution">
              <label class="form-check-label" for="evolution">
                Sense evolució
              </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="evolution" name="evolution">
              <label class="form-check-label" for="evolution">
                    Primera evolución
                </label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="evolution" name="evolution">
              <label class="form-check-label" for="evolution">
                    Otras evoluciones
                </label>
              </div>
          </div>

          <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" class="form-control-file" id="image" name="image">
          </div>

        <input type="submit" value="Aceptar">
        <a href="">Cancelar</a>
      </form>

</body>
</html>
