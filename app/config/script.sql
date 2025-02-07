CREATE DATABASE veillehub;
USE veillehub;

-- Table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('étudiant', 'enseignant') NOT NULL,
    statut ENUM('en attente', 'approuvé', 'rejeté') DEFAULT 'en attente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des sujets
CREATE TABLE topics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    statut ENUM('en attente', 'approuvé', 'rejeté') DEFAULT 'en attente',
    student_id INT,
    date_soumission TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Table des présentations
CREATE TABLE presentations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    topic_id INT NOT NULL,
    date DATETIME NOT NULL,
    statut ENUM('à venir', 'effectuée') DEFAULT 'à venir',
    FOREIGN KEY (topic_id) REFERENCES topics(id) ON DELETE CASCADE
);


