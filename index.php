<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
</head>

<body>

    <form action="./php_librarys/pokedex.php" method="post">
        <label for="number">Numero</label>
        <input type="number" name="number">

        <label for="name">Nom</label>
        <input type="text" name="name">

        <label for="region">Regió</label>
        <input type="text" name="region">

        <label for="type">Tipo</label>
        <input type="text" name="type">

        <label for="height">Altura</label>
        <input type="number" name="height">

        <label for="weight">Peso</label>
        <input type="number" name="weight">

        <label for="evolution">Evolución</label>
        <input type="text" name="evolution">

        <label for="image">Imagen</label>
        <input type="text" name="image">

        <input type="submit" value="submit">
    </form>

</body>

</html>