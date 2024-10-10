INSERT INTO clientes (nombre, email, fecha_registro) 
VALUES ('Ana Torres', 'ana.torres@gmail.com', '2024-09-25'),
       ('Luis Martínez', 'luis.martinez@gmail.com', '2024-09-10'),
       ('Diego Ramírez', 'diego.ramirez@gmail.com', CURDATE()),
       ('Sofía López', 'sofia.lopez@gmail.com', '2024-10-05');

SELECT * FROM clientes WHERE fecha_registro >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
ORDER BY fecha_registro DESC;
