
# 💊 HealthMate – AI-Based Personal Health Assistant

**HealthMate** is a full-stack web application that provides personal health assistance using AI-like logic and ML integration. It includes features like symptom checking, health log tracking with charts, email verification, and doctor locator—all with a modern Bootstrap UI.

---

## 🔥 Features

- ✅ User Registration with Email Confirmation (PHPMailer)
- 🔐 Secure Login System
- 📊 Health Tracking Dashboard with Chart.js
- 🧠 AI Symptom Checker (Stubbed ML API Integration)
- 📍 Find Nearby Doctors using Google Maps API *(optional)*
- 🎨 Stylish Responsive UI with Bootstrap 5

---

## 📁 Folder Structure

```
HealthMate/
├── css/                  # Custom stylesheets
├── js/                   # JS scripts
├── includes/             # PHP reusable components
├── email_confirmation/   # Email verification logic
├── health_log_chart.php  # Chart.js health visualizations
├── ml_api_predict.php    # ML API integration
├── register.php          # User registration
├── login.php             # User login
├── dashboard.php         # User dashboard
├── symptom_checker.php   # Symptom prediction
├── logout.php            # End session
├── index.html            # Landing page (Bootstrap)
└── database.sql          # MySQL database schema
```

---

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
