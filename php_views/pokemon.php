<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
</head>

<body>

    <form action="/php_librarys/pokedex.php" method="post">
        <label for="number">Numero</label>
        <input type="number" name="number">

        <label for="name">Nombre</label>
        <input type="text" name="name">

        <label for="region">Region</label>
        <input list="region" name="region">
        <datalist id="region">
            <option value="Kanto">
            <option value="Jotho">
            <option value="Hoenn">
            <option value="Sinnoh">
            <option value="Teselia">
        </datalist>
<!--         <select name="region" size="5">
            <option>Kanto</option>
            <option>Jotho</option>
            <option>Hoenn</option>
            <option>Sinnoh</option>
            <option>Teselia</option>
        </select> -->

        <label>Tipo</label>
        <label for="type">Planta</label>
        <input type="checkbox" name="type" id="type1">

        <label for="type">Veneno</label>
        <input type="checkbox" name="type" id="type2">

        <label for="type">Fuego</label>
        <input type="checkbox" name="type" id="type3">

        <label for="type">Volador</label>
        <input type="checkbox" name="type" id="type4">

        <label for="type">Agua</label>
        <input type="checkbox" name="type" id="type5">

        <label for="type">Eléctrico</label>
        <input type="checkbox" name="type" id="type6">

        <label for="type">Hada</label>
        <input type="checkbox" name="type" id="type7">

        <label for="type">Bicho</label>
        <input type="checkbox" name="type" id="type8">

        <label for="type">Lucha</label>
        <input type="checkbox" name="type" id="type9">

        <label for="type">Psíquico</label>
        <input type="checkbox" name="type" id="type10">

        <label for="height">Altura</label>
        <input type="number" name="height" min="1">

        <label for="weight">Peso</label>
        <input type="number" name="weight" step=".01" pattern="^\d*(\.\d{0,2})?$" min="0">

        <label for="evolution">Evolución</label>
        <label for="evolution">Sense evolució</label>
        <input type="radio" name="evolution">
        <label for="evolution">Primera evolución</label>
        <input type="radio" name="evolution">
        <label for="evolution">Otras evoluciones</label>
        <input type="radio" name="evolution">

        <label for="image">Imagen</label>
        <input type="file" name="image">

        <input type="submit" value="Aceptar" >
        <a href=""> Cancelar </a>
    </form>

</body>

</html>