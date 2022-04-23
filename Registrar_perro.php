<?php
    //conexion a la Base de datos (Servidor,usuario,password)
    $conn = mysqli_connect("localhost", "root","Unmsm2017", "RelocaDB");
    if (!$conn) {
        die("Error de conexion: " . mysqli_connect_error());
    }
    //(nombre de la base de datos, $enlace) 
       // mysqli_select_db("Relocadb",$conn);
        
    //capturando datos
    $v1 = $_REQUEST['Codigo'];
    $v2 = $_REQUEST['Nombre'];
    $v3 = $_REQUEST['FechNac'];
    $v4 = $_REQUEST['Raza'];
    $v5 = $_REQUEST['Genero'];
    $v6 = $_REQUEST['Foto'];

    //conuslta SQL
    $sql="INSERT INTO perro(DNI, Nombre, Raza, Genero, FechaNacimiento, Foto) VALUES ('$v1','$v2','$v4','$v5','$v3','$v6')";
    /*$sql = "INSERT INTO Perro (DNI, Nombre, Raza, Genero, FechaNacimiento, Foto) ";
    $sql = "VALUES ('$v1', '$v2', '$v4', '$v5', '$v3', '$v6' )";*/
    
    if (mysqli_query($conn, $sql)) {
        echo "<p>Ok, datos ingresados </p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $result = mysqli_close($conn);

    //Mensaje de conformidad
    //echo "<p>Ok, datos ingresados </p>";
?>