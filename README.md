## Proceso de instalación y configuración

1. Se debe clonar el repositorio
git clone https://github.com/YeisonParada/kuepa.git

2. Cargar las dependencias del proyecto
composer install

3. Instalar dependencias NPM
npm install

3. crear el archivo .env
preferiblemente copiar el de ejemplo y modificarlo.
copy .env.example .env

4. Crear la base de datos en MySql

5. Generar un llave para el proyecto
php artisan key:generate

6 Ejecutar migraciones y sedeer
php artisan migrate --seed

## Nota:

El usuario administrador de la aplicación es el siguiente:
Usuario: administrador@kuepa.com
Contraseña: Kuepa2020*
