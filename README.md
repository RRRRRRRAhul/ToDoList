# 📝 Laravel To-Do List

A simple and secure **to-do list application** built with **Laravel 12.9.2** and **MySQL**.  
This app allows users to **register, log in, and manage their personal tasks** securely — no one can see each other’s tasks.  

---

## 📊 Badges

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.9.2-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/PHP-8.3.14-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
</p>

---

## 🚀 Tech Stack

<p align="left">
  <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" width="60" height="60"/>
  <img src="https://www.php.net/images/logos/new-php-logo.svg" alt="PHP" width="80" height="60"/>
  <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="MySQL" width="80" height="60"/>
  <img src="https://laravel.com/img/logotype.min.svg" alt="Blade Template" width="100" height="60"/>
</p>

- **Laravel**: 12.9.2  
- **PHP**: 8.3.14  
- **Database**: MySQL  
- **View Engine**: Blade Template  

---

## ✨ Features

✅ User Authentication (Register/Login/Logout)  
✅ Each user can only see their own tasks  
✅ Add, view, edit, and delete tasks  
✅ Mark tasks as complete/incomplete  
✅ Clean UI built with Blade templates  
✅ Persistent storage using MySQL  

---

## 🛠️ Installation

Follow these steps to set up the project locally:

```bash
# 1️⃣ Clone the repository
https://github.com/RRRRRRRAhul/ToDoList.git

# 2️⃣ Navigate to the project folder
cd laravel-to-do-list

# 3️⃣ Install dependencies
composer install

# 4️⃣ Copy .env file and set your database credentials
cp .env.example .env

# 5️⃣ Generate application key
php artisan key:generate

# 6️⃣ Run migrations to create tables (including users & tasks)
php artisan migrate

# 7️⃣ Start the development server
php artisan serve
