# 🛒 Inventory & Buyer Management System

> This is a Java Swing + MySQL application. 
It allows users to **add and delete products or buyers** through a user-friendly graphical interface.

---

## ✨ Features Implemented

### ✅ Add Products
- Fields: Name, Category, Price, Quantity, Description
- Validates numeric fields and required inputs
- Stores product data in the MySQL database

### ✅ Add Buyers
- Fields: Name, Email, Phone Number, Address
- Validates email format and phone number
- Stores buyer data in the MySQL database

### ✅ Delete Products
- Displays a list/table of products
- Delete button next to each product
- Confirmation prompt before deletion

### ✅ Delete Buyers
- Displays a list/table of buyers
- Delete button next to each buyer
- Confirmation prompt before deletion

### ✅ Navigation
- A central `MainMenuForm` to navigate between all features

---

## 🛠️ Tech Stack

- Java Swing (GUI)
- JDBC (Java Database Connectivity)
- MySQL (Database)
- NetBeans IDE (recommended)

---

## 🗄️ Database Schema

### `products` table

| Column       | Type              | Details                |
|--------------|-------------------|------------------------|
| `id`         | INT AUTO_INCREMENT| Primary key            |
| `name`       | VARCHAR(255)      | Product name           |
| `category`   | VARCHAR(100)      | Product category       |
| `price`      | DOUBLE            | Product price          |
| `quantity`   | INT               | Number in stock        |
| `description`| VARCHAR(500)      | Description            |

### `buyers` table

| Column     | Type              | Details                  |
|------------|-------------------|--------------------------|
| `id`       | INT AUTO_INCREMENT| Primary key              |
| `name`     | VARCHAR(255)      | Buyer's name             |
| `email`    | VARCHAR(255)      | Must be valid email      |
| `phone`    | VARCHAR(10)       | Must be 10 digits only   |
| `address`  | VARCHAR(500)      | Buyer address            |

---

📝 Notes

- Make sure MySQL server is running

- If using XAMPP/WAMP, start the MySQL module

- Use valid input formats to avoid errors (e.g., numbers for price/quantity, correct email format)

---

## 🚀 Getting Started

### ✅ Prerequisites

- Java JDK 8 or higher
- MySQL installed locally
- NetBeans or any Java IDE
- MySQL JDBC Driver (`mysql-connector-java`)

### ⚙️ Setup Instructions

1. **Clone the repository** or download the source code ZIP.

2. **Set up the database** using the SQL below:

```sql
CREATE DATABASE inventory;

USE inventory;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    category VARCHAR(100),
    price DOUBLE,
    quantity INT,
    description VARCHAR(500)
);

CREATE TABLE buyers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(10),
    address VARCHAR(500)
);
```

3. **Edit your `DatabaseConnection.java`:**

```java
public class DatabaseConnection {
    public static Connection getConnection() throws SQLException {
        String url = "jdbc:mysql://localhost:3306/inventory";
        String user = "root"; // your DB username
        String password = "your_password"; // your DB password
        return DriverManager.getConnection(url, user, password);
    }
}
```
4. 🧑‍💻 Open Project in NetBeans:

- Open NetBeans

- Import the project or copy the src/ files into a new Java Swing application

- Clean & Build the project

5. **Run `MainMenuForm.java`** as the starting point from your IDE.

---

## 🎨 UI Design & UX Notes

- 🧭 Back buttons improve navigation flow between screens
- 💬 Tooltip hints provided on input fields and buttons
- 🚫 Validation prevents bad input from reaching the database
- ✅ Success dialogs confirm additions or deletions

---