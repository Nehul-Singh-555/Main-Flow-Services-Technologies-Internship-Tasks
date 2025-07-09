# 🔐 PHP Login & Signup System

A secure and responsive login/signup system developed using **PHP and MySQL**

---

## ✅ Features

- User registration (username, email, password)
- Secure password hashing with `password_hash()`
- Login via email or username
- Session-based authentication and dashboard access
- Styled error and success message display
- Clean, responsive user interface with HTML & CSS

---

## 🛠 Technologies Used

- PHP (Backend)
- MySQL (Database)
- HTML & CSS (Frontend)
- XAMPP (Local Server Environment)

---

## 🗃 Database Setup

1. Open your browser and go to `http://localhost/phpmyadmin`
2. Create a new database named:
   ```
   user_auth
   ```
3. Import the provided `user_auth.sql` file located in this folder
4. This will create a table named `users` with required fields

---

## 🚀 How to Run Locally (XAMPP)

1. Move this folder to:
   ```
   C:/xampp/htdocs/Task-2/auth-system
   ```

2. Start Apache and MySQL in the XAMPP Control Panel

3. Visit the project in your browser:
   ```
   http://localhost/Task-2/auth-system/index.php
   ```

---

## 📁 Project Files

| File           | Purpose                          |
|----------------|----------------------------------|
| `index.php`    | Login page                       |
| `signup.php`   | User registration form           |
| `dashboard.php`| Protected page after login       |
| `logout.php`   | Logs out the user session        |
| `config.php`   | MySQL database connection        |
| `styles.css`   | UI styling                       |
| `user_auth.sql`| SQL file to set up the database  |

---
