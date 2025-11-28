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
***"local": "docker compose up -d && concurrently \"npm run dev\" \"php artisan serve\" "***

```json
{
    "scripts": {
        "build": "vite build",
        "dev": "vite",
        "local": "docker compose up -d && concurrently \"npm run dev\" \"php artisan serve\" "
    } 
}
```
