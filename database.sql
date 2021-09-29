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