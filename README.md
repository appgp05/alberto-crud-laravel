# Gestor de proyectos con laravel
## Explicación general
El proyecto se trata de una página web gestionada con laravel, la cual permite, una vez que el usuario ha iniciado sesión, que este pueda gestionar los proyectos añadidos a la página, presentando un crud con el que gestionarlos. Además la página presenta la opción de cambiar el idioma de la misma entre ingles, frances y español.
Como último aspecto a mencionar la página está diseñada para usar un layout genérico gestionado por laravel, y que así todas las vistas de la página se vean igual y mantengan coherencia y la coporatividad de la página, y sobre este layout genérico se aplican las vistas como /home o /projects-list junto a los componentes como nav o header.
Lo cual se puede resumir en los siguientes aspectos:
*   **Gestión de Proyectos (CRUD):** Control total sobre la creación, edición y eliminación de registros.
*   **Sistema Multi-idioma:** Soporte dinámico para **Español, Inglés y Francés**.
*   **Arquitectura de Vistas:** Utilización de un **Layout genérico** mediante Blade para garantizar coherencia visual y corporativa en todas las rutas (`/home`, `/projects-list`, etc.).
*   **Componentización:** Uso de componentes reutilizables como `nav` y `header` para un código más limpio y mantenible.

---
## Requisitos del sistema
Para poder instalar el proyecto y que funcione debes asegurarte de cumplir lo siguiente:
*   **PHP** (>= 8.x) y **Composer**
*   **Node.js** y **NPM**
*   **Docker** y **Docker Compose**

---
## Pasos para la instalación
Una vez que se cumplen los requisitos para poder ejecutar el proyecto debes realizar los siguientes pasos para ponerlo en funcionamiento:
* Poner en escucha la propia página hecha con laravel para que esté pendiente de si ahy solicitudes, esto se hace con "php artisan serve"
* Gestionar los assets que necesita la página, y esto lo hacemos con una herramienta llamada vite, la cual podemos poner a trabajar con "npm run dev"
* Para que la página tenga acceso a la base de datos que utilizamos, la cual es una base de datos mysql gestionada a través de Docker, requerimos poner en funcionamiento todo el ecosistema preparado con el docker-compose.yaml, esto lo hacemos con "docker compose up -d"

---
## Explicación de la estructura y funcionalidades
El proyecto sigue una arquitectura modular y escalable, aprovechando las herramientas nativas de Laravel para mantener un código limpio (DRY - Don't Repeat Yourself).

### Arquitectura de Vistas (Layouts y Blade)
Para garantizar la coherencia visual y la identidad corporativa, la aplicación utiliza un **Layout Genérico** centralizado.
- **Layout principal:** Define la estructura base (HTML, Componentes básicos genéricos, CSS y Directivas de Vite).
- **Extensibilidad:** Las vistas como `/home` o `/projects-list` extienden este layout, inyectando su contenido específico en el layout principal.
- **Componentes:** Se han modularizado elementos recurrentes como el `nav` y el `header`, facilitando su mantenimiento.

### Autenticación con Laravel Breeze
La seguridad y el acceso de usuarios están gestionados mediante **Laravel Breeze**.
- Proporciona un sistema de autenticación completo (Login, Registro, Verificación de Email y Reset de Contraseña).
- Protege el contenido de gestión de proyectos, asegurando que solo usuarios autenticados puedan interactuar con los datos.

### Gestión de Proyectos (CRUD & Resources)
La lógica de negocio para los proyectos se implementa mediante un **Resource Controller**, lo que permite una estructura de rutas estandarizada y limpia.
- **Ruta Resource:** Se utiliza `Route::resource('project', ProjectController::class)`, mapeando automáticamente las acciones de index, create, store, show, edit, update y destroy.
- **CRUD Completo:** Interfaz fluida para que el usuario pueda administrar sus proyectos de principio a fin.

### Sistema Multi-idioma (Internationalization)
La aplicación soporta **Español, Inglés y Francés** mediante una implementación robusta:
- **Laravel Lang:** Gestión de traducciones a través de archivos PHP en la carpeta `lang/`.
- **Language Middleware:** Un middleware personalizado intercepta cada solicitud para detectar y aplicar el idioma seleccionado por el usuario, almacenándolo en la sesión.
- **Language Controller:** Controlador dedicado para gestionar el cambio de locale, permitiendo una transición fluida entre idiomas desde la interfaz.
