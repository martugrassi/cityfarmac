<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Inicio | City Farmac';

$productosDestacados = [
    [
        'id' => 1,
        'nombre' => 'Protector Solar Facial FPS 50',
        'marca' => 'Dermaglós',
        'precio' => 18900,
        'ranking' => 5
    ],
    [
        'id' => 2,
        'nombre' => 'Agua Micelar',
        'marca' => 'Garnier',
        'precio' => 8500,
        'ranking' => 4
    ],
    [
        'id' => 3,
        'nombre' => 'Crema Hidratante',
        'marca' => 'CeraVe',
        'precio' => 21500,
        'ranking' => 5
    ],
    [
        'id' => 4,
        'nombre' => 'Shampoo Reparación',
        'marca' => 'Vichy',
        'precio' => 16700,
        'ranking' => 4
    ],
    [
        'id' => 5,
        'nombre' => 'Bálsamo Labial',
        'marca' => 'Eucerin',
        'precio' => 7200,
        'ranking' => 5
    ],
    [
        'id' => 6,
        'nombre' => 'Gel de Limpieza Facial',
        'marca' => 'La Roche-Posay',
        'precio' => 19800,
        'ranking' => 5
    ]
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

?>

<main>

    <section class="hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <span class="hero-etiqueta">
                        Salud · Belleza · Bienestar
                    </span>

                    <h1>
                        Cuidarte todos los días,
                        <span>más cerca tuyo.</span>
                    </h1>

                    <p>
                        Encontrá productos para tu salud, cuidado personal
                        y bienestar en un solo lugar.
                    </p>

                    <a
                        href="<?= BASE_URL ?>front/productos.php"
                        class="btn btn-city">

                        Ver productos

                    </a>

                </div>

                <div class="col-lg-5">

                    <div class="hero-card">

                        <span class="hero-icono" aria-hidden="true">+</span>

                        <h2>Tu bienestar primero</h2>

                        <p>
                            Seleccionamos productos de marcas reconocidas
                            para acompañarte en cada etapa.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="beneficios">

        <div class="container">

            <div class="row g-3">

                <div class="col-md-4">

                    <article class="beneficio">

                        <span aria-hidden="true">✓</span>

                        <div>
                            <h2>Marcas seleccionadas</h2>
                            <p>Productos para tu cuidado diario.</p>
                        </div>

                    </article>

                </div>

                <div class="col-md-4">

                    <article class="beneficio">

                        <span aria-hidden="true">♡</span>

                        <div>
                            <h2>Cuidado personal</h2>
                            <p>Todo para sentirte bien.</p>
                        </div>

                    </article>

                </div>

                <div class="col-md-4">

                    <article class="beneficio">

                        <span aria-hidden="true">+</span>

                        <div>
                            <h2>Salud y bienestar</h2>
                            <p>Opciones pensadas para vos.</p>
                        </div>

                    </article>

                </div>

            </div>

        </div>

    </section>


    <section class="productos-destacados">

        <div class="container">

            <div class="encabezado-seccion">

                <div>

                    <span class="subtitulo">
                        Recomendados
                    </span>

                    <h2>Productos destacados</h2>

                </div>

                <a href="<?= BASE_URL ?>front/productos.php">
                    Ver todos
                </a>

            </div>


            <div class="row g-4">

                <?php foreach ($productosDestacados as $producto): ?>

                    <div class="col-sm-6 col-lg-4">

                        <article class="producto-card">

                            <div class="producto-imagen">

                                <span>Producto</span>

                            </div>

                            <div class="producto-contenido">

                                <p class="producto-marca">
                                    <?= htmlspecialchars($producto['marca']) ?>
                                </p>

                                <h3>
                                    <?= htmlspecialchars($producto['nombre']) ?>
                                </h3>

                                <div
                                    class="ranking"
                                    aria-label="Valoración <?= $producto['ranking'] ?> de 5">

                                    <?php for ($i = 1; $i <= 5; $i++): ?>

                                        <span aria-hidden="true">
                                            <?= $i <= $producto['ranking'] ? '★' : '☆' ?>
                                        </span>

                                    <?php endfor; ?>

                                </div>

                                <p class="producto-precio">

                                    $<?= number_format(
                                        $producto['precio'],
                                        0,
                                        ',',
                                        '.'
                                    ) ?>

                                </p>

                                <a
                                    href="<?= BASE_URL ?>front/producto.php?id=<?= $producto['id'] ?>"
                                    class="btn btn-producto">

                                    Ver detalle

                                </a>

                            </div>

                        </article>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

</main>

<?php

require_once __DIR__ . '/includes/footer.php';

?>