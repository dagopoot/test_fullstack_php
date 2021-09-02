# Examen Práctico: Software Engineer

La inmobiliaria **OKOL** requiere de una aplicación web para la administración de sus inmuebles con las siguientes consideraciones:


-  Permitir el registro y  autenticación de usuarios 
-  El sistema deberá permitir la creación, lectura, borrado y edición de inmuebles 
-  La creación de inmuebles debe considerar los siguientes criterios: 
    - El formulario  de  registro  para los inmuebles debe contar con las siguientes restricciones:
        - Nombre del inmueble: validar solo el uso de textos
        - Clave del inmueble: respetar el siguiente formato **PCOM-XXX/##**
        - Galeria de imagenes: deberá consumir el **API de Instagram** para obtener 5 fotos de localidades cercanas a la ubicación del inmueble y almacenarlas en base de datos como parte de su galería
        - Descripción, tipo de transacción (venta / renta), tipo de inmueble (casa, departamento, terreno, etc) y el precio del inmueble
    - Datos de ubicación mínimos requeridos: Estado, Delegación o municipio, Colonia, calle y número
    - Datos de geoposicionamiento: latitud y longitud
    - Características: Se puede agregar N características al inmueble (Ejemplo: cisterna, área de lavado, seguridad privada, etc)
- El sistema deberá permitir la edición de todos los campos antes mencionados a excepción de la clave del inmueble
    - Esta funcionalidad solo esta permitida para usuarios logeados
- Deberá existir una sección donde se muestre un mapa con el **API de google maps** donde se visualicen los pins de los inmuebles registrados
    - La posicion del pin para cada inmueble en el mapa corresponde a su latutud y longitud registrada
    - Al seleccionar   cualquier   pin   del   mapa; debe mostrar la ficha de detalle del inmueble
- Deberá existir una sección donde se listaran los inmuebles registrados como se muestra en la siguiente imagen
    - El listado se podra ver para todo tipo de usuario
    - Los botones de edición y borrado solo se deberan mostrar para usuarios logeados
    - Cada inmueble del listado, debera mostrar sobre la imagen clave del inmueble, calle y numero

![alt text](https://propiedadescom.s3.amazonaws.com/examen/examen.png)

- Al dar click en un inmueble del listado, se debera abrir la ficha tecnica del inmueble como se miestra en la siguiente imagen

![alt text](https://propiedadescom.s3.amazonaws.com/examen/examen2.png)

- Notas: 
    - El diseño se debe apegar a las imagenes proporcionadas
    - La aplicación debera ser responsiva
----------


Requerimientos:
-------------

- Configura un servidor local de tu preferencia para verificar el funcionamiento del ejercicio.
- Repositorio: 
    - Debe contar con una cuenta en **bitbucket** para poder bifurcar (**fork**) el repositorio
    - Realice el examen práctico  sobre la copia que realizó
    - Al finalizar la prueba, enviar el link de su repositorio al siguiente correo: **luis.castro@propiedades.com** y  **daniel.nava@propiedades.com**

Especificaciones:
-------------
- Tiene la libertad de modelar la estructura de la **BD** de acuerdo a sus necesidades.
- El uso de los commit debe contar con una descripción detallada.
- Al finalizar la prueba, en la carpeta **BD** crear el archivo **dump.sql** de la estructura final de la base de datos que requiere
- Estructura del repositorio:

bd
:  query.sql

web
:  index.php

**config.txt** 

-  En el archivo **config.txt**  especificar  la configuración que su examen requiere para que pueda funcionar correctamente.  Si realizo el uso de algún **framework**, favor de especificar el nombre y la versión  para su adecuado funcionamiento.