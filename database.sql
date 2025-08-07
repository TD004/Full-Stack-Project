CREATE DATABASE IF NOT EXISTS healthmate_db;
USE healthmate_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE health_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    water_intake INT,
    sleep_hours FLOAT,
    mood VARCHAR(50),
    log_date DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

ALTER TABLE users ADD COLUMN token VARCHAR(255), ADD COLUMN verified BOOLEAN DEFAULT 0;
