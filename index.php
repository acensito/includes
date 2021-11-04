    <?php require('assets/header.php'); ?>

    <!-- cuerpo del documento -->
    <div class="container text-white">
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
                    <?php include('inc/extra.php'); ?>
                </div>
            </section>
        </div>
    </div>

    <?php require('assets/footer.php'); ?>