<?php

require_once __DIR__ . '/../Config/config.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro | City Farmac</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="<?= BASE_URL ?>_admin/assets/css/admin.css">

</head>

<body class="auth-body">

    <main class="auth-card">

        <div class="auth-logo">
            <span>CITY</span>FARMAC
        </div>

        <h1>Crear cuenta</h1>

        <p>Registrate para acceder a City Farmac.</p>

        <form>

            <div class="mb-3">

                <label for="nombre" class="form-label">
                    Nombre
                </label>

                <input
                    id="nombre"
                    name="nombre"
                    type="text"
                    class="form-control"
                    minlength="2"
                    autocomplete="name"
                    required>

            </div>

            <div class="mb-3">

                <label for="email" class="form-label">
                    Correo electrónico
                </label>

                <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control"
                    autocomplete="email"
                    required>

            </div>

            <div class="mb-4">

                <label for="password" class="form-label">
                    Contraseña
                </label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control"
                    minlength="6"
                    autocomplete="new-password"
                    required>

            </div>

            <button type="submit" class="btn btn-admin w-100">
                Registrarme
            </button>

        </form>

        <div class="auth-links">

            ¿Ya tenés cuenta?

            <a href="<?= BASE_URL ?>_admin/login.php">
                Ingresá
            </a>

        </div>

    </main>

</body>
</html>