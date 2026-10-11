<?php

require_once __DIR__ . '/../Config/config.php';

$titulo = 'Contacto | City Farmac';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

?>

<main>

    <section class="cabecera-pagina">
        <div class="container">
            <span class="subtitulo">Estamos para ayudarte</span>
            <h1>Contacto</h1>
            <p>Comunicate con el área de City Farmac que necesites.</p>
        </div>
    </section>

    <section class="seccion-contacto">

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-5">

                    <div class="contacto-info">

                        <span class="subtitulo">City Farmac</span>

                        <h2>¿En qué podemos ayudarte?</h2>

                        <p>
                            Completá el formulario y seleccioná el área
                            correspondiente a tu consulta.
                        </p>

                        <div class="dato-contacto">
                            <strong>Atención</strong>
                            <span>Lunes a viernes de 8 a 20 hs.</span>
                        </div>

                        <div class="dato-contacto">
                            <strong>Correo</strong>
                            <span>contacto@cityfarmac.com.ar</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="formulario-card">

                        <form>

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">
                                        Nombre
                                    </label>

                                    <input
                                        id="nombre"
                                        name="nombre"
                                        type="text"
                                        class="form-control"
                                        minlength="2"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">
                                        Correo electrónico
                                    </label>

                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        class="form-control"
                                        required>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">
                                    Teléfono
                                </label>

                                <input
                                    id="telefono"
                                    name="telefono"
                                    type="tel"
                                    class="form-control"
                                    pattern="[0-9+\-\s]{8,20}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="area" class="form-label">
                                    Área
                                </label>

                                <select
                                    id="area"
                                    name="area"
                                    class="form-select"
                                    required>

                                    <option value="">Seleccionar área</option>
                                    <option value="ventas">Ventas</option>
                                    <option value="productos">Productos</option>
                                    <option value="administracion">Administración</option>
                                    <option value="atencion">Atención al cliente</option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="motivo" class="form-label">
                                    Motivo
                                </label>

                                <input
                                    id="motivo"
                                    name="motivo"
                                    type="text"
                                    class="form-control"
                                    minlength="3"
                                    maxlength="100"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="mensaje" class="form-label">
                                    Mensaje
                                </label>

                                <textarea
                                    id="mensaje"
                                    name="mensaje"
                                    class="form-control"
                                    rows="5"
                                    minlength="10"
                                    maxlength="600"
                                    required></textarea>
                            </div>

                            <button type="submit" class="btn btn-city">
                                Enviar consulta
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>