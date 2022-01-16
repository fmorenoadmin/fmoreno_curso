/*
	Este es el lenguaje de base de datos, Mysql, es un gestor de base de datos
	vamosa  crear un tabla para 4 datos
	--
	--Función de MySQL para crear tablas
*/
CREATE TABLE formularios_21(
	id_f21 INT PRIMARY KEY AUTO_INCREMENT,
	nombres VARCHAR(200) NOT NULL,
	apellidos VARCHAR(200) NOT NULL,
	telefono VARCHAR(15) NULL DEFAULT NULL,
	correo VARCHAR(180) NOT NULL,
	created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
	id_created INT NULL DEFAULT 1,
	updated_at DATETIME NULL DEFAULT NULL,
	id_updated INT NULL DEFAULT 0,
	drop_at DATETIME NULL DEFAULT NULL,
	id_drop INT NULL DEFAULT 0,
	status INT(1) NULL DEFAULT 1
);
/*
	--Función para insertar datos en la tabla
*/
INSERT INTO formularios_21 (nombres, apellidos, telefono, correo) VALUES
	('Frank Martin', 'Moreno Alburqueque', '+51924741703', 'admin@frankmorenoalburqueque.com'),
	('Marcelo Andre', 'Gutierrez Roque', '+5195654123', 'mgutierrezroq@gmail.com')
;
/*
	--Relación entra tablas
*/
CREATE TABLE tipo_productos(
	id_tp INT PRIMARY KEY AUTO_INCREMENT,
	nombres_tpro VARCHAR(200) NOT NULL,
	created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
	id_created INT NULL DEFAULT 1,
	updated_at DATETIME NULL DEFAULT NULL,
	id_updated INT NULL DEFAULT 0,
	drop_at DATETIME NULL DEFAULT NULL,
	id_drop INT NULL DEFAULT 0,
	status INT(1) NULL DEFAULT 1
);
INSERT INTO tipo_productos (nombres_tpro) VALUES 
	('Bebidas'),
	('Carnes'),
	('Condimentos'),
	('Frutas/Verduras'),
	('Granos/Cereales'),
	('Lacteos'),
	('Pescado/Mariscoa'),
	('Reposteria'),
	('Tecnologia'),
	('Ropa-Damas'),
	('Ropa-Caballeros'),
	('Ropa-Ninos')
;
CREATE TABLE unds_meds(
	id_um INT PRIMARY KEY AUTO_INCREMENT,
	nombres_um VARCHAR(200) NOT NULL,
	created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
	id_created INT NULL DEFAULT 1,
	updated_at DATETIME NULL DEFAULT NULL,
	id_updated INT NULL DEFAULT 0,
	drop_at DATETIME NULL DEFAULT NULL,
	id_drop INT NULL DEFAULT 0,
	status INT(1) NULL DEFAULT 1
);
INSERT INTO unds_meds (nombres_um) VALUES 
	('mg'),
	('ml'),
	('lt'),
	('kg'),
	('und'),
	('doc'),
	('cien'),
	('mil'),
	('pk'),
	('pack'),
	('six-pack'),
	('caja'),
	('cajon')
;
CREATE TABLE productos(
	id_pro INT PRIMARY KEY AUTO_INCREMENT,
	id_tp INT NOT NULL,
	id_um INT NOT NULL,
	nombre_pro VARCHAR(200) NOT NULL,
	marca_pro VARCHAR(100) NULL DEFAULT NULL,
	medida_pro DECIMAL(15) NOT NULL,
	precio_pro DECIMAL(15) NULL DEFAULT 0,
	stock_pro INT NULL DEFAULT 0,
	created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
	id_created INT NULL DEFAULT 1,
	updated_at DATETIME NULL DEFAULT NULL,
	id_updated INT NULL DEFAULT 0,
	drop_at DATETIME NULL DEFAULT NULL,
	id_drop INT NULL DEFAULT 0,
	status INT(1) NULL DEFAULT 1,
	FOREIGN KEY (id_tp) REFERENCES tipo_productos(id_tp),
	FOREIGN KEY (id_um) REFERENCES unds_meds(id_um)
);
/*
Cuando se quiere agregar mas de una FOREIGN KEY(FK) se utiliza la sentencia de MySql ALTER TABLE
---------------------------------------------
ALTER TABLE productos 
ADD CONSTRAINT constraint_fk_2 FOREIGN KEY (id_um) REFERENCES unds_meds(id_um);
*/

