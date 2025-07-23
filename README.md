# 🛡️ User Role System - Laravel Breeze

Sistema de gestión de usuarios con roles y permisos, desarrollado con Laravel 9, Breeze y Tailwind CSS.

## 🚀 Funcionalidades actuales

-   Registro e inicio de sesión de usuarios
-   Diseño responsive con Tailwind CSS
-   Modo oscuro activado con Tailwind
-   Dashboard protegido por autenticación
-   Estructura preparada para:
    -   Roles y permisos
    -   Panel de administración
    -   CRUD de usuarios

## 🛠 Tecnologías utilizadas

-   PHP 8.0
-   Laravel 9.x
-   Laravel Breeze
-   Tailwind CSS
-   Vite
-   MySQL
-   Git & GitHub

## 📚 En desarrollo

Este proyecto forma parte de mi preparación técnica como programadora web.  
En las siguientes etapas se integrarán:

-   Control de roles y permisos con Spatie
-   Sistema de inventario con facturación
-   Panel administrativo con gráficos

## 👩‍💻 Instalación local

```bash
git clone https://github.com/canedoa/user-role-system.git
cd user-role-system
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```
