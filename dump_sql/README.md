Proceso de cargado de CSV
=================

Para el proceso de cargado, se tuvo que revisar la data entregada, ya que muchos datos presentaban inconsistencias y no se podían ingresar correctamente a la BD. Se revisaron los datos y se ingresaron mediante el importador de archivos de phpMyAdmnin.

Se puede usar SQL también para el ingreso generando una sentencia de Load data , por ejemplo: 

LOAD DATA LOCAL INFILE '/archivoImportar.csv'
INTO TABLE productos
FIELDS TERMINATED BY ','
FIELDS ENCLOSED BY ‘”‘
LINES TERMINATED BY '”'
(titulo,descripcion,fecha_inicio,fecha_termino,precio,imagen,vendidos,tags);