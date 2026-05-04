-- This file is executed automatically by MariaDB container on first startup
-- It ensures schema is created and optionally inserts initial data

-- Use database defined in docker-compose
USE pc_parts;

-- Optional seed data (minimal example for testing UI)

INSERT INTO parts (category, manufacturer, model, price) VALUES
('CPU', 'Intel', 'i5-12400F', 150.00),
('CPU', 'AMD', 'Ryzen 5 5600X', 180.00),
('GPU', 'NVIDIA', 'RTX 4060', 320.00),
('GPU', 'AMD', 'RX 7600', 290.00),
('RAM', 'Corsair', 'Vengeance 16GB DDR4', 75.00);