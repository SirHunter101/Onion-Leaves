
CREATE DATABASE IF NOT EXISTS onion_disease_db;
USE onion_disease_db;

CREATE TABLE IF NOT EXISTS history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image TEXT,
    disease VARCHAR(100),
    confidence FLOAT,
    description TEXT,
    prescription TEXT,
    mitigation TEXT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);
