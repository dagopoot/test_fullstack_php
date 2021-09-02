# Examen Práctico: Software Engineer

La inmobiliaria **OKOL** requiere de una aplicación web para la administración de sus inmuebles con las siguientes consideraciones:


-  Permitir el registro y  autenticación de usuarios 
-  El sistea debera permitir el creacion, lectura, borrado y edicion de inmuebles 
-  La creacion de inmuebles debe considerar los siguientes criterios: 
    - El formulario  de  registro  para los inmuebles debe contar con las siguientes restricciones:
        - Nombre del inmueble: validar solo el uso de textos
        - Clave del inmueble: respetar el siguiente formato **PCOM-XXX/##**
        - Galeria de imagenes: deberá consumir el **API de Instagram** para obtener 5 fotos de localidades cercanas a la ubicación del inmueble y almacenarlas en base de datos como parte de su la galería del inmueble
        - Descripcion, tipo de transaccion (venta / renta), tipo de inmueble (casa, departamento, terreno, etc) y el precio del inmueble
    - Datos de ubicación mínimos requeridos: Estado, Delegación, Colonia, calle y numero
    - Datos de geoposicionamiento: latitud y longitud
    - Características: Se puede agregar N características al inmueble (Ejemplo: cisterna, area de lavado, seguridad privada, etc)
- El sistema debera permitir la edicion de todos los campos antes mencionados a excepcion de la clave del inmueble
    - Esta funcionalidad solo esta petmitida para usuarios logeados
- Debera existir una seccion donde se listaran los inmuebles registrados como se muestra en la siguiente imagen
    - El listado se podra ver para todo tipo de usuario
- Al dar click en un inmueble del listado, se debera abrir la ficha tecnica del inmueble como se miestra en la siguiente imagen
- Nota: el diseño se debe apegar a las imagenes proporcionadas
-Debera existir una seccion donde se muetre un mapa con el **API de google maps** donde se visualicen los pins de los inmuebles registrados
    - La posicion sel pin para cada inmueble en el mapa corresponde a su latutud y longitud registrada
    - Al   seleccionar   cualquier   pin   del   mapa; debe mostrar el nombre del inmueble y  desplegar   una galería responsive de sus fotos almacenadas
    - Al terminar de cargar la galeria; agregar un link que permita mostrar los detalles de construction (Nombre, Clave, Caracteristicas, etc.)

----------


Requerimientos:
-------------

- Configura un servidor **LAMP** de forma local para verificar el funcionamiento del ejercicio.
- Base de datos: Se adjuntan sentencias sql para la configuración inicial.
```
CREATE DATABASE Testing_fullstack;
USE Testing_fullstack;
CREATE TABLE Users (
    ID int NOT NULL AUTO_INCREMENT,
    FirstName varchar(255) NOT NULL,
    LastName varchar(255),
    Email varchar(100),
    Password varchar(255),
    PRIMARY KEY (ID)
);
INSERT INTO Users (FirstName,LastName, Email, Password) VALUES ('Nathan', 'Smith', 'pcom@gmail.com', '3dd14afc9f2da6c03c4f6599553a4597');
```
> **Nota: ** Estas sentencias las puede encontrar en el archivo **query.sql** de la carpeta **bd**

- Repositorio: 
    - Debe contar con una cuenta en **bitbucket** para poder bifurcar (**fork**) el repositorio
    - Realice el examen práctico  sobre la copia que realizó
    - Al finalizar la prueba, enviar el link de su repositorio al siguiente correo: **luis.castro@propiedades.com**

Especificaciones:
-------------
- Tiene la libertad de modelar la estructura de la **BD** de acuerdo a sus necesidades, respetando los **query** que se proporciona.
- El uso de los commit debe contar con una descripción detallada.
- Al finalizar la prueba, en la carpeta **BD** crear el archivo **dump.sql** de la estructura final de la base de datos que requiere
- Estructura del repositorio:

bd
:  query.sql

web
:  index.php

**config.txt** 

-  En el archivo **config.txt**  especificar  la configuración que su examen requiere para que pueda funcionar correctamente.  Si realizo el uso de algún **framework**, favor de especificar el nombre y la versión  para su adecuado funcionamiento.