/*
	cuando queremos llamar a una o mas columnas de una tabla se utiliza la sentencia SELECT 
	estructura:
	SELECT
		parm1, parm2, ..... 
	FROM nombre_de_tabla
	WHERE //este es una clausula, condicionales, es opcional
		(created_at >= 'fecha_en_cuestion' AND created_at <= 'fecha_en_cuestion') OR
		id_tp=1 OR
		id_tp=2 AND
		id_um<>1 AND //en MySql no se peude usar || && solo AND y OR
		status=1
	;
*/
SELECT * FROM productos WHERE status <> 2;
-----------------------------------------------------------------------
SELECT id_tp, nombres_tpro FROM tipo_productos WHERE status = 1;
-----------------------------------------------------------------------
/*crea una clase llamda tipo_productos*/
	CREATE TABLE tipos_usuarios(
		id_tipo INT PRIMARY KEY AUTO_INCREMENT,
		nombre VARCHAR(500) NOT NULL,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1
	);
	CREATE TABLE empleados(
		id_emp INT PRIMARY KEY AUTO_INCREMENT,
		id_tipo INT NOT NULL,
		nombre VARCHAR(255) NULL DEFAULT NULL,
		correo VARCHAR(255) NULL DEFAULT NULL,
		telefono VARCHAR(15) NULL DEFAULT NULL,
		genero VARCHAR(25) NULL DEFAULT NULL,
		anio_nac INT(5) NULL DEFAULT NULL,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1,
		FOREIGN KEY (id_tipo) REFERENCES tipos_usuarios(id_tipo)
	);
	CREATE TABLE clientes(
		id_cli INT PRIMARY KEY AUTO_INCREMENT,
		nombre VARCHAR(255) NULL DEFAULT NULL,
		correo VARCHAR(255) NULL DEFAULT NULL,
		telefono VARCHAR(15) NULL DEFAULT NULL,
		genero VARCHAR(25) NULL DEFAULT NULL,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1
	);
	CREATE TABLE tipos_comprobantes(
		id_tc INT PRIMARY KEY AUTO_INCREMENT,
		nombre VARCHAR(500) NOT NULL,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1
	);
	/*
		(nombre de la columna),(tipodato),(su aprentesis dependiendo del tipo es la longitud),(null o no null si es o no vacio o obligatorio), (default que para indicar si va a lelvar un valor po defecto)
		(que valor por defecto que va a llevar)
	*/
	CREATE TABLE tipos_pagos(
		id_tpg INT PRIMARY KEY AUTO_INCREMENT,
		nombre VARCHAR(500) NOT NULL,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1
	);
	/*DROP TABLE pedidos; cuando quieras hacer un cambio y la tabal esta vacia, sino adios datos ya peustos*/
	DROP TABLE pedidos;
	CREATE TABLE pedidos(
		id_ped INT PRIMARY KEY AUTO_INCREMENT,
		id_cli INT NOT NULL,
		id_tc INT NOT NULL,
		id_tpg INT NOT NULL,
		serie VARCHAR(5) NOT NULL,
		numero VARCHAR(10) NOT NULL,
		fecha DATE NULL DEFAULT NULL,
		subtotal DECIMAL(15,2) NULL DEFAULT '0.00',
		igv DECIMAL(15,2) NULL DEFAULT '0.00',
		descu DECIMAL(15,2) NULL DEFAULT '0.00',
		total DECIMAL(15,2) NULL DEFAULT '0.00',
		obs TEXT NULL DEFAULT NULL,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1,
		FOREIGN KEY (id_tc) REFERENCES tipos_comprobantes(id_tc),
		FOREIGN KEY (id_cli) REFERENCES clientes(id_cli),
		FOREIGN KEY (id_created) REFERENCES empleados(id_emp),
		FOREIGN KEY (id_tpg) REFERENCES tipos_pagos(id_tpg)
	);
	DROP TABLE detalle_pedidos;
	CREATE TABLE detalle_pedidos(
		id_dtp INT PRIMARY KEY AUTO_INCREMENT,
		id_ped INT NOT NULL,
		id_pro INT NOT NULL,
		cantidad INT NULL DEFAULT NULL,
		precio_v DECIMAL(15,2) NULL DEFAULT '0.00',
		importe DECIMAL(15,2) NULL DEFAULT '0.00',
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1,
		FOREIGN KEY (id_ped) REFERENCES pedidos(id_ped),
		FOREIGN KEY (id_pro) REFERENCES productos(id_pro)
	);
	INSERT INTO `detalle_pedidos` (`id_ped`, `id_pro`, `cantidad`, `precio_v`, `importe`, `created_at`, `id_created`, `updated_at`, `id_updated`, `drop_at`, `id_drop`, `status`) VALUES 
		('1', '5', '2', '16.00', '32.00', current_timestamp(), '1', '2021-10-26 20:49:52.000000', '0', '2021-10-26 20:49:52.000000', '0', '1'),
		('1', '6', '1', '35.00', '35.00', current_timestamp(), '1', '2021-10-26 20:49:52.000000', '0', '2021-10-26 20:49:52.000000', '0', '1')
	;
	/*--------------------------------------------------------*/
	SELECT * FROM productos;
	SELECT id_pro, nombre_pro FROM productos;
	/*--------------------------------------------------------*/
	SELECT * FROM pedidos;
	SELECT * FROM pedidos WHERE id_created=3;
	SELECT * FROM pedidos WHERE id_created=4;
	SELECT * FROM pedidos WHERE id_created=3 AND status<>2;
	SELECT * FROM pedidos WHERE fecha LIKE '2021-10-25' AND status<>2;
	SELECT * FROM pedidos WHERE (fecha >= '2021-10-15' AND fecha <= '2021-10-25') AND status<>2;
	SELECT * FROM pedidos WHERE (fecha >= '2021-10-15' AND fecha <= '2021-12-01');
	/*--------------------------------------------------------*/
	SELECT * FROM empleados ORDER BY id_emp DESC;
	SELECT * FROM empleados WHERE genero LIKE 'F' ORDER BY id_emp DESC;
	SELECT * FROM empleados ORDER BY id_emp DESC LIMIT 2;
	/*--------------------------------------------------------*/
	SELECT * FROM actor WHERE first_name LIKE 'JOH%' ;
	SELECT * FROM actor WHERE first_name LIKE '%EN' ;
	SELECT * FROM actor WHERE last_name LIKE '%TR%' ;
	/*--------------------------------------------------------*/
	SELECT * FROM customer WHERE create_date <= '2006-03-10';
	/*--------------------------------------------------------*/
	SELECT 
		dtp.id_ped, dtp.id_pro, pro.nombre_pro, dtp.cantidad, pro.precio_pro AS precio_c, dtp.precio_v, dtp.importe 
	FROM detalle_pedidos dtp 
		INNER JOIN productos pro ON dtp.id_pro=pro.id_pro
	;
	/*--------------------------------------------------------*/
	SELECT
		p.id_ped, CONCAT(p.serie,'-',p.numero) AS codigo, p.id_created, emp.nombre
	FROM pedidos p
		INNER JOIN empleados emp ON p.id_created=emp.id_emp
	;
	/*--------------------------------------------------------*/
	SELECT 
		dtp.id_ped, CONCAT(p.serie,'-',p.numero) AS codigo, p.id_created, emp.nombre, dtp.id_pro, pro.nombre_pro, dtp.cantidad, pro.precio_pro AS precio_c, dtp.precio_v, dtp.importe 
	FROM detalle_pedidos dtp 
		INNER JOIN pedidos p ON dtp.id_ped=p.id_ped 
		INNER JOIN empleados emp ON p.id_created=emp.id_emp
		INNER JOIN productos pro ON dtp.id_pro=pro.id_pro
	;


	INSERT INTO `usuarios_j` VALUES ('1', 'vichaunter'); 
	INSERT INTO `usuarios_j` VALUES ('2', 'pepito'); 
	INSERT INTO `usuarios_j` VALUES ('3', 'jaimito'); 
	INSERT INTO `usuarios_j` VALUES ('4', 'ataulfo');


	SELECT 
		u.ID, u.username, j.ID, j.juegoname 
	FROM usuarios_j u
		INNER JOIN juegousuario ju ON u.ID = ju.ID_usuario 
		INNER JOIN juegos j ON ju.ID_juego = j.ID
	;
	SELECT 
		u.ID, u.username, j.ID, j.juegoname 
	FROM usuarios_j u
		LEFT JOIN juegousuario ju ON u.ID = ju.ID_usuario 
		LEFT JOIN juegos j ON ju.ID_juego = j.ID
	;
	SELECT 
		u.ID, u.username, j.ID, j.juegoname 
	FROM usuarios_j u
		RIGHT JOIN juegousuario ju ON u.ID = ju.ID_usuario 
		RIGHT JOIN juegos j ON ju.ID_juego = j.ID
	;
