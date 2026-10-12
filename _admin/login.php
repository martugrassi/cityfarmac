<?php

require_once __DIR__ . '/../Config/config.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ingresar | City Farmac</title>

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

        <h1>Ingresar</h1>

        <p>Accedé al panel de administración.</p>

        <form>

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
                    autocomplete="current-password"
                    required>

            </div>

            <button type="submit" class="btn btn-admin w-100">
                Ingresar
            </button>

                    <a
            href="<?= BASE_URL ?>_admin/"
            class="btn btn-outline-secondary w-100 mt-2">
            Acceder al panel de administrador
        </a>

                </form>

        <div class="auth-links">

            ¿No tenés cuenta?

            <a href="<?= BASE_URL ?>_admin/registro.php">
                Registrate
            </a>

        </div>

    </main>

</body>
</html>