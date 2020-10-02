# Practica8
* Crear al menos dos contenedores en Docker Compose que involucren:
* Un servidor web
* Una base de datos 
* El servidor web debe hacer alguna consulta a la base mysql y presentar información en el puerto 81 del host.

## Requerimientos
* Instalar Docker destop
* Instalar visual studio code

## Ejecutar
 1. corremos el docker-compose ejecutando docker-compose up -d --build 
 2. visualizaremos los contenedores que estan arriba  docker ps 
 3. Para ingresar a la consola de mysql docker exec -it 5f0370b48543  mysql -p
4. para salir de la consola de mysql  exit
5. Para parar al archivo docker-compuse docker-compose stop

## Autor
* Andrea Flores 201314241
