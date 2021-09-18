Algoritmo sacando_multiples_opéraciones_con_2_numeros
	//Definir las variables que usaremos en el problema propuesto
	Definir n1, n2, suma, resta, multiplicacion Como Entero;
	Definir division Como Real;
	
	//Solicitar los valores de variables que no se conozcan
	Escribir "-----------------------------------------------";
	Escribir  "Programa para sacar la multiples operaciones con 2 numeros";
	Escribir "-----------------------------------------------";
	Escribir " Ingrese el n1";
	Escribir "-----------------------------------------------";
	Leer n1;
	Escribir "-----------------------------------------------";
	Escribir "Ingrese el n2";
	Escribir "-----------------------------------------------";
	Leer n2;
	Escribir "-----------------------------------------------";
	
	//Realizar Operación
	suma <- n1 + n2;
	
	resta <- n1 - n2;
	
	division <- n1 / n2;
	
	multiplicacion <- n1 * n2;
	
	//Mostramos los REsultados
	Escribir "El resultado de la suma fue " suma ;
	Escribir "El resultado de la resta fue " resta ;
	Escribir "El resultado de la multiplicacion es " multiplicacion;
	Escribir "El resultado de la division es " division;
FinAlgoritmo
