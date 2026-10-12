<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Productos | City Farmac';

$productos = [
    ['id' => 1, 'nombre' => 'Protector Solar Facial FPS 50', 'marca' => 'Dermaglós', 'categoria' => 'Dermocosmética', 'precio' => 18900, 'estado' => 'Activo'],
    ['id' => 2, 'nombre' => 'Agua Micelar', 'marca' => 'Garnier', 'categoria' => 'Cuidado facial', 'precio' => 8500, 'estado' => 'Activo'],
    ['id' => 3, 'nombre' => 'Crema Hidratante', 'marca' => 'CeraVe', 'categoria' => 'Dermocosmética', 'precio' => 21500, 'estado' => 'Activo'],
    ['id' => 4, 'nombre' => 'Shampoo Reparación', 'marca' => 'Vichy', 'categoria' => 'Cuidado capilar', 'precio' => 16700, 'estado' => 'Activo'],
];

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

?>

<main class="admin-main">

    <header class="admin-encabezado">
        <div>
            <span class="admin-eyebrow">Gestión</span>
            <h1>Productos</h1>
            <p>Administrá los productos disponibles en City Farmac.</p>
        </div>

        <button class="btn-admin" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#formProducto">
            + Nuevo producto
        </button>
    </header>

    <section class="collapse mb-4" id="formProducto">
        <div class="admin-panel">

            <h2>Nuevo producto</h2>

            <form>
                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="nombreProducto" class="form-label">Nombre</label>
                        <input id="nombreProducto" name="nombre"
                               type="text" class="form-control"
                               minlength="3" required>
                    </div>

                    <div class="col-md-3">
                        <label for="marcaProducto" class="form-label">Marca</label>
                        <select id="marcaProducto" name="marca"
                                class="form-select" required>
                            <option value="">Seleccionar</option>
                            <option>Dermaglós</option>
                            <option>Garnier</option>
                            <option>CeraVe</option>
                            <option>Vichy</option>
                            <option>Eucerin</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="categoriaProducto" class="form-label">
                            Categoría
                        </label>
                        <select id="categoriaProducto" name="categoria"
                                class="form-select" required>
                            <option value="">Seleccionar</option>
                            <option>Dermocosmética</option>
                            <option>Cuidado facial</option>
                            <option>Cuidado capilar</option>
                            <option>Cuidado corporal</option>
                            <option>Protección solar</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="precioProducto" class="form-label">Precio</label>
                        <input id="precioProducto" name="precio"
                               type="number" min="0" step="0.01"
                               class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label for="stockProducto" class="form-label">Stock</label>
                        <input id="stockProducto" name="stock"
                               type="number" min="0"
                               class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label for="estadoProducto" class="form-label">Estado</label>
                        <select id="estadoProducto" name="estado"
                                class="form-select" required>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="descripcionProducto" class="form-label">
                            Descripción
                        </label>
                        <textarea id="descripcionProducto"
                                  name="descripcion"
                                  class="form-control"
                                  rows="3"
                                  minlength="10"
                                  maxlength="500"
                                  required></textarea>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input id="destacadoProducto"
                                   name="destacado"
                                   type="checkbox"
                                   class="form-check-input">
                            <label for="destacadoProducto"
                                   class="form-check-label">
                                Producto destacado
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn-admin">
                            Guardar producto
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </section>

    <section class="admin-panel">
        <h2>Listado de productos</h2>

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td><?= $producto['id'] ?></td>
                            <td><?= htmlspecialchars($producto['nombre']) ?></td>
                            <td><?= htmlspecialchars($producto['marca']) ?></td>
                            <td><?= htmlspecialchars($producto['categoria']) ?></td>
                            <td>
                                $<?= number_format($producto['precio'], 0, ',', '.') ?>
                            </td>
                            <td>
                                <span class="estado-activo">
                                    <?= htmlspecialchars($producto['estado']) ?>
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