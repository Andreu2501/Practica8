
    <?php 
    //contenido a mostrar en la pagina web 
        echo '<h1>Practica 9</h1>';
        echo '<h2>Contenedores: construcción compuesta de Docker compose</h2>';
        //conexion a la base de datos
        $conexion=new PDO('mysql:host=db; dbname=BDPractica8','root', 'hello1234');
        //Query a la tabla alumnos
        foreach($conexion->query('SELECT * from alumno') as $fila) {
            for ($i = 0; $i <= 2; $i++) {
                echo("\n");
                echo($fila[$i] );
                echo("\n");
                
            }
            
        }
        
    ?>



