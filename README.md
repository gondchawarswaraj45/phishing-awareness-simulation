<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

# 🛡️ Phishing Awareness Simulation System

A full-stack cybersecurity awareness web application built using **Laravel**.  
The system simulates phishing detection quizzes, tracks user performance, and improves awareness through levels and analytics.

---

## 🎯 Project Objectives

- Educate users about phishing attacks
- Evaluate awareness using quizzes
- Track user performance over time
- Assign awareness levels dynamically
- Provide an admin panel for quiz management

---

## 🧠 Key Features

### 👤 User Side
- Secure authentication (Laravel Breeze)
- Interactive phishing quiz
- Real-time score calculation
- Awareness level system (Beginner / Intermediate / Advanced)
- Quiz result history
- Analytics dashboard
- Dark themed modern UI

### 🛠️ Admin Side
- Admin login (role-based access)
- Add / delete quiz questions
- Secure admin routes

---

## 🏗️ Tech Stack

- **Backend:** Laravel 10 (PHP 8.2)
- **Frontend:** Blade + Tailwind CSS
- **Database:** MySQL
- **Auth:** Laravel Breeze
- **Version Control:** Git + GitHub

---

## 🗂️ Database Tables

- `users` – authentication & role
- `quizzes` – quiz questions
- `results` – quiz attempts & scores

---

## 🚀 How to Run Locally

```bash
git clone https://github.com/your-username/phishing-awareness-simulation.git
cd phishing-awareness-simulation

composer install
cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve
