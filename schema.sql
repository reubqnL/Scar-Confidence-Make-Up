CREATE DATABASE IF NOT EXISTS scar_confidence;

USE scar_confidence;

CREATE TABLE IF NOT EXISTS contact_submissions
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    name         VARCHAR(100) NOT NULL,
    email        VARCHAR(100) NOT NULL,
    message      TEXT         NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

/* the query I sent to create our database */