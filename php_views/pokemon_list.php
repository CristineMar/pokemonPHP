<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a80a82a4fc.js" crossorigin="anonymous"></script>
    <title>Pokemon List</title>
</head>

<body>

    <?php
    session_start();
    include __DIR__ . "../../php_partials/menu.php";
    ?>

    <div class="container-fluid pb-3">

        <?php
        if (isset($_SESSION["sessionCorrect"])) {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION["sessionCorrect"] . '</div>';
            unset($_SESSION["sessionCorrect"]);
        } else  if (isset($_SESSION["sessionError"])) {
            echo '<div class="alert alert-danger" role="alert">' . $_SESSION["sessionError"] . '</div>';
            unset($_SESSION["sessionError"]);
        }
        ?>


        <div class="row row-cols-lg-5 row-cols-md-5 row-cols-5 row-cols-sm-1 g-4">
            <?php
            if (isset($_SESSION["pokedex"])) {
                $pokedex = $_SESSION['pokedex'];

                if (is_array($pokedex) || is_object($pokedex)) {
                    foreach ($pokedex as $pokemon) {

                        echo ' <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="' . $pokemon['image'] . '" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">00' . $pokemon['number'] . '-' . $pokemon['name'] . '</p>';
                        for ($i = 0; $i < count($pokemon['type']); $i++) {
                            echo '<span class="badge bg-warning text-dark">' . $pokemon['type'][$i] . '</span>';
                        }
                        echo '</div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="../php_controllers/pokemonController.php" method="post">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="' . $pokemon['number'] . '">
                            <button type="submit" name="delete" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="../php_controllers/pokemonController.php" method="post">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="' . $pokemon['number'] . '">
                            <button type="submit" name="edit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>';
                    }
                    //unset($_SESSION['pokedex']);
                } else {
                    $pokedex = [];
                }
            }
            ?>
        </div>

        <a class="position-relative" href="/Cristine_Marquez_Pokemon/php_views/pokemon.php">
            <button type="button" class="btn btn-info rounded-circle position-fixed bottom-0 end-0" style="z-index: 100; margin: 0 10px 10px 0;">
                <i class="fas fa-plus"></i>
            </button>
        </a>
    </div>


</body>

</html>