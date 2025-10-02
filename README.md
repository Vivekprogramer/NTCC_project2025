# NTPC Lost & Found Management System (2025)

![NTPC Logo](amity.logo.jpeg)

A **web-based Lost & Found Management System** for NTPC developed using HTML, CSS, PHP, and MySQL. This system allows users to register, log in, and manage lost and found items efficiently.

---

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Screenshots](#screenshots)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [Installation & Setup](#installation--setup)
- [Usage](#usage)
- [Future Enhancements](#future-enhancements)
- [Author](#author)

---

## Project Overview

This project is designed for managing **lost and found items** within NTPC premises. Users can register, log in, report lost or found items, and view all items in the system. The system is built with a **PHP backend**, **MySQL database**, and a **responsive front-end**.

---

## Features

- ✅ User registration and login  
- ✅ Add lost items with details  
- ✅ Add found items with details  
- ✅ View all reported items  
- ✅ Responsive front-end for desktop and mobile  
- ✅ Basic search/filter functionality (optional to extend)

---

## Screenshots

> Add screenshots of your project here (replace paths with your actual images)

![Home Page](screenshots/index.png)  
*Home Page with navigation*

![Lost Items](screenshots/lost.png)  
*Add/view lost items*

![Found Items](screenshots/found.png)  
*Add/view found items*

![Login Page](screenshots/sign_in.png)  
*User login page*

![Sign Up Page](screenshots/sign_up.png)  
*User registration page*

---

## Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** XAMPP (Apache & MySQL)  
- **Version Control:** Git & GitHub  

---

## Project Structure

NTPC project/
├── index.html
├── about.html
├── lost.html
├── found.html
├── login_Page/
│ ├── Sign_Up.html
│ ├── sign_In.html
│ ├── forgot_pass.html
│ └── Sign_Up.css, sign_in.css, forgot_pass.css
├── backend/
│ ├── db.php
│ ├── add_lost_item.php
│ ├── add_found_item.php
│ └── test_db.php
├── view_items.php
├── amity.logo.jpeg
├── .vscode/
└── README.md

yaml
Copy code

---

## Installation & Setup

Follow these steps to run the project locally:

1. **Install XAMPP**  
   Download from [XAMPP Official Website](https://www.apachefriends.org/) and install. Start **Apache** and **MySQL**.

2. **Clone the repository**  
   ```bash
   git clone https://github.com/Vivekprogramer/NTCC_project2025.git
Move project to XAMPP folder
Copy the project folder to C:\xampp\htdocs\.
Setup MySQL database
Open http://localhost/phpmyadmin/
Create a new database (e.g., ntpc_lost_found)
Import tables if you have SQL scripts (or create manually)
Configure db.php
Update database credentials in backend/db.php:
$conn = mysqli_connect("localhost","root","","ntpc_lost_found");
Access the project
Open your browser and go to:
http://localhost/NTPC project/index.html
Usage
Register a new user (Sign Up)
Login using your credentials
Add Lost Item or Add Found Item
View all items from the homepage

Future Enhancements
🔹 Add search/filter by location, date, or item type
🔹 Add email notifications for found items
🔹 Use AJAX for faster form submissions
🔹 Improve mobile responsiveness

Author
Vivek Kumar Singh
GitHub: https://github.com/Vivekprogramer
Email: vivekkumarsingh0776@gmail.com

License
This project is open source and available under the MIT License.
