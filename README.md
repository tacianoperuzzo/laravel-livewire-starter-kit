# Bootstrap Starter Kit for Laravel

Starter kit Laravel 12 com Bootstrap 5.3.3, Livewire 3, Bootstrap icons e Fontawesome-free icons, fork do packagist [flightsadmin/bootstrap-starter-kit](https://packagist.org/packages/laravel/vue-starter-kit) com algumas implementações, como um submenu e o pacote de ícones Fontawesome 6.7.2.

![starterkit-screenshot.png](https://github.com/tacianoperuzzo/laravel-livewire-starter-kit/blob/main/starterkit-screenshot.png)

## Features

- 🎨 Modern Bootstrap 5 Design
- ⚡ Powered by Laravel Livewire
- 🔒 Complete Authentication System
  - Login & Registration
  - Password Reset
  - Email Verification
  - Profile Management
- 🎯 User Settings
  - Profile Information
  - Password Management
  - Appearance Settings
- 📱 Responsive Layout
- 🔍 Clean & Maintainable Code

## Prerequisites

- PHP >= 8.1
- Composer
- Node.js & NPM

## Installation

Clone from Github
```
git clone https://github.com/tacianoperuzzo/laravel-livewire-starter-kit app
```
Install dependencies
```
cd app
npm install
composer install
```
Configure the enviroment
```
cp .env.example .env
```
Run migrations, generate key and run the project
```
php artisan migrate
php artisan key:generate
cpmposer run dev
```

## License

This starter kit is open-sourced software licensed under the MIT license.
