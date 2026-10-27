CREATE DATABASE IF NOT EXISTS scar_confidence CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE scar_confidence;

CREATE TABLE IF NOT EXISTS contact_submissions
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    fname        VARCHAR(100) NOT NULL,
    lname        VARCHAR(100) NOT NULL,
    email        VARCHAR(100) NOT NULL,
    tel          VARCHAR(100) NOT NULL,
    message      TEXT         NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

/* the query I sent to create our database */

CREATE TABLE IF NOT EXISTS companies
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(200) NOT NULL,
    address VARCHAR(500) NOT NULL,
    primary_name VARCHAR(100) NULL,
    primary_email VARCHAR(100) NULL,
    primary_phone VARCHAR(100) NULL,
    secondary_name VARCHAR(100) NULL,
    secondary_email VARCHAR(100) NULL,
    secondary_phone VARCHAR(100) NULL
);
