# 🎲 Proyecto Bingo (Laravel, Reverb & Echo)

Este repositorio contiene la implementación base de un juego de Bingo en tiempo real, utilizando **Laravel 12** para el backend y la arquitectura de **Reverb/Echo** para la comunicación en vivo (WebSockets).

## 1. Requisitos

Asegúrate de tener instalado y configurado en tu sistema:

* **PHP** (8.2+)
* **Composer**
* **Node.js** (LTS) y **npm/Yarn**

## 2. Instalación y Configuración del Entorno

Sigue estos pasos para clonar el proyecto e instalar todas las dependencias:

### 2.1. Clonar el Repositorio e Instalar Dependencias

```bash
# Reemplazar 'tu-repositorio-aqui' con la URL real
git clone https://github.com/agufedee/bingo-ws.git
cd bingo-ws

# Instalar dependencias de PHP y JavaScript
composer install
npm install

# Compilar Assets de Front-end (necesario para Laravel Echo)
npm run dev

# Configurar archivo .env
cp .env.example .env
php artisan key:generate

# Configuración de Conexión a Base de Datos
DB_CONNECTION=sqlite
# Las demás variables DB_HOST, DB_PORT, etc., no son necesarias para SQLite.

# Configuración del Queue Worker (se usa 'sync' para simplificar las pruebas)
QUEUE_CONNECTION=sync

# Driver de Broadcasting (debe ser reverb para el tiempo real)
BROADCAST_DRIVER=reverb

# Crear archivo sqlite
touch database/database.sqlite

#Migraciones y Seeders
php artisan migrate:fresh --seed

#probar iniciar servidor desarrollo
php artisan serve

#probar iniciar servidor websocket
php artisan reverb:start

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


