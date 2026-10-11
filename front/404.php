<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Página no encontrada | City Farmac';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

?>

<main class="pagina-error">

    <div class="container">

        <div class="error-contenido">

            <span class="error-numero">404</span>

            <span class="subtitulo">Algo no salió como esperábamos</span>

            <h1>Página no encontrada</h1>

            <p>
                La página que estás buscando no existe o fue movida.
                Podés volver al inicio y seguir recorriendo City Farmac.
            </p>

            <a href="<?= BASE_URL ?>front/" class="btn btn-city">
                Volver al inicio
            </a>

        </div>

    </div>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>