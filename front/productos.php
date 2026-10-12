<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Productos | City Farmac';

$productos = [
    [
        'id' => 1,
        'nombre' => 'Protector Solar Facial FPS 50',
        'marca' => 'Dermaglós',
        'categoria' => 'Dermocosmética',
        'precio' => 18900,
        'ranking' => 5,
        'destacado' => true,
        'imagen' => 'protector-solar.png'
    ],
    [
        'id' => 2,
        'nombre' => 'Agua Micelar',
        'marca' => 'Garnier',
        'categoria' => 'Cuidado facial',
        'precio' => 8500,
        'ranking' => 4,
        'destacado' => true,
        'imagen' => 'agua-micelar.png'
    ],
    [
        'id' => 3,
        'nombre' => 'Crema Hidratante',
        'marca' => 'CeraVe',
        'categoria' => 'Dermocosmética',
        'precio' => 21500,
        'ranking' => 5,
        'destacado' => true,
        'imagen' => 'crema-hidratante.png'
    ],
    [
        'id' => 4,
        'nombre' => 'Shampoo Reparación',
        'marca' => 'Vichy',
        'categoria' => 'Cuidado capilar',
        'precio' => 16700,
        'ranking' => 4,
        'destacado' => true,
        'imagen' => 'shampoo.png'
    ],
    [
        'id' => 5,
        'nombre' => 'Bálsamo Labial',
        'marca' => 'Eucerin',
        'categoria' => 'Cuidado facial',
        'precio' => 7200,
        'ranking' => 5,
        'destacado' => true,
        'imagen' => 'balsamo-labial.png'
    ],
    [
        'id' => 6,
        'nombre' => 'Gel de Limpieza Facial',
        'marca' => 'La Roche-Posay',
        'categoria' => 'Dermocosmética',
        'precio' => 19800,
        'ranking' => 5,
        'destacado' => true,
        'imagen' => 'gel-limpieza.png'
    ],
    [
        'id' => 7,
        'nombre' => 'Crema Corporal Nutritiva',
        'marca' => 'Nivea',
        'categoria' => 'Cuidado corporal',
        'precio' => 9400,
        'ranking' => 4,
        'destacado' => false,
        'imagen' => 'crema-corporal.png'
    ],
    [
        'id' => 8,
        'nombre' => 'Acondicionador Fortalecedor',
        'marca' => 'Vichy',
        'categoria' => 'Cuidado capilar',
        'precio' => 14300,
        'ranking' => 4,
        'destacado' => false,
        'imagen' => 'acondicionador.png'
    ],
    [
        'id' => 9,
        'nombre' => 'Protector Solar Corporal FPS 50',
        'marca' => 'Dermaglós',
        'categoria' => 'Protección solar',
        'precio' => 17600,
        'ranking' => 5,
        'destacado' => false,
        'imagen' => 'protector-solar-corporal.png'
    ],
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

?>

<main>

    <section class="cabecera-pagina">
        <div class="container">
            <span class="subtitulo">Catálogo</span>
            <h1>Nuestros productos</h1>
            <p>Encontrá opciones para tu salud, belleza y cuidado personal.</p>
        </div>
    </section>

    <section class="catalogo">
        <div class="container">

            <div class="categorias-principales" aria-label="Categorías principales">
                <a href="#">Dermocosmética</a>
                <a href="#">Cuidado facial</a>
                <a href="#">Cuidado capilar</a>
                <a href="#">Cuidado corporal</a>
                <a href="#">Protección solar</a>
            </div>

            <form class="filtros" method="get">

                <div>
                    <label for="categoria">Categoría</label>
                    <select id="categoria" name="categoria">
                        <option value="">Todas</option>
                        <option>Dermocosmética</option>
                        <option>Cuidado facial</option>
                        <option>Cuidado capilar</option>
                        <option>Cuidado corporal</option>
                        <option>Protección solar</option>
                    </select>
                </div>

                <div>
                    <label for="marca">Marca</label>
                    <select id="marca" name="marca">
                        <option value="">Todas</option>
                        <option>Dermaglós</option>
                        <option>Garnier</option>
                        <option>CeraVe</option>
                        <option>Vichy</option>
                        <option>Eucerin</option>
                    </select>
                </div>

                <div>
                    <label for="precio">Precio máximo</label>
                    <input id="precio" name="precio" type="number" min="0" placeholder="$">
                </div>

                <div>
                    <label for="orden">Ordenar</label>
                    <select id="orden" name="orden">
                        <option value="">Seleccionar</option>
                        <option value="asc">Precio: menor a mayor</option>
                        <option value="desc">Precio: mayor a menor</option>
                    </select>
                </div>

                <div class="filtro-check">
                    <input id="destacados" name="destacados" type="checkbox">
                    <label for="destacados">Solo destacados</label>
                </div>

                <button class="btn btn-city" type="submit">Aplicar filtros</button>

            </form>

            <?php if (count($productos) > 0): ?>

                <div class="row g-4">

                    <?php foreach ($productos as $producto): ?>

                        <div class="col-sm-6 col-lg-4">
                            <article class="producto-card">

                                <div class="producto-imagen">
    <img
        src="<?= BASE_URL ?>front/assets/img/<?= htmlspecialchars($producto['imagen']) ?>"
        alt="<?= htmlspecialchars($producto['nombre']) ?>"
        class="img-fluid">
</div>

                                <div class="producto-contenido">

                                    <p class="producto-marca">
                                        <?= htmlspecialchars($producto['marca']) ?>
                                    </p>

                                    <h2><?= htmlspecialchars($producto['nombre']) ?></h2>

                                    <p class="producto-categoria">
                                        <?= htmlspecialchars($producto['categoria']) ?>
                                    </p>

                                    <div class="ranking"
                                         aria-label="Valoración <?= $producto['ranking'] ?> de 5">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <span aria-hidden="true">
                                                <?= $i <= $producto['ranking'] ? '★' : '☆' ?>
                                            </span>
                                        <?php endfor; ?>
                                    </div>

                                    <p class="producto-precio">
                                        $<?= number_format($producto['precio'], 0, ',', '.') ?>
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

            <?php else: ?>

                <div class="sin-resultados">
                    <h2>No hay productos para mostrar</h2>
                    <p>Probá modificando los filtros seleccionados.</p>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>