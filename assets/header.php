<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- titulo -->
    <title>Mejorando Include en PHP</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="#">

    <!-- css styles -->
    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- inicio contador de carga -->
    <?php
    $start = microtime(true);
    ?>

    <!-- nav bar header -->
    <header class="container p-5 text-white bg-primary">
        <div class="row">
            <div class="container-flex col-md-6">
                <h2>ESTE ES EL ENCABEZADO</h2>
            </div>
            <div class="d-flex col-md-6">
                <h2>
                   <?php
                   require('./inc/fecha.php');
                   ?>
                </h2>
            </div>
        </div>
    </header>