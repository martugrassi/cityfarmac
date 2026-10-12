<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Panel de administración | City Farmac';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

?>

<main class="admin-main">

    <header class="admin-encabezado">
        <div>
            <span class="admin-eyebrow">Panel administrativo</span>
            <h1>Bienvenido</h1>
            <p>Gestioná el contenido de City Farmac desde un único lugar.</p>
        </div>
    </header>

    <section class="admin-cards" aria-label="Resumen del sistema">

        <article class="admin-card">
            <span>Productos</span>
            <strong>24</strong>
        </article>

        <article class="admin-card">
            <span>Categorías</span>
            <strong>5</strong>
        </article>

        <article class="admin-card">
            <span>Comentarios</span>
            <strong>18</strong>
        </article>

        <article class="admin-card">
            <span>Usuarios</span>
            <strong>12</strong>
        </article>

    </section>

    <section class="admin-panel">

        <h2>Accesos rápidos</h2>

        <div class="row g-3">

            <div class="col-md-4">
                <a
                    class="btn btn-admin w-100"
                    href="<?= BASE_URL ?>_admin/productos.php">
                    Administrar productos
                </a>
            </div>

            <div class="col-md-4">
                <a
                    class="btn btn-admin w-100"
                    href="<?= BASE_URL ?>_admin/categorias.php">
                    Administrar categorías
                </a>
            </div>

            <div class="col-md-4">
                <a
                    class="btn btn-admin w-100"
                    href="<?= BASE_URL ?>_admin/usuarios.php">
                    Administrar usuarios
                </a>
            </div>

        </div>

    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>