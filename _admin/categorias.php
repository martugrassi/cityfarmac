<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Categorías | City Farmac';

$categorias = [
    ['id' => 1, 'nombre' => 'Dermocosmética', 'estado' => 'Activa'],
    ['id' => 2, 'nombre' => 'Cuidado facial', 'estado' => 'Activa'],
    ['id' => 3, 'nombre' => 'Cuidado capilar', 'estado' => 'Activa'],
    ['id' => 4, 'nombre' => 'Cuidado corporal', 'estado' => 'Activa'],
    ['id' => 5, 'nombre' => 'Protección solar', 'estado' => 'Activa'],
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

?>

<main class="admin-main">

    <header class="admin-encabezado">
        <div>
            <span class="admin-eyebrow">Gestión</span>
            <h1>Categorías</h1>
            <p>Administrá las categorías disponibles en el catálogo.</p>
        </div>

        <button class="btn-admin" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#formCategoria">
            + Nueva categoría
        </button>
    </header>

    <section class="collapse mb-4" id="formCategoria">
        <div class="admin-panel">

            <h2>Nueva categoría</h2>

            <form>
                <div class="row g-3">

                    <div class="col-md-8">
                        <label for="nombreCategoria" class="form-label">
                            Nombre
                        </label>
                        <input
                            id="nombreCategoria"
                            name="nombre"
                            type="text"
                            class="form-control"
                            minlength="2"
                            required>
                    </div>

                    <div class="col-md-4">
                        <label for="estadoCategoria" class="form-label">
                            Estado
                        </label>
                        <select
                            id="estadoCategoria"
                            name="estado"
                            class="form-select"
                            required>
                            <option value="activa">Activa</option>
                            <option value="inactiva">Inactiva</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn-admin">
                            Guardar categoría
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </section>

    <section class="admin-panel">
        <h2>Listado de categorías</h2>

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($categorias as $categoria): ?>
                        <tr>
                            <td><?= $categoria['id'] ?></td>
                            <td><?= htmlspecialchars($categoria['nombre']) ?></td>
                            <td>
                                <span class="estado-activo">
                                    <?= htmlspecialchars($categoria['estado']) ?>
                                </span>
                            </td>
                            <td>
                                <div class="acciones">
                                    <button class="btn-editar" type="button">
                                        Editar
                                    </button>
                                    <button class="btn-eliminar" type="button">
                                        Desactivar
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