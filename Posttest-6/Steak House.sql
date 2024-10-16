CREATE DATABASE steak_house;

USE steak_house;

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    order_details TEXT NOT NULL
);
