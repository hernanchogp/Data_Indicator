<?php
    $servername = "localhost";
    $dbname = "informes"; //-->id18627060_informes

    $username = "user_inform"; //-->id18627060_user_inform
    $password = "hmt123"; //--> William_2022*

    $table = "ans";

    //Configuración

    $conexion_db = mysqli_connect("$servername","$username","$password","$dbname");
    if(!$conexion_db)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus credenciales.</h3><hr><br>";
    }
    //else
    //{
    //    echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
    //}
?>