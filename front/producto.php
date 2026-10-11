<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Detalle de producto | City Farmac';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 1;

$producto = [
    'id' => $id,
    'nombre' => 'Protector Solar Facial FPS 50',
    'marca' => 'Dermaglós',
    'categoria' => 'Dermocosmética',
    'precio' => 18900,
    'ranking' => 5,
    'descripcion' => 'Protección facial de amplio espectro para el cuidado diario de la piel.'
];

$comentarios = [
    ['nombre' => 'Laura', 'texto' => 'Muy buen producto, textura liviana y cómoda.'],
    ['nombre' => 'Mariana', 'texto' => 'Lo uso todos los días y me resultó excelente.']
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

?>

<main>

    <section class="detalle-producto">
        <div class="container">

            <a class="volver" href="<?= BASE_URL ?>front/productos.php">
                ← Volver a productos
            </a>

            <div class="row g-5 align-items-center">

                <div class="col-lg-6">
                    <div class="detalle-imagen">
                        <span>Producto</span>
                    </div>
                </div>

                <div class="col-lg-6">

                    <span class="producto-marca">
                        <?= htmlspecialchars($producto['marca']) ?>
                    </span>

                    <h1><?= htmlspecialchars($producto['nombre']) ?></h1>

                    <p class="producto-categoria">
                        <?= htmlspecialchars($producto['categoria']) ?>
                    </p>

                    <div class="ranking detalle-ranking" aria-label="Valoración 5 de 5">
                        ★★★★★
                    </div>

                    <p class="detalle-precio">
                        $<?= number_format($producto['precio'], 0, ',', '.') ?>
                    </p>

                    <p class="detalle-descripcion">
                        <?= htmlspecialchars($producto['descripcion']) ?>
                    </p>

                    <div class="detalle-info">
                        <strong>Disponibilidad:</strong>
                        <span>En stock</span>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <section class="comentarios">
        <div class="container">

            <div class="row g-5">

                <div class="col-lg-6">

                    <span class="subtitulo">Opiniones</span>
                    <h2>Comentarios</h2>

                    <?php foreach ($comentarios as $comentario): ?>

                        <article class="comentario">
                            <strong><?= htmlspecialchars($comentario['nombre']) ?></strong>
                            <div class="ranking" aria-label="Valoración 5 de 5">★★★★★</div>
                            <p><?= htmlspecialchars($comentario['texto']) ?></p>
                        </article>

                    <?php endforeach; ?>

                </div>


                <div class="col-lg-6">

                    <div class="formulario-card">

                        <h2>Dejá tu comentario</h2>

                        <form>

                            <div class="mb-3">
                                <label for="nombreComentario" class="form-label">
                                    Nombre
                                </label>

                                <input
                                    id="nombreComentario"
                                    name="nombre"
                                    type="text"
                                    class="form-control"
                                    minlength="2"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="emailComentario" class="form-label">
                                    Correo electrónico
                                </label>

                                <input
                                    id="emailComentario"
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="rankingComentario" class="form-label">
                                    Valoración
                                </label>

                                <select
                                    id="rankingComentario"
                                    name="ranking"
                                    class="form-select"
                                    required>
                                    <option value="">Seleccionar</option>
                                    <option value="5">5 - Excelente</option>
                                    <option value="4">4 - Muy bueno</option>
                                    <option value="3">3 - Bueno</option>
                                    <option value="2">2 - Regular</option>
                                    <option value="1">1 - Malo</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="textoComentario" class="form-label">
                                    Comentario
                                </label>

                                <textarea
                                    id="textoComentario"
                                    name="comentario"
                                    class="form-control"
                                    rows="4"
                                    minlength="10"
                                    maxlength="500"
                                    required></textarea>
                            </div>

                            <button type="submit" class="btn btn-city">
                                Enviar comentario
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>