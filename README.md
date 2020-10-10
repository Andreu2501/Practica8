# Practica9

* Utilizar la práctica anterior como base.
* Hacer una construcción dentro del servidor web, o involucrar algún tercer servidor de aplicación que involucre una construcción de imagen para incorporación de un plugin.
* Montar los datos de la base de datos mediante un volumen.
* Hacer desde el servidor web alguna consulta que utilice el plugin que se incorporó en la construcción.

## Requerimientos
* Visual studio code
* Docker desktop
* github

## Ejecucion
1. Levantamos el docker compose
* docker-compose up -d --build
2. verificamos que los contenedores que se tienen
* docker ps
3. entramos al puerto 81 de la maquina para ver nuestra servidor web
4. entramos a la consola del tercer servicio que es la base de datos Postgres 
* docker exec -it 8f2957849f0f  psql -U postgres  -W postgres
5. bajamos el docker compose
* docker-compose down

## Autor
Andrea Lissette Flores Aguilar - 201314241
