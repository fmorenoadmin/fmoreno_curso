<?php
	/*
		Mysql es uno de los sistemas de base de datos mas popular cuando se desarrollan sistemas y/o aplicaciones con php.
		---
		Que es MySQL:
		*	es un sistema de base de datos que se utiliza en la web 
		*   es un sistema de base de datos que se ejecuta en un servidor 
		*	es ideal para aplicaciones grandes y pequeñas
		*	es muy rapido, confiable y facil de usar
		*	usa sql estandar para su sintaxis 
		*	se compila en varias plataformas 
		*	se puede descargar y usar gratis
		*	esta desarrollado, distribuido y respaldado por la empresa oracle corporation
		*	Lleva el nombre de la hija del cofundador Monty Widenius: My
		--
		Los datos en una base de datos Mysql se almacenan en tablas(una tabla es una coleccion de datos relacionados y cuenta con columnas y filas)
		Las bases de datos son muy utiles para almacenar informacion de forma categorica ejpl:

			*	tipos_usuarios
				-	id_tipo (PK - primary key)-----------------------
				-	nombre_tipo										|N - muchos (muchos tipos de usuarios pueden ser usados por los empleados)
			*	empleados											|Relación
				-	id_emp (PK - primary key)						|1 (un Empleado solo puede tener un tipo de usuario)
				-	id_tipo (FK - foreign key)-----------------------
				-	nombre
				-	correo
				-	telefono
				-	genero
				-	anio_nac (anio_ac - anio_nac)
			*	tipo_productos
				-	id_tp (PK - primary key)-------------------------
				-	nombre_tipo										|N - muchos (muchos tipos de usuarios pueden ser usados por los empleados)
			*	productos											|Relación
				-	id_prod (PK - primary key)						|1 (un Empleado solo puede tener un tipo de usuario)
				-	id_tp (FK - foreign key)-------------------------
				-	nombre
				-	medida
				-	precio
				-	stock
				-	marca
			*	clientes
				-	id_cli
				-	nombres
				-	correo
				-	telefono
				-	genero
			*	tipos_comprobantes
				-	id_tc
				-	nombre
			*	pedidos
				-	id_ped
				-	id_cli
				-	id_tc
				-	serie
				-	num
				-	fecha
				-	subtotal
				-	igv
				-	descu
				-	total
				-	obs
				-	id_created
			*	detalle_pedido
				-	id_dtp
				-	id_ped
				-	id_prod (n)
				-	cantidad
				-	precio
				-	importe

	--tipos_usuarios
		1||administrador
		2||vendedor
	--empleados
		1||1||jose
		2||1||carlos
		3||2||manuel
	--empleados
		1||fabian
		2||sara

	--pedidos
		1||1||1||00001||000000001||0.00||0.00||0.00||0.00||<p>El cliente está llevando productos de calidad</p>||3 -----1registro
	--detalle_pedidos
		1||1||5||2||15.00||30.00 ------Varios productos del
		2||1||6||1||30.00||30.00 ------mismo pedido

	*/