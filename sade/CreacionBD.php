<?php

$enlace =  mysql_connect('localhost', 'grupo6', 'face2014');

if (!$enlace) {
    die('No pudo conectarse al servidor de base de datos: ' . mysql_error());
}
echo 'Conectado satisfactoriamente al servidor de base de datos';
echo"<br>";

$coneccionBase=mysql_select_db('SADE',$enlace);


if (!$coneccionBase) {
    die('No pudo conectarse a la base de datos: ' . mysql_error());
}
echo 'Conectado satisfactoriamente a la base de datos';
echo"<br>";

 // ya con nuestra base de datos creada podemos empezar a crear nuestras tablas

 $tabla = 'alter table sueldoPersona drop spHorasExtras';
 $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 8 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 8 se creo correctamente';
					 echo"<br>";
/*
$tabla="CREATE TABLE reservaEspacioComun (
	ecCodigo VARCHAR (30) NOT NULL,
	reFechaInicio DATETIME NOT NULL,
	reFechaFin DATETIME NULL,
	adRut VARCHAR (13) NOT NULL,
	CONSTRAINT pkREC PRIMARY KEY(ecCodigo, reFechaInicio),
	CONSTRAINT fkREC1 FOREIGN KEY  (ecCodigo) REFERENCES espacioComun(ecCodigo),
	CONSTRAINT fkREC2 FOREIGN KEY  (adRut) REFERENCES arrendatarioDueno(adRut),
	CONSTRAINT checkREC1 CHECK (reFechaInicio < reFechaFin)
)";
            
             $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 8 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 8 se creo correctamente';
					 echo"<br>";
}
/////////////////////////////////////////////////////////////////////////
$tabla="CREATE TABLE pagoMensual (
	pmCodigo SERIAL,
	dlDireccion VARCHAR(100) NULL,
	pmFechaPago DATE NULL,
	pmMonto INTEGER NULL,
	pmObs VARCHAR(100) NULL,
	pmFechaRealPago DATE NULL,
	CONSTRAINT pkPagoMensual PRIMARY KEY (dlDireccion, pmFechaPago),
	CONSTRAINT kfPagoMensual FOREIGN KEY (dlDireccion) REFERENCES dptoLocal (dlDireccion)
)";
            
             $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 9 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 9 se creo correctamente';
					 echo"<br>";
}
////////////////////////////////////////////////////////////////////////
$tabla="CREATE TABLE resideDpto (
	adRut VARCHAR (13) NOT NULL,
	dlDireccion VARCHAR (100) NOT NULL,
	fechaInicio DATE NOT NULL,
	fechaFin DATE NULL,
	CONSTRAINT pkResideDpto PRIMARY KEY (adRut, dlDireccion, fechaInicio),
	CONSTRAINT fkResideDpto1 FOREIGN KEY (dlDireccion) REFERENCES dptoLocal (dlDireccion),
	CONSTRAINT fkResideDpto2 FOREIGN KEY (adRut) REFERENCES arrendatarioDueno (adRut)
)";
            
             $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 10 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 10 se creo correctamente';
					 echo"<br>";
}


////////////////////////////////////////////////////////////
$tabla="CREATE TABLE visitaDpto (
	viRut VARCHAR (13) NOT NULL,
	dlDireccion VARCHAR(100) NULL,
	vdFechaIngreso DATETIME NULL,
	caRut VARCHAR (13) NOT NULL,
	vdFechaSalida DATETIME NULL,
	CONSTRAINT pkVisitaDpto PRIMARY KEY(viRut, vdFechaIngreso),
	CONSTRAINT fkVisitaDpto1 FOREIGN KEY (viRut) REFERENCES visita (viRut),
	CONSTRAINT fkVisitaDpto2 FOREIGN KEY (dlDireccion) REFERENCES dptoLocal(dlDireccion),
	CONSTRAINT fkVisitaDpto3 FOREIGN KEY (caRut) REFERENCES conserjeAdministrador (caRut),
	CONSTRAINT checkVD1 CHECK (vdFechaingreso < vdFechaSalida)
)";
            
             $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 11 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 11 se creo correctamente';
					 echo"<br>";
}
//////////////////////////////////////////////////////////////
$tabla="CREATE TABLE codigo (
	coCodigo INTEGER NOT NULL,
	coNombre VARCHAR(20) NULL,
	CONSTRAINT pkCodigo PRIMARY KEY (coCodigo)
)";
            
             $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 12 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 12 se creo correctamente';
					 echo"<br>";
}
//////////////////////////////////////////////////////////////
$tabla="CREATE TABLE compromisoPago (
	coCodigo INTEGER NOT NULL,
	cpFechaVencimiento DATE NULL,
	cpMonto INTEGER NULL,
	cpDescripcion VARCHAR(100) NULL,
	cpFechaIngreso DATETIME NULL,
	cpObs VARCHAR(100) NULL,
	gpNumeroBoleta INTEGER NULL,
	gpFechaRealPago DATE NULL,
	CONSTRAINT pkCP PRIMARY KEY (coCodigo, cpFechaVencimiento),
	CONSTRAINT fkCP FOREIGN KEY (coCodigo) REFERENCES codigo (coCodigo)
)";
            
             $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 13 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 13 se creo correctamente';
					 echo"<br>";
}
/////////////////////////////////////////////////////////////
$tabla="CREATE TABLE materiales (
	maCodigo SERIAL,
	maNombre VARCHAR(20) NOT NULL,
	maDescripcion VARCHAR (100) NOT NULL,
	maEstado INTEGER NULL DEFAULT 1,
	CONSTRAINT pkMateriales PRIMARY KEY (maCodigo),
	CONSTRAINT check1MA CHECK(maEstado = 0 OR maEstado = 1) 
)";
            
             $crear_tabla=mysql_query($tabla,$enlace);
             if(!$crear_tabla){
                 echo 'Error al crear la tabla 14 en la base de datos';
				 echo"<br>";
                 }else{
                     echo ' La tabla 14 se creo correctamente';
					 echo"<br>";
}

*/
#prueba

?>









