# Examen Práctico: Software Engineer

La inmobiliaria **Propiedades** requiere de una aplicación web para la administración de sus  construcciones con las siguientes consideraciones:

-  Permitir el registro y  autenticación de usuarios 
- El **CRUD**  de las construcciones
    - Puedes utilizar un framework de tu preferencia con arquitectura **MVC** 
    - El formulario  de  registro  para las construcciones debe contar con las siguientes restricciones:
        - Nombre de la construcción: validar solo el uso de textos
        - Clave de la construcción: respetar el siguiente formato **PCOM-XXX/##**
        - Galeria de imagenes: deberá consumir el **API de Foursquare** (en php) para obtener 5 fotos de localidades cercanas a la ubicación de  la construcción y almacenarlas como parte de su la galería
    - Datos de ubicación mínimos requeridos: Delegación, Colonia, calle
    - Datos de geoposicionamiento: latitud y longitud
    - Características: Se puede agregar N características de forma dinámica
- Crea un mapa con el **API de google maps** donde se visualicen los pins de las construcciones registradas
    - Al   seleccionar   cualquier   pin   del   mapa; debe mostrar el nombre de la construcción y  desplegar   una galería responsive de sus fotos almacenadas
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
    PRIMARY KEY (Email)
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