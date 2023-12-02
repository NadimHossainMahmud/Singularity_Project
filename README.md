# Singularity Project - Inventory Management System with Laravel

Welcome to the Singularity Project, a basic Inventory Management System (IMS) built with Laravel. This project focuses on essential features such as CRUD operations, basic data relationships, user interaction, and efficient database interactions.

## Table of Contents
- [1. Laravel Setup](#1-laravel-setup)
- [2. Database Design](#2-database-design)
- [3. Product Management](#3-product-management)
- [4. User Interface](#4-user-interface)
- [5. Authentication](#5-authentication)
- [6. Routing and Controllers](#6-routing-and-controllers)

## 1. Laravel Setup
To get started with the Singularity Project, follow these steps:

- Clone the repository:
  ```bash
  git clone https://github.com/your-username/singularity-project.git
  ```

- Navigate to the project directory:
  ```bash
  cd singularity-project
  ```

- Install dependencies:
  ```bash
  composer install
  ```

- Copy the `.env.example` file to `.env` and configure your database connection.

- Generate an application key:
  ```bash
  php artisan key:generate
  ```

- Migrate the database:
  ```bash
  php artisan migrate
  ```

## 2. Database Design
Singularity Project utilizes a MySQL database with a `products` table containing fields: `id`, `name`, `quantity`, and `price`. Initial data seeding is provided for convenience.

## 3. Product Management
CRUD operations for products are implemented with Laravel:

- Add a new product
- View product details
- Update product information
- Delete a product

Basic form validation is included to ensure data integrity.

## 4. User Interface
The front-end is developed using Laravel Blade, offering a simple and user-friendly interface for efficient product management.

## 5. Authentication
A basic authentication system is set up, allowing CRUD operations only for logged-in users. This ensures data security and user-specific interactions.

## 6. Routing and Controllers
Singularity Project efficiently utilizes Laravel routing and controllers, following RESTful principles where applicable. This ensures a well-organized and maintainable codebase.

Happy coding! 
