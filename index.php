
    <?php 
    //contenido a mostrar en la pagina web 
        echo '<h1>Practica 8</h1>';
        echo '<h2>Contenedores: conceptos, Docker, docker compose</h2>';
        //conexion a la base de datos
        $conexion=new PDO('mysql:host=db; dbname=BDPractica8','root', 'hello1234');
        //Query a la tabla alumnos
        foreach($conexion->query('SELECT * from alumnos') as $fila) {
            for ($i = 0; $i <= 2; $i++) {
              
                print_r($fila[$i] );
            }
            
        }
        
    ?>



