CREATE DATABASE electronics_shop;

USE electronics_shop;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO products (name, price, image) VALUES
('Laptop', 999.00, 'laptop.jpg'),
('Smartphone', 699.00, 'smartphone.jpg'),
('Headphones', 199.00, 'headphones.jpg');

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);
