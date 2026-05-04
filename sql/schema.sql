-- Database schema for PC component price list

CREATE TABLE components (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100),
    manufacturer VARCHAR(100),
    model VARCHAR(150),
    price DECIMAL(10,2)
);