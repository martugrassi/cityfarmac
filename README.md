# City Farmac

Proyecto realizado para la materia **Producción Web** de la carrera **Analista de Sistemas**.

## Instancia 1 - Template y vistas

En esta primera instancia se desarrolla el maquetado del sitio público y del panel de administración de **City Farmac**.

El proyecto utiliza componentes reutilizables para evitar la duplicación de código y cuenta con dos layouts diferenciados: uno para el sitio público y otro para el panel administrativo.

En esta instancia las funcionalidades de persistencia, autenticación y operaciones CRUD se encuentran representadas visualmente y no poseen conexión a base de datos.

## Tecnologías

- PHP 8+
- HTML5
- CSS3
- JavaScript
- Bootstrap 5.3.3

## Requisitos

Para ejecutar el proyecto localmente se necesita:

- PHP 8 o superior.
- Servidor Apache.
- XAMPP o entorno equivalente.

No es necesario iniciar MySQL para esta instancia.

## Instalación

1. Clonar o descargar el repositorio.
2. Ubicar la carpeta del proyecto dentro del directorio público del servidor Apache.

Utilizando XAMPP:

```text
C:\xampp\htdocs\cityfarmac
```

3. Iniciar Apache desde XAMPP.
4. Abrir en el navegador:

```text
http://localhost/cityfarmac/
```

## Estructura principal

```text
cityfarmac/
│
├── _admin/
│   ├── assets/
│   ├── includes/
│   ├── index.php
│   ├── login.php
│   ├── registro.php
│   ├── categorias.php
│   ├── marcas.php
│   ├── productos.php
│   ├── comentarios.php
│   ├── usuarios.php
│   └── perfiles.php
│
├── Config/
│   └── config.php
│
├── front/
│   ├── assets/
│   ├── includes/
│   ├── index.php
│   ├── productos.php
│   ├── producto.php
│   ├── contacto.php
│   └── 404.php
│
├── Helpers/
├── index.php
└── README.md
```

## Sitio público

### Inicio

```text
http://localhost/cityfarmac/front/
```

### Catálogo de productos

```text
http://localhost/cityfarmac/front/productos.php
```

Incluye la representación visual de filtros por categoría, marca, precio, productos destacados y orden por precio.

### Detalle de producto

Se utiliza una única vista reutilizable que recibe el identificador del producto mediante la URL.

Ejemplo:

```text
http://localhost/cityfarmac/front/producto.php?id=1
```

Los productos disponibles utilizan identificadores del `1` al `9`.

### Contacto

```text
http://localhost/cityfarmac/front/contacto.php
```

### Página 404

```text
http://localhost/cityfarmac/front/404.php
```

## Panel administrativo

### Acceso

```text
http://localhost/cityfarmac/_admin/login.php
```

### Registro

```text
http://localhost/cityfarmac/_admin/registro.php
```

### Dashboard

```text
http://localhost/cityfarmac/_admin/
```

### Gestión de categorías

```text
http://localhost/cityfarmac/_admin/categorias.php
```

### Gestión de marcas

```text
http://localhost/cityfarmac/_admin/marcas.php
```

### Gestión de productos

```text
http://localhost/cityfarmac/_admin/productos.php
```

### Gestión de comentarios

```text
http://localhost/cityfarmac/_admin/comentarios.php
```

### Gestión de usuarios

```text
http://localhost/cityfarmac/_admin/usuarios.php
```

### Gestión de perfiles

```text
http://localhost/cityfarmac/_admin/perfiles.php
```

## Componentes reutilizables

El sitio público reutiliza componentes comunes para:

- Header.
- Navegación principal.
- Footer.

El panel administrativo posee un layout independiente y reutiliza:

- Header administrativo.
- Sidebar.
- Footer administrativo.

De esta manera se evita repetir la estructura común en cada vista.

## Responsive y accesibilidad

Las vistas fueron desarrolladas contemplando:

- Diseño responsive.
- Uso de etiquetas semánticas de HTML5.
- Formularios con `label` asociados a sus respectivos campos.
- Validaciones nativas de HTML5.
- Textos alternativos en las imágenes de productos.
- Tablas con encabezados identificados.
- Navegación diferenciada entre el sitio público y el panel administrativo.

## Configuración de rutas

La ruta base del proyecto se encuentra centralizada en:

```text
Config/config.php
```

Esto permite utilizar una única configuración para construir los enlaces internos y las rutas de los recursos del proyecto.

## Estado del proyecto

**Instancia 1 completada: template y vistas.**

Las operaciones de autenticación, persistencia de datos, filtros y ABM/CRUD se implementarán en instancias posteriores.