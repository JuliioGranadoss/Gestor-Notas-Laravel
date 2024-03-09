# Este proyecto está realizado por: Julio Granados Durán
# NotaCraft

NotaCraft es una aplicación web diseñada para ayudarte a organizar y gestionar tus notas de manera eficiente. Con esta aplicación, puedes crear, ver, editar y eliminar notas, así como también administrar categorías asociadas a cada nota para una mejor organización y seguimiento.

## Características Principales

- **Gestión de Notas**: La aplicación te permite crear nuevas notas con títulos descriptivos y contenido detallado. Cada nota tiene una fecha de creación automática para un seguimiento claro del tiempo.

- **Categorización de Notas**: Puedes asignar una o más categorías a cada nota para clasificarlas según su contenido y temática. Esto te permite organizar tus notas de manera más eficiente y encontrarlas fácilmente cuando las necesites.

- **Administración de Categorías**: Además de gestionar notas, puedes administrar las categorías existentes. Esto incluye la capacidad de crear nuevas categorías y eliminar las que ya no necesitas.

## Tecnologías Utilizadas

- **Laravel**: NotaCraft está desarrollado utilizando el framework de desarrollo de aplicaciones web Laravel. Laravel ofrece una estructura sólida y conveniente para el desarrollo de aplicaciones web modernas.

- **Tailwind CSS**: Se utiliza Tailwind CSS como framework de CSS para diseñar interfaces de usuario atractivas y responsivas. Tailwind CSS permite diseñar de manera rápida y eficiente, lo que facilita la creación de una interfaz de usuario atractiva y funcional.

- **MySQL**: La aplicación utiliza MySQL como sistema de gestión de bases de datos relacional para almacenar y gestionar los datos de la aplicación. MySQL es una opción popular y confiable para el almacenamiento de datos en aplicaciones web.

## Uso

Para comenzar a utilizar el Gestor de Notas en Laravel, sigue estos pasos:

1. **Clonar el Repositorio**: Clona este repositorio en tu máquina local utilizando el siguiente comando:

    ```
    git clone https://github.com/JuliioGranadoss/Gestor-Notas-Laravel
    ```

2. **Configurar la Base de Datos**: Copia el archivo `.env.example` a `.env` y configura las credenciales de tu base de datos MySQL.

3. **Instalar Dependencias**: Ejecuta `composer install` para instalar las dependencias de Laravel.

4. **Generar Clave de Aplicación**: Ejecuta `php artisan key:generate` para generar una nueva clave de aplicación.

5. **Ejecutar Migraciones**: Ejecuta `php artisan migrate` para crear las tablas necesarias en la base de datos.

6. **Iniciar Servidor de Desarrollo**: Utiliza `php artisan serve` para iniciar el servidor de desarrollo de Laravel.

Una vez que la aplicación esté instalada y ejecutándose, podrás acceder a ella desde tu navegador web. Inicia sesión, y podrás empezar a crear, editar y gestionar tus notas de manera eficiente.
