# Laravel CRUD App

A simple **Laravel CRUD** (Create, Read, Update, Delete) application for managing blog posts.  
This project is built using Laravel 10 and demonstrates basic web application features such as routing, controllers, views, and Eloquent ORM.

---

## 📁 Project Structure

crudApp/
├── app/
│ ├── Http/Controllers/ → All controllers (like PostController)
│ ├── Models/ → Eloquent model (like Post.php)
├── database/
│ ├── migrations/ → Migration files for creating tables
├── resources/
│ ├── views/ → Blade files (like posts/index.blade.php)
├── routes/
│ ├── web.php → Route definitions
├── public/
│ ├── assets, css, js → Public assets
├── .env → Environment file
└── ...


---

## 🚀 Features

- Add new blog posts
- View list of posts
- Edit existing posts
- Delete posts
- Server-side validation
- Bootstrap UI for styling

---

## 📦 Requirements

- PHP >= 8.1
- Composer
- Laravel 10+
- MySQL / SQLite
- Node.js and npm (for frontend asset building)

---

## 🔧 Setup Instructions

1. **Clone the Repository**
```bash
git clone https://github.com/YOUR_USERNAME/laravel-crud-app.git
cd laravel-crud-app

TO Install PHP Dependencies
composer install

Configure Enviorement
cp .env.example .env
php artisan key:generate

Run Migrations
php artisan migrate

Start Development Server
php artisan serve

Usage
Visit /posts to see the CRUD operations

Add, edit, or delete a post using the interface


📄 License
This project is open-source and free to use for educational purposes.

🙋‍♂️ Author
Made with ❤️ by [Haroon Ahmed]
GitHub