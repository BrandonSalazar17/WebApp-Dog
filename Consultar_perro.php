<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra de Perros</title>
    <link rel="stylesheet" type="text/css" href="css/styleFormConsulta.css">
</head>
<body>
    <?php
        //conexion a la Base de datos (Servidor,usuario,password)
            $conn = mysqli_connect("localhost", "root","Unmsm2017", "RelocaDB");
            if (!$conn) {
                die("Error de conexion: " . mysqli_connect_error());
            }

        //(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
        
        //capturando datos
            $v2 = $_REQUEST['Nombre'];

        //conuslta SQL
            $sql = "select * from Perro where Nombre like '".$v2."'";
            $result = mysqli_query($conn, $sql);

        //cuantos reultados hay en la busqueda
            $num_resultados = mysqli_num_rows($result);
            echo "<p>Número de perros encontrados: ".$num_resultados."</p>";

        //mostrando informacion de los perros y detalle
            for ($i=0; $i <$num_resultados; $i++) {
                $row = mysqli_fetch_array($result); //echo ($i+1);
                echo " DNI : ".$row["DNI"];
                echo " </br>Nombre : ".$row["Nombre"];
                echo " </br>Raza : ".$row["Raza"];
                echo " </br>Genero : ".$row["Genero"];
                echo " </br>Nacio en : ".$row["FechaNacimiento"];
                echo " </br>Fotografia : ".$row["Foto"];
                echo "</p>";
            }
    ?>
</body>
</html>



