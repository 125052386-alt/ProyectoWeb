DROP DATABASE IF EXISTS weirdo_comics;
//Creacion de la base de datos
CREATE DATABASE weirdo_comics CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE weirdo_comics;

// Creacion de tablas

CREATE TABLE roles_permisos (
    id_rol INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(200)
);

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    contrasena VARCHAR(100) NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'Inactivo',
    id_rol INT NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES roles_permisos(id_rol)
);

CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(200),
    tipo VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'Disponible'
);

CREATE TABLE comics (
    id_comic INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT NOT NULL,
    editorial VARCHAR(100),
    autor VARCHAR(100),
    edicion VARCHAR(50),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE articulos (
    id_articulo INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT NOT NULL,
    tipo VARCHAR(50),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE inventario (
    id_inventario INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT NOT NULL UNIQUE,
    cantidad INT NOT NULL DEFAULT 0,
    stock_minimo INT NOT NULL DEFAULT 5,
    CONSTRAINT chk_cantidad_no_negativa CHECK (cantidad >= 0),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE proveedores (
    id_proveedor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    contacto VARCHAR(100),
    telefono VARCHAR(20),
    correo VARCHAR(100)
);

CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_proveedor INT NOT NULL,
    fecha DATE NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'Pendiente',
    FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor)
);

CREATE TABLE detalle_pedido (
    id_detalle_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE ventas (
    id_venta INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    fecha DATE NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

CREATE TABLE detalle_venta (
    id_detalle_venta INT AUTO_INCREMENT PRIMARY KEY,
    id_venta INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE ticket (
    id_ticket INT AUTO_INCREMENT PRIMARY KEY,
    id_venta INT NOT NULL UNIQUE,
    folio VARCHAR(50) NOT NULL,
    fecha_emision DATE NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta)
);

CREATE TABLE reportes (
    id_reporte INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    fecha_generacion DATE NOT NULL,
    descripcion VARCHAR(200)
);

//Insertar datos de prueba
INSERT INTO roles_permisos (nombre, descripcion) VALUES
('Administrador', 'Acceso total a productos, inventario, proveedores, pedidos, reportes y usuarios'),
('Vendedor', 'Consulta de productos e inventario, registro de ventas y generacion de tickets'),
('Supervisor', 'Consulta de reportes y ventas sin permisos de modificacion');

INSERT INTO usuarios (nombre, correo, contrasena, estado, id_rol) VALUES
('Ana García', 'ana.garcia@weirdocomics.com', SHA2('admin123', 256), 'Activo', 1),
('Carlos Mendoza', 'carlos.mendoza@weirdocomics.com', SHA2('vendedor123', 256), 'Activo', 2),
('Karen Hernández', 'karen.hernandez@weirdocomics.com', SHA2('vendedor456', 256), 'Activo', 2),
('Gael Sánchez', 'gael.sanchez@weirdocomics.com', SHA2('vendedor789', 256), 'Inactivo', 2);

INSERT INTO productos (nombre, descripcion, tipo, precio, estado) VALUES
('Spider-Man: Blue', 'Historia clasica de Peter Parker en tapa blanda', 'Cómic', 449.00, 'Disponible'),
('Batman: The Long Halloween', 'Misterio de Batman en la ciudad de Gotham', 'Cómic', 599.00, 'Disponible'),
('Saga Vol. 1', 'Primer volumen de la serie de ciencia ficcion', 'Cómic', 329.00, 'Disponible'),
('Chainsaw Man Vol. 12', 'Volumen 12 del manga de Tatsuki Fujimoto', 'Cómic', 189.00, 'Disponible'),
('Watchmen - Edición Deluxe', 'Edicion de lujo con pasta dura', 'Cómic', 899.00, 'Disponible'),
('Daredevil: Born Again', 'Arco clasico de Daredevil', 'Cómic', 479.00, 'No disponible'),
('Funko Pop Spider-Man', 'Figura coleccionable de vinil de 10 cm', 'Artículo', 349.00, 'Disponible'),
('Playera Weirdo Comics', 'Playera de algodon con logo de la tienda', 'Artículo', 259.00, 'Disponible');

INSERT INTO comics (id_producto, editorial, autor, edicion) VALUES
(1, 'Marvel', 'Jeph Loeb', 'Primera edicion'),
(2, 'DC Comics', 'Jeph Loeb', 'Edicion 2'),
(3, 'Image Comics', 'Brian K. Vaughan', 'Volumen 1'),
(4, 'Shueisha', 'Tatsuki Fujimoto', 'Numero 12'),
(5, 'DC Comics', 'Alan Moore', 'Deluxe'),
(6, 'Marvel', 'Frank Miller', 'Edicion 3');

INSERT INTO articulos (id_producto, tipo) VALUES
(7, 'Figura coleccionable'),
(8, 'Ropa');

INSERT INTO inventario (id_producto, cantidad, stock_minimo) VALUES
(1, 12, 5),
(2, 8, 5),
(3, 3, 5),
(4, 21, 5),
(5, 2, 5),
(6, 0, 5),
(7, 15, 4),
(8, 10, 4);

INSERT INTO proveedores (nombre, contacto, telefono, correo) VALUES
('Diamond Comic Dist.', 'John Miller', '+1 410 555 0148', 'contact@diamondcomics.com'),
('Panini México', 'Laura Ramírez', '442 555 0192', 'ventas@panini.com.mx'),
('Distribuidora Geek MX', 'Pedro Vázquez', '442 555 0177', 'pedidos@geekmx.com');

INSERT INTO pedidos (id_proveedor, fecha, total, estado) VALUES
(1, '2026-09-22', 18420.00, 'En tránsito'),
(2, '2026-09-28', 5670.00, 'Pendiente'),
(3, '2026-09-15', 4450.00, 'Recibido');

INSERT INTO detalle_pedido (id_pedido, id_producto, cantidad, precio_unitario, subtotal) VALUES
(1, 1, 20, 449.00, 8980.00),
(1, 2, 16, 599.00, 9584.00),
(2, 4, 30, 189.00, 5670.00),
(3, 7, 10, 349.00, 3490.00),
(3, 8, 5, 259.00, 1295.00);

INSERT INTO ventas (id_usuario, fecha, total) VALUES
(1, '2026-10-03', 1227.00),
(2, '2026-10-03', 599.00),
(3, '2026-10-04', 567.00);

INSERT INTO detalle_venta (id_venta, id_producto, cantidad, precio_unitario, subtotal) VALUES
(1, 1, 2, 449.00, 898.00),
(1, 3, 1, 329.00, 329.00),
(2, 2, 1, 599.00, 599.00),
(3, 4, 3, 189.00, 567.00);

INSERT INTO ticket (id_venta, folio, fecha_emision) VALUES
(1, 'V-1049', '2026-10-03'),
(2, 'V-1050', '2026-10-03'),
(3, 'V-1051', '2026-10-04');

INSERT INTO reportes (tipo, fecha_generacion, descripcion) VALUES
('Ventas', '2026-10-04', 'Reporte de ventas realizadas del 3 al 4 de octubre'),
('Inventario', '2026-10-04', 'Existencias actuales y productos con bajo stock'),
('Pedidos', '2026-10-04', 'Pedidos a proveedores y su estado actual');

//Consultas Simples

SELECT id_producto, nombre, tipo, precio
FROM productos
WHERE precio > 400
ORDER BY precio DESC;

SELECT id_inventario, id_producto, cantidad, stock_minimo
FROM inventario
WHERE cantidad <= stock_minimo;

SELECT id_usuario, nombre, correo, estado
FROM usuarios
WHERE estado = 'Activo'
ORDER BY nombre;

//Consultas con inner join

SELECT u.nombre AS usuario, u.correo, u.estado, r.nombre AS rol
FROM usuarios u
INNER JOIN roles_permisos r ON u.id_rol = r.id_rol
ORDER BY r.nombre, u.nombre;

SELECT p.nombre AS producto, p.tipo, p.precio, i.cantidad, i.stock_minimo
FROM productos p
INNER JOIN inventario i ON p.id_producto = i.id_producto
WHERE i.cantidad <= i.stock_minimo
ORDER BY i.cantidad;

SELECT t.folio, v.fecha, u.nombre AS vendedor, p.nombre AS producto,
       dv.cantidad, dv.precio_unitario, dv.subtotal
FROM ventas v
INNER JOIN usuarios u ON v.id_usuario = u.id_usuario
INNER JOIN detalle_venta dv ON v.id_venta = dv.id_venta
INNER JOIN productos p ON dv.id_producto = p.id_producto
INNER JOIN ticket t ON v.id_venta = t.id_venta
ORDER BY v.fecha, t.folio;

//Procedimientos Almacenados

DELIMITER $$

CREATE PROCEDURE sp_registrar_venta(
    IN p_id_usuario INT,
    IN p_id_producto INT,
    IN p_cantidad INT
)
BEGIN
    DECLARE v_precio DECIMAL(10,2) DEFAULT NULL;
    DECLARE v_stock INT DEFAULT NULL;
    DECLARE v_total DECIMAL(10,2);
    DECLARE v_id_venta INT;
    DECLARE v_folio VARCHAR(50);

    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    IF p_cantidad IS NULL OR p_cantidad <= 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'La cantidad debe ser mayor a cero';
    END IF;

    SELECT precio INTO v_precio
    FROM productos
    WHERE id_producto = p_id_producto AND estado = 'Disponible';

    SELECT cantidad INTO v_stock
    FROM inventario
    WHERE id_producto = p_id_producto
    FOR UPDATE;

    IF v_precio IS NULL THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El producto no existe o no esta disponible';
    END IF;

    IF v_stock IS NULL OR v_stock < p_cantidad THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Existencias insuficientes para la venta';
    END IF;

    SET v_total = v_precio * p_cantidad;

    INSERT INTO ventas (id_usuario, fecha, total)
    VALUES (p_id_usuario, CURDATE(), v_total);

    SET v_id_venta = LAST_INSERT_ID();

    INSERT INTO detalle_venta (id_venta, id_producto, cantidad, precio_unitario, subtotal)
    VALUES (v_id_venta, p_id_producto, p_cantidad, v_precio, v_total);

    UPDATE inventario
    SET cantidad = cantidad - p_cantidad
    WHERE id_producto = p_id_producto;

    SET v_folio = CONCAT('V-', LPAD(v_id_venta + 1000, 4, '0'));

    INSERT INTO ticket (id_venta, folio, fecha_emision)
    VALUES (v_id_venta, v_folio, CURDATE());

    COMMIT;

    SELECT v_id_venta AS id_venta, v_folio AS folio, v_total AS total;
END$$

CREATE PROCEDURE sp_recibir_pedido(
    IN p_id_pedido INT
)
BEGIN
    DECLARE v_estado VARCHAR(20) DEFAULT NULL;

    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    SELECT estado INTO v_estado
    FROM pedidos
    WHERE id_pedido = p_id_pedido
    FOR UPDATE;

    IF v_estado IS NULL THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El pedido no existe';
    END IF;

    IF v_estado = 'Recibido' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El pedido ya fue recibido';
    END IF;

    IF v_estado = 'Cancelado' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'No se puede recibir un pedido cancelado';
    END IF;

    UPDATE inventario i
    INNER JOIN detalle_pedido d ON i.id_producto = d.id_producto
    SET i.cantidad = i.cantidad + d.cantidad
    WHERE d.id_pedido = p_id_pedido;

    UPDATE pedidos
    SET estado = 'Recibido'
    WHERE id_pedido = p_id_pedido;

    COMMIT;

    SELECT p_id_pedido AS id_pedido, 'Recibido' AS estado;
END$$

DELIMITER ;

CALL sp_registrar_venta(2, 4, 2);
CALL sp_recibir_pedido(2);