<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Perfiles | City Farmac';

$perfiles = [
    [
        'id' => 1,
        'nombre' => 'Administrador',
        'descripcion' => 'Acceso al panel de administración.'
    ],
    [
        'id' => 2,
        'nombre' => 'Usuario',
        'descripcion' => 'Usuario registrado del sitio público.'
    ],
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

?>

<main class="admin-main">

    <header class="admin-encabezado">

        <div>
            <span class="admin-eyebrow">Gestión</span>
            <h1>Perfiles</h1>
            <p>Visualizá los perfiles definidos para los usuarios.</p>
        </div>

        <button class="btn-admin"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#formPerfil">
            + Nuevo perfil
        </button>

    </header>

    <section class="collapse mb-4" id="formPerfil">

        <div class="admin-panel">

            <h2>Nuevo perfil</h2>

            <form>

                <div class="row g-3">

                    <div class="col-md-5">

                        <label for="nombrePerfil" class="form-label">
                            Nombre
                        </label>

                        <input id="nombrePerfil"
                               name="nombre"
                               type="text"
                               class="form-control"
                               minlength="2"
                               required>

                    </div>

                    <div class="col-md-7">

                        <label for="descripcionPerfil" class="form-label">
                            Descripción
                        </label>

                        <input id="descripcionPerfil"
                               name="descripcion"
                               type="text"
                               class="form-control"
                               minlength="5"
                               maxlength="150"
                               required>

                    </div>

                    <div class="col-12">

                        <button type="submit" class="btn-admin">
                            Guardar perfil
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </section>

    <section class="admin-panel">

        <h2>Listado de perfiles</h2>

        <div class="table-responsive">

            <table class="table table-admin">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($perfiles as $perfil): ?>

                        <tr>

                            <td><?= $perfil['id'] ?></td>

                            <td>
                                <strong>
                                    <?= htmlspecialchars($perfil['nombre']) ?>
                                </strong>
                            </td>

                            <td>
                                <?= htmlspecialchars($perfil['descripcion']) ?>
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