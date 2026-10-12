<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Usuarios | City Farmac';

$usuarios = [
    ['id' => 1, 'nombre' => 'Martina Grassi', 'email' => 'martina@cityfarmac.com', 'perfil' => 'Administrador', 'estado' => 'Activo'],
    ['id' => 2, 'nombre' => 'Laura Pérez', 'email' => 'laura@email.com', 'perfil' => 'Usuario', 'estado' => 'Activo'],
    ['id' => 3, 'nombre' => 'Mariana López', 'email' => 'mariana@email.com', 'perfil' => 'Usuario', 'estado' => 'Activo'],
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

?>

<main class="admin-main">

    <header class="admin-encabezado">
        <div>
            <span class="admin-eyebrow">Gestión</span>
            <h1>Usuarios</h1>
            <p>Administrá los usuarios registrados y sus perfiles.</p>
        </div>

        <button class="btn-admin" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#formUsuario">
            + Nuevo usuario
        </button>
    </header>

    <section class="collapse mb-4" id="formUsuario">

        <div class="admin-panel">

            <h2>Nuevo usuario</h2>

            <form>

                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="nombreUsuario" class="form-label">
                            Nombre
                        </label>

                        <input id="nombreUsuario"
                               name="nombre"
                               type="text"
                               class="form-control"
                               minlength="2"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label for="emailUsuario" class="form-label">
                            Correo electrónico
                        </label>

                        <input id="emailUsuario"
                               name="email"
                               type="email"
                               class="form-control"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label for="perfilUsuario" class="form-label">
                            Perfil
                        </label>

                        <select id="perfilUsuario"
                                name="perfil"
                                class="form-select"
                                required>
                            <option value="">Seleccionar</option>
                            <option value="administrador">Administrador</option>
                            <option value="usuario">Usuario</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="estadoUsuario" class="form-label">
                            Estado
                        </label>

                        <select id="estadoUsuario"
                                name="estado"
                                class="form-select"
                                required>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn-admin">
                            Guardar usuario
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </section>

    <section class="admin-panel">

        <h2>Listado de usuarios</h2>

        <div class="table-responsive">

            <table class="table table-admin">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($usuarios as $usuario): ?>

                        <tr>
                            <td><?= $usuario['id'] ?></td>

                            <td>
                                <?= htmlspecialchars($usuario['nombre']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($usuario['email']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($usuario['perfil']) ?>
                            </td>

                            <td>
                                <span class="estado-activo">
                                    <?= htmlspecialchars($usuario['estado']) ?>
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