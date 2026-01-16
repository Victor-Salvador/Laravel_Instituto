# Proyecto de instituto
Esto es una practica para el modulo de servidor

## Instalo breeze
para instalar ejecuto el comando
````bash
composer require "laravel/breeze"
````
## Script propio local
Con currently creamos un nuevo script en package.json.

añadimos a scripts la siguiente linea:
````
"local": "docker compose up -d && concurrently \"npm run dev\" \"php artisan serve\" "
````

```json
{
    "scripts": {
        "build": "vite build",
        "dev": "vite",
        "local": "docker compose up -d && concurrently \"npm run dev\" \"php artisan serve\" "
    } 
}
```

# README - Proyecto Instituto

Este README describe los pasos realizados para configurar el proyecto Laravel **Instituto** con autenticación, frontend con Tailwind/DaisyUI, gestión de roles, localización y modelos iniciales.

---

## 1. Crear el proyecto Laravel

Instalamos el instalador global de Laravel y creamos un nuevo proyecto:

```bash
# Instalar el instalador global de Laravel
composer global require laravel/installer

# Crear el proyecto Laravel
laravel new instituto
cd instituto
```

---

## 2. Configurar autenticación con Laravel Breeze

Instalamos Breeze para manejar la autenticación básica:

```bash
composer require "laravel/breeze"
php artisan breeze:install
```

---

## 3. Crear modelos y migraciones

Creamos el modelo `Alumno` con migraciones y controladores básicos:

```bash
php artisan make:model Alumno --all
php artisan migrate --seed
```
---

## 4. Gestión de roles con Spatie Permission

Instalamos y configuramos Spatie para permisos y roles:

```bash
composer require spatie/laravel-permission

php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

Creamos seeders para los roles y usuarios:

```bash
php artisan make:seeder RolesSeeder
php artisan make:seeder UserSeeder
```

---

## 5. Crear controladores

Controladores creados:

```bash
# Controlador para usuarios
php artisan make:controller UserController --resource

# Controlador invocable para el idioma
php artisan make:controller LanguageController --invokable
```
---

## 6. Localización

Instalamos paquetes para manejar múltiples idiomas:

```bash
composer require laravel-lang/common

php artisan lang:add es
php artisan lang:add fr
php artisan lang:add en

php artisan make:Middleware SetLanguageMiddleware
```
---

## 7. Migraciones y seeds finales

Para reiniciar la base de datos y poblarla con datos iniciales:

```bash
php artisan migrate:fresh --seed
```

---


