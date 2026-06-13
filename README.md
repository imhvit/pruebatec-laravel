# API REST - CRUD de Productos

## Requisitos

- **PHP**: >= 8.2
- **Composer**: >= 2.10
- **MysQL**: 8.0

## Instalación

Instalar las dependencias:

```bash
composer install
```

Preparar el entorno:

```
cp .env.example .env
```

Configurar la base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_db
DB_USERNAME=root
DB_PASSWORD=tu_contraseña
```

Generar llave:

```
php artisan key:generate
```

Construir la base de datos e iniciar el seeder:

```
php artisan migrate:fresh --seed
```

Iniciar servidor local:

```
php artisan serve
```

## API URL:

`http://localhost:8000/`

```
Swagger:
http://localhost:8000/docs/api

Telescope:
http://localhost:8000/telescope
```
