-- Database schema for PC parts price list

CREATE TABLE parts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100),
    manufacturer VARCHAR(100),
    model VARCHAR(150),
    price DECIMAL(10,2)
);