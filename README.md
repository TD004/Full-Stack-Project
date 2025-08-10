# 🩺 HealthMate - Smart Health Companion Website

HealthMate is a full-stack health management web application that allows users to register, log in, and track their health logs, view dashboards, and connect with doctors. It’s built using **HTML, CSS, JavaScript, PHP, MySQL**, and styled with **Bootstrap 5** and **custom JavaScript/CSS**.

## 🚀 Features

- ✅ User registration with **email verification**
- 🔒 Secure login using **hashed passwords**
- 📝 Health log form (symptoms, heart rate, mood)
- 📊 Dashboard with **interactive charts** using Chart.js
- 👨‍⚕️ Find Doctors / Doctor Locator section
- 🖼️ Stylish homepage with **animated UI & navigation**
- 🔐 Form validation using JavaScript
- 📦 Modular file structure with reusable components

---

## 📂 Folder Structure

```bash
HealthMate/
│
├── index.html                 # Public landing page
├── login.php                  # Login form
├── register.php               # Register form
├── dashboard.php              # Main dashboard
├── health_log.php             # Health logging feature
├── doctor_locator.php         # Find nearby doctors (static/mock)
│
├── includes/
│   ├── navbar.php             # Common navigation bar
│   ├── footer.php             # Common footer
│   └── db_connect.php         # DB connection file
│
├── css/
│   └── style.css              # Custom styles
│
├── js/
│   └── validation.js          # JS form validation (optional)
│
├── register_backend.php       # PHP registration backend
├── login_backend.php          # PHP login backend
├── verify.php                 # Email verification script
├── assets/                    # Images, fonts, icons, etc.
│
└── database/
    └── healthmate.sql         # SQL for creating DB and tables


## 🧰 Technologies Used

- **Frontend**: HTML, CSS, JavaScript, Bootstrap 5, Chart.js
- **Backend**: PHP (vanilla)
- **Database**: MySQL
- **Extras**: PHPMailer, Google Maps API (optional), ML API (stub)

---

## 🚀 How to Run Locally

1. **Install XAMPP** from [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. Start **Apache** and **MySQL** from XAMPP Control Panel
3. Copy the `HealthMate` folder to: `C:/xampp/htdocs/`
4. Open browser and visit: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
5. Create database: `healthmate_db`
6. Import `database.sql` from the project folder
7. Open: [http://localhost/HealthMate/index.html](http://localhost/HealthMate/index.html)

---

## ✉️ Email Confirmation Setup

- Edit `email_confirmation/send_email.php`
```php
$mail->Host = 'smtp.yourmail.com';
$mail->Username = 'your_email@example.com';
$mail->Password = 'your_password';
```
- Use Gmail SMTP or your SMTP provider

---

## 🤖 Connect Your ML API

- Open `ml_api_predict.php`
- Replace the dummy API URL with your real hosted Flask/Node/Express ML service

---

## 🖼️ Screenshots

> Add screenshots of your UI here!

---

## 🌐 Hosting (Optional)

- You can host this for free on [000webhost](https://www.000webhost.com/), [InfinityFree](https://infinityfree.net/), or deploy via GitHub Pages (static only).

---

## 📄 License

MIT License – Free to use, modify, and share.

---

## 🙌 Contributing

Pull requests and forks are welcome. You can also reach out if you’d like to turn this into a more powerful AI health platform.

---

## ✨ Made with ❤️ by [Your Name]
