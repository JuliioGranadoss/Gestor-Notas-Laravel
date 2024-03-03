# Este proyecto está realizado por: Julio Granados Durán
# NotaCraft

NotaCraft es un gestor de notas desarrollado en Laravel 10. Esta aplicación web te permite crear, editar y organizar tus notas de manera eficiente.

## Características

- **Gestión de Notas**: Crea, edita y elimina tus notas de manera sencilla.
- **Gestión de Categorías**: Crea y elimina categorías.
- **Interfaz Intuitiva**: Diseño limpio y amigable para una experiencia de usuario óptima.

## Estructura de la Aplicación

La aplicación está estructurada en torno a tres entidades principales:

1. **Usuarios**: La autenticación de usuarios permite a los usuarios registrarse, iniciar sesión y gestionar sus propias notas y categorías.

2. **Notas**: Los usuarios pueden crear, editar y eliminar notas. Cada nota tiene un título y un contenido.

3. **Categorías**:Los usuarios tienen la opción de crear y borrar categorías.

## Instalación

Sigue estos pasos para instalar y ejecutar NotaCraft en tu entorno local:

1. Clona el repositorio desde GitHub:

git clone https://github.com/JuliioGranadoss/Gestor-Notas-Laravel

2. Instala las dependencias de PHP usando Composer:

composer install

3. Copia el archivo `.env.example` y renómbralo como `.env`. Luego, configura tus variables de entorno, incluyendo la configuración de la base de datos.

4. Genera una nueva clave de aplicación:

php artisan key:generate

5. Ejecuta las migraciones para crear las tablas de la base de datos y los seeders para cargar datos de prueba:

php artisan migrate --seed

6. Inicia el servidor de desarrollo:

php artisan serve

## En el repositorio, hay un video en el que se explica brevemente la aplicación.
