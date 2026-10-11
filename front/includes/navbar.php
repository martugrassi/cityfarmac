<header class="header-principal">

    <nav class="navbar navbar-expand-lg" aria-label="Navegación principal">

        <div class="container">

            <a class="navbar-brand" href="<?= BASE_URL ?>front/">
                <span class="logo-city">CITY</span><span class="logo-farmac">FARMAC</span>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarPrincipal"
                aria-controls="navbarPrincipal"
                aria-expanded="false"
                aria-label="Abrir menú de navegación">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarPrincipal">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>front/">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>front/productos.php">
                            Productos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>front/contacto.php">
                            Contacto
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-success"
                           href="<?= BASE_URL ?>_admin/login.php">
                            Ingresar
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>