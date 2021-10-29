<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- titulo -->
    <title>Mejorando Include en PHP</title>
    <!-- css styles -->
    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    //flag de tiempo de inicio de carga 
    $start = microtime(true);
    ?>
    <!-- nav bar header -->
    <header class="container p-5 text-white bg-danger">
        <div class="row">
            <div class="container-flex col-md-6">
                <h2>ESTE ES EL ENCABEZADO</h2>
            </div>
            <div class="d-flex col-md-6">
                <h2>
                    <?php
                    //funcion php que muestra la fecha actual al momento de cargar
                    echo 'La fecha de hoy es ' . date('d-m-y', $timestamp = time());
                    ?>
                </h2>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <!-- menu lateral section -->
            <aside class="col-md-2 bg-success p-5">
                <h3>MENU</h3>
                <ul>
                    <li>Uno</li>
                    <li>Dos</li>
                    <li>Tres</li>
                </ul>
            </aside>
            <!-- cuerpo section -->
            <section class="col-md-10 bg-dark text-white p-5">
                <div class="container-fluid p-5">
                    <h3>ESTE ES EL CUERPO</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam similique
                        incidunt vitae corporis, velit quae quia voluptatibus quis unde, qui eum atque laudantium maiores nisi,
                        dignissimos odit earum ea quos!
                    </p>

                    <?php
                        //incluyendo y cambiando contenido en una misma página con GET
                        $secciones = array('about', 'header', 'index'); 
                        $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'index';
                        if ( in_array($page, $secciones) ) {
                            include("$page.php");
                        } else {
                            include('404.php');
                        }
                    ?>
                </div>
            </section>
        </div>
    </div>

    <!-- nav bar footer -->
    <footer class="container p-5 bg-warning">
        <div class="row">
            <div class="col-md-6">
                <h2>ESTE ES EL FOOTER</h2>
            </div>
            <div class="container-fluid col-md-6">
                <h5>
                    <?php
                    //funcion php que muestra el tiempo que tarda en cargar la página
                    $end = microtime(true);
                    $creationtime = ($end - $start);
                    printf("Página renderizada en %.6f seconds.", $creationtime);
                    ?>
                </h5>
            </div>
        </div>
    </footer>

</body>

</html>