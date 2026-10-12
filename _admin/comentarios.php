<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Comentarios | City Farmac';

$comentarios = [
    ['id' => 1, 'usuario' => 'Laura Pérez', 'producto' => 'Protector Solar Facial FPS 50', 'ranking' => 5, 'estado' => 'Visible'],
    ['id' => 2, 'usuario' => 'Mariana López', 'producto' => 'Crema Hidratante', 'ranking' => 5, 'estado' => 'Visible'],
    ['id' => 3, 'usuario' => 'Juan García', 'producto' => 'Shampoo Reparación', 'ranking' => 4, 'estado' => 'Visible'],
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

?>

<main class="admin-main">

    <header class="admin-encabezado">
        <div>
            <span class="admin-eyebrow">Gestión</span>
            <h1>Comentarios</h1>
            <p>Revisá los comentarios realizados sobre los productos.</p>
        </div>
    </header>

    <section class="admin-panel">

        <h2>Listado de comentarios</h2>

        <div class="table-responsive">

            <table class="table table-admin">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Ranking</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($comentarios as $comentario): ?>

                        <tr>

                            <td><?= $comentario['id'] ?></td>

                            <td>
                                <?= htmlspecialchars($comentario['usuario']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($comentario['producto']) ?>
                            </td>

                            <td>
                                <?= str_repeat('★', $comentario['ranking']) ?>
                            </td>

                            <td>
                                <span class="estado-activo">
                                    <?= htmlspecialchars($comentario['estado']) ?>
                                </span>
                            </td>

                            <td>
                                <div class="acciones">
                                    <button class="btn-editar" type="button">
                                        Ver
                                    </button>

                                    <button class="btn-eliminar" type="button">
                                        Ocultar
                                    </button>
                                </div>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>