Algoritmo Area_y_volumen_de_un_cilindro
	//definición de variables
	p_i <- 3.141516;
	Escribir "-----------------------------------------------";
	Escribir "Programa para hayar el area y el vomumen de un cilindro";
	Escribir "-----------------------------------------------";
	Escribir "Ingresa el valor del radio";
	Escribir "-----------------------------------------------";
	Leer radio;
	Escribir "-----------------------------------------------";
	Escribir "Ingresa el valor de la altura";
	Escribir "-----------------------------------------------";
	Leer altura;
	
	area <- 2* p_i*radio*(altura + radio);
	volumen <- p_i*(radio*radio)*altura;
	
	Escribir "El área del cilindro es de " area;
	Escribir "-----------------------------------------------";
	Escribir "El volumen del cilindro es de " volumen;
	Escribir "-----------------------------------------------";

	
FinAlgoritmo
