# 🖥️ MySQL Database Connection & Homepage UI (Java Swing)

This project demonstrates how to:

- Connect a Java application to a **MySQL database**
- Design a **Homepage GUI** using **Swing in NetBeans**
- Implement basic **navigation buttons** and window switching
- A short demo video provided

---

## 🔧 Technologies Used

- Java (JDK 8+)
- Swing (GUI with NetBeans)
- MySQL (via XAMPP)
- JDBC (MySQL Connector/J)

---

## 🛠️ Features Implemented

### ✅ Database Connection
- Created a reusable `DatabaseConnection.java` class
- Successfully connected to MySQL using JDBC
- Handled errors (invalid credentials, driver missing, etc.)

### ✅ Homepage UI
- `JFrame` with:
  - Title label: **"Welcome to the Homepage"**
  - Greeting label: **"Hello, User!"**
  - Navigation buttons:
    - **View Profile**
    - **Settings**
    - **Logout**
- Implemented button click events using `ActionListener`
- Page-to-page navigation:
  - `Homepage` → `ProfilePage`, `SettingsPage`, or `LoginForm`
- Each of the pages includes a **"Home" button** to return to the Homepage
- Layout manager (`GroupLayout`) used for:
  - **Center alignment**
  - **Vertical and horizontal padding**
- GUI is **auto-sized** using layout manager (no fixed width/height)

---

## ⚙️ Setup Instructions

1. Install **XAMPP** or any MySQL server
2. Create a database (name: `homepage_db`)
3. Create a table if needed (e.g., `users`)

---

## 🚀 How to Run

1. Import project(Homepage) into **NetBeans**
2. Ensure **MySQL is running** (via XAMPP)
3. Update your credentials in `DatabaseConnection.java`:
   ```java
   private static final String URL = "jdbc:mysql://localhost:3306/homepage_db";
   private static final String USER = "root";
   private static final String PASSWORD = "";
   ```
4. Add MySQL Connector `.jar` to project libraries:
   - Right-click project → Properties → Libraries → Add JAR/Folder
5. Run `Homepage.java` or `DatabaseConnection.java` to test

---