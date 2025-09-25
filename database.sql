CREATE DATABASE IF NOT EXISTS myproject_db;
USE myproject_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (name, email) VALUES
('Sharmin', 'sharmin@example.com'),
('Ovi', 'ovi@example.com');
