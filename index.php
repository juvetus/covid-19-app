<?php

include "logic.php";

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Bootstrap  js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3c2a65dbdd.js" crossorigin="anonymous"></script>
    <!--Mon Style -->
    <link rel="stylesheet" href="style.css">
    <title>Covid-19 Traker</title>

</head>

<body>

    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand " href="/">

            Info Covid-19
        </a>
    </nav>

    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Convid-19 Tracker</h1>
        <h5 class="text-muted">Projet OpenSource pour tracker le COVID-19 dans le monde.</h5>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmer</h5>
                <?php echo  $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Rétabli(es)</h5>
                <?php echo $total_recovered; ?>
            </div>
            <div class="col-4 text-danger">
                <h5>Décéder</h5>
                <?php echo $total_deaths; ?>
            </div>

        </div>

    </div>

    <div class="container bg-light p-3 my-3 text-center">
        <h5 class="text-info">La prévention est le meilleur remède</h5>
        <p class="text-muted">Restez à l'intérieur Restez en sécurité</p>
    </div>
    <hr>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>

                        <th scope="col">Pays</th>
                        <th scope="col">Confirmer</th>
                        <th scope="col">Rétabli(es)</th>
                        <th scope="col">Décéder</th>
                        <th scope="col">Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $key => $value) {
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']

                    ?>
                        <tr>
                            <th><?php echo $key; ?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed']; ?>
                                <?php if ($increase != 0) { ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo  "Test Positif au Covid-19 :   ",$increase; ?></small>

                                <?php } ?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['recovered']; ?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['deaths']; ?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['date']; ?>
                            </td>

                        </tr>

                    <?php } ?>

                </tbody>


            </table>
        </div>

    </div>

    <footer class="footer mt-auto pay3 bg-dark">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020, <a href="https://juvetinvest.com " target="_blank">Juvet</a></span>
            <div>
            <span class="text-muted"><a href="https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6" target="_blank">Plus Info</a></span>
        </div>
        </div>
    </footer>


</body>

</html>