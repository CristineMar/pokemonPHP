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
    include __DIR__ . "../../php_partials/menu.php"
    ?>

    <div class="container-fluid pb-3">

        <div class="row row-cols-lg-5 row-cols-md-5 row-cols-5 row-cols-sm-1 g-4">
            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/001.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">001 - Bulbasaur</p>

                        <span class="badge bg-warning text-dark">Planta</span>
                        <span class="badge bg-warning text-dark">Veneno</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>

            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/002.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">002 - Ivysaur</p>

                        <span class="badge bg-warning text-dark">Planta</span>
                        <span class="badge bg-warning text-dark">Veneno</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/003.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">003 - Venusaur</p>

                        <span class="badge bg-warning text-dark">Planta</span>
                        <span class="badge bg-warning text-dark">Veneno</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/004.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">004 - Charmander</p>

                        <span class="badge bg-warning text-dark">fuego</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/005.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">005 - Charmaleon</p>

                        <span class="badge bg-warning text-dark">fuego</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/006.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">006 - Charizard</p>

                        <span class="badge bg-warning text-dark">fuego</span>
                        <span class="badge bg-warning text-dark">volador</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/007.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">007 - Squirtle</p>

                        <span class="badge bg-warning text-dark">agua</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/008.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">008 - Wartortle</p>

                        <span class="badge bg-warning text-dark">agua</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border border-secondary p-0 m-2">
                    <img src="../media/pokemon/009.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold">009 - Blastoise</p>

                        <span class="badge bg-warning text-dark">agua</span>
                    </div>

                    <div class="card-footer d-grid gap-2 d-md-flex d-sm-flex justify-content-md-end justify-content-sm-end">

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                        <form action="#">
                            <input id="inputHidden" name="inputHidden" type="hidden" value="I'm hidden">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <a class="position-relative" href="/Cristine_Marquez_Pokemon/php_views/pokemon.php">
            <button type="button" class="btn btn-info rounded-circle position-fixed bottom-0 end-0" style="z-index: 100; margin: 0 10px 10px 0;">
                <i class="fas fa-plus"></i>
            </button>
        </a>
    </div>


</body>

</html>