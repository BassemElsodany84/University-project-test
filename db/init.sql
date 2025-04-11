-- Create schema
DROP DATABASE IF EXISTS taazur;
CREATE DATABASE taazur CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE taazur;

-- USERS TABLE
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('doctor', 'patient') NOT NULL,
    active BOOLEAN NOT NULL DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- DOCTORS TABLE
CREATE TABLE doctors (
    user_id INT PRIMARY KEY,
    license_number VARCHAR(100),
    medical_degree VARCHAR(100),
    verification_file VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- PATIENTS TABLE
CREATE TABLE patients (
    user_id INT PRIMARY KEY,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- CASES TABLE
CREATE TABLE cases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    doctor_id INT NOT NULL,
    title VARCHAR(255),
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (doctor_id) REFERENCES users(id) ON DELETE CASCADE
);

-- CASE IMAGES TABLE
CREATE TABLE case_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    case_id INT,
    image_url VARCHAR(255),
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (case_id) REFERENCES cases(id) ON DELETE CASCADE
);

-- CONTENT TABLE
CREATE TABLE content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_key VARCHAR(50) UNIQUE,
    title VARCHAR(255),
    body TEXT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert sample users
INSERT INTO users (first_name, last_name, email, password, role, active) VALUES
('Ayman', 'Salem', 'ayman@example.com', 'hashedpass1', 'doctor', FALSE),
('Sara', 'Patient', 'sara@example.com', 'hashedpass2', 'patient', TRUE);

-- Insert doctor info
INSERT INTO doctors (user_id, license_number, medical_degree, verification_file)
VALUES (1, 'DOC123', 'MD', 'uploads/ids/doc123.png');

-- Insert patient info
INSERT INTO patients (user_id) VALUES (2);

-- Insert sample cases
INSERT INTO cases (doctor_id, title, description) VALUES
(1, 'Child Flu', 'Treated with rest and hydration.'),
(1, 'Burn Case', 'Second-degree burn on left hand.');

-- Insert case images
INSERT INTO case_images (case_id, image_url) VALUES
(1, 'imgs/flu_case1.jpg'),
(2, 'imgs/burn_case1.jpg');

-- Insert dynamic content
INSERT INTO content (page_key, title, body) VALUES
('home', 'Welcome to Taazur', 'Your health, our priority.'),
('about', 'About Us', 'We are a caring team of professionals.');