<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SuperGlobals</title>
</head>
<body>
	<?php
		//Las variables super globas fueron introdugidas a php desde la version 4.1.0 y son variables que siempre estan disponibles en todos lo ambitos:
		/*
			$GLOBALES
			$_SERVER :  estas variables super globales contienen la informacion del entorno del servidor y de ejecucion. es un array que contiene informacion, tales como cabezeras, rutas y ubicaciones de script. Las entradas de este arreglo son creadas por el servidor web 
		*/
		$indicesServer = array(
			'PHP_SELF',//esta key devuelve el nombre del archivo de script ejecutandose actualmente, relativa al directorio o raiz de documentos del servidor, agarra todo lo que esat dps del dominio
			'argv',//esta key devuelve una arreglo con los argumentos enviados al script 
			'argc',//esta key contiene el numero de parametros de linea de comando enviados a el script 
			'GATEWAY_INTERFACE',//Esta key devuelve el numero de revision de la especificacion CGI(interfas de la puerta de enlace) que esta empleando el servidor por ejemplo CGI/1.0 
			'SERVER_ADDR',//esta key devuelve la direccion ip del servidor donde se esta ejecutando el archivo, ejemplo el del lo
			'SERVER_NAME',//esta key devuelve el nombre de dominio del servidor
			'SERVER_SOFTWARE',//esta key devuelve el nombre del servidor, el nombre del sistema operativo, la version del opingSSl y la version de PHP ejecutandose en el servidor
			'SERVER_PROTOCOL',//esta key devuelve el protocolo utilizado, puede ser HTTP o HTTPS
			'REQUEST_METHOD',//esta key devuelve el metodo que se esta usando para la solicitud estas pueden ser POST, GET, REQUEST, PUT, entre otros
			'REQUEST_TIME',//esta key devuelve el tiempo que a tardado la solicitud 
			'REQUEST_TIME_FLOAT',//lo mismo pero en decimales
			'QUERY_STRING',//esta key devuelve la cadena de la consulta, de la peticion de la pagina si es que exite 
			'DOCUMENT_ROOT',// esta key devuelve la ruta donde se almacena los archivos del servidor
			'HTTP_ACCEPT',//esta key devuelve el contenido de la cabezera ACCEPT de la peticion actual si es que existe 
			'HTTP_ACCEPT_CHARSET',//parecido a lo de arriba pero en un distinto tipo de codificaion
			'HTTP_ACCEPT_ENCODING',
			'HTTP_ACCEPT_LANGUAGE',
			'HTTP_CONNECTION',
			'HTTP_HOST',
			'HTTP_REFERER',
			'HTTP_USER_AGENT',
			'HTTPS',
			'REMOTE_ADDR',
			'REMOTE_HOST',
			'REMOTE_PORT',
			'REMOTE_USER',
			'REDIRECT_REMOTE_USER',
			'SCRIPT_FILENAME',
			'SERVER_ADMIN',
			'SERVER_PORT',
			'SERVER_SIGNATURE',
			'PATH_TRANSLATED',
			'SCRIPT_NAME',
			'REQUEST_URI',
			'PHP_AUTH_DIGEST',
			'PHP_AUTH_USER',
			'PHP_AUTH_PW',
			'AUTH_TYPE',
			'PATH_INFO',
			'ORIG_PATH_INFO'
		);
		echo '<table cellpadding="10">' ;
		foreach ($indicesServer as $arg) {
		    if (isset($_SERVER[$arg])) {
		        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
		    }
		    else {
		        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
		    }
		}
		echo '</table>';
	?>
	<table class="ws-table-all notranslate">
		<tbody><tr>
		<th style="width:35%">Element/Code</th>
		<th style="width:65%">Description</th>
		</tr>
		<tr>
		<td>$_SERVER['PHP_SELF']</td>
		<td>Returns the filename of the currently executing script</td>
		</tr>
		<tr>
		<td>$_SERVER['GATEWAY_INTERFACE']</td>
		<td>Returns the version of the Common Gateway Interface (CGI) the server is 
		using</td>
		</tr>
		<tr>
		<td>$_SERVER['SERVER_ADDR']</td>
		<td>Returns the IP address of the host server</td>
		</tr>
		<tr>
		<td>$_SERVER['SERVER_NAME']</td>
		<td>Returns the name of the host server (such as www.w3schools.com)</td>
		</tr>
		<tr>
		<td>$_SERVER['SERVER_SOFTWARE']</td>
		<td>Returns the server identification string (such as Apache/2.2.24)</td>
		</tr>
		<tr>
		<td>$_SERVER['SERVER_PROTOCOL']</td>
		<td>Returns the name and revision of the information protocol (such as HTTP/1.1)</td>
		</tr>
		<tr>
		<td>$_SERVER['REQUEST_METHOD']</td>
		<td>Returns the request method used to access the page (such as POST)</td>
		</tr>
		<tr>
		<td>$_SERVER['REQUEST_TIME']</td>
		<td>Returns the timestamp of the start of the request (such as 1377687496)</td>
		</tr>
		<tr>
		<td>$_SERVER['QUERY_STRING']</td>
		<td>Returns the query string if the page is accessed via a query string</td>
		</tr>
		<tr>
		<td>$_SERVER['HTTP_ACCEPT']</td>
		<td>Returns the Accept header from the current request </td>
		</tr>
		<tr>
		<td>$_SERVER['HTTP_ACCEPT_CHARSET']</td>
		<td>Returns the Accept_Charset header from the current request (such as 
		utf-8,ISO-8859-1)</td>
		</tr>
		<tr>
		<td>$_SERVER['HTTP_HOST']</td>
		<td>Returns the Host header from the current request </td>
		</tr>
		<tr>
		<td>$_SERVER['HTTP_REFERER']</td>
		<td>Returns the complete URL of the current page (not reliable because not all 
		user-agents support it)</td>
		</tr>
		<tr>
		<td>$_SERVER['HTTPS']</td>
		<td>Is the script queried through a secure HTTP protocol</td>
		</tr>
		<tr>
		<td>$_SERVER['REMOTE_ADDR']</td>
		<td>Returns the IP address from where the user is viewing the current page</td>
		</tr>
		<tr>
		<td>$_SERVER['REMOTE_HOST']</td>
		<td>Returns the Host name from where the user is viewing the current page</td>
		</tr>
		<tr>
		<td>$_SERVER['REMOTE_PORT']</td>
		<td>Returns the port being used on the user's machine to communicate with the 
		web server</td>
		</tr>
		<tr>
		<td>$_SERVER['SCRIPT_FILENAME']</td>
		<td>Returns the absolute pathname of the currently executing script</td>
		</tr>
		<tr>
		<td>$_SERVER['SERVER_ADMIN']</td>
		<td>Returns the value given to the SERVER_ADMIN directive in the web server 
		configuration file (if your script runs on a virtual host, it will be the value 
		defined for that virtual host) (such as someone@w3schools.com)</td>
		</tr>
		<tr>
		<td>$_SERVER['SERVER_PORT']</td>
		<td>Returns the port on the server machine being used by the web server for 
		communication (such as 80)</td>
		</tr>
		<tr>
		<td>$_SERVER['SERVER_SIGNATURE']</td>
		<td>Returns the server version and virtual host name which are added to 
		server-generated pages</td>
		</tr>
		<tr>
		<td>$_SERVER['PATH_TRANSLATED']</td>
		<td>Returns the file system based path to the current script</td>
		</tr>
		<tr>
		<td>$_SERVER['SCRIPT_NAME']</td>
		<td>Returns the path of the current script</td>
		</tr>
		<tr>
		<td>$_SERVER['SCRIPT_URI']</td>
		<td>Returns the URI of the current page</td>
		</tr>
		</tbody>
	</table>
	<?php
		/*
			$_REQUEST	/cusro_fmoreno/php/18-variables-super-globals.php?a=4&b=12&b=12&b=12&b=12&b=12&b=12&b=12
			$_POST 		/cusro_fmoreno/php/18-variables-super-globals.php
			$_GET		/cusro_fmoreno/php/18-variables-super-globals.php?a=4&b=12&b=12&b=12&b=12&b=12&b=12&b=12
			$_SESSION	Son un arreglo(array). que guardan información de manera temporal(mientras que el usuario este activo en la página o sistema).
			$_SESSION["user"] = 'nombre de usuario';
			------------------------------------------------------------
			Para que tu puedas utilizar sesiones en una página web.
			Necesitas invocar a la función de PHP: session_start();
			//session start - inicia las sesiones en esta vista.
			**para poder colocarla correctamente session_start() debe ser colocada siempre en la segunda linea de tu código
			------------------------------------------------------------
		*/
	?>
</body>
</html>