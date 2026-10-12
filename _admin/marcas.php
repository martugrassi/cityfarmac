<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Marcas | City Farmac';

$marcas = [
    ['id' => 1, 'nombre' => 'Dermaglós', 'estado' => 'Activa'],
    ['id' => 2, 'nombre' => 'CeraVe', 'estado' => 'Activa'],
    ['id' => 3, 'nombre' => 'Vichy', 'estado' => 'Activa'],
    ['id' => 4, 'nombre' => 'Eucerin', 'estado' => 'Activa'],
    ['id' => 5, 'nombre' => 'Garnier', 'estado' => 'Activa'],
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

?>

<main class="admin-main">

    <header class="admin-encabezado">
        <div>
            <span class="admin-eyebrow">Gestión</span>
            <h1>Marcas</h1>
            <p>Administrá las marcas asociadas a los productos.</p>
        </div>

        <button class="btn-admin" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#formMarca">
            + Nueva marca
        </button>
    </header>

    <section class="collapse mb-4" id="formMarca">
        <div class="admin-panel">

            <h2>Nueva marca</h2>

            <form>
                <div class="row g-3">

                    <div class="col-md-8">
                        <label for="nombreMarca" class="form-label">Nombre</label>
                        <input
                            id="nombreMarca"
                            name="nombre"
                            type="text"
                            class="form-control"
                            minlength="2"
                            required>
                    </div>

                    <div class="col-md-4">
                        <label for="estadoMarca" class="form-label">Estado</label>
                        <select
                            id="estadoMarca"
                            name="estado"
                            class="form-select"
                            required>
                            <option value="activa">Activa</option>
                            <option value="inactiva">Inactiva</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn-admin">
                            Guardar marca
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </section>

    <section class="admin-panel">
        <h2>Listado de marcas</h2>

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($marcas as $marca): ?>
                        <tr>
                            <td><?= $marca['id'] ?></td>
                            <td><?= htmlspecialchars($marca['nombre']) ?></td>
                            <td>
                                <span class="estado-activo">
                                    <?= htmlspecialchars($marca['estado']) ?>
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