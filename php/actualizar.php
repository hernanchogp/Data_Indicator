<?php
    require_once("conexion.php");
    
    $a = (int)$_POST["cumplenForm"];
    $b = (int)$_POST["totalForm"];
    $i = (int)$_POST["idForm"];
    $t = (int)($a*100)/$b;

    // Check connection
    if (!$conexion_db) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    if($_POST)
      {
         $queryUpdate = "UPDATE $table SET cumplen = $a,
                        total = $b,
                        ans = $t
                        WHERE id = $i";
 
         $resultUpdate = mysqli_query($conexion_db, $queryUpdate); 
 
         if($resultUpdate)
         {
          echo '<script language="javascript">alert("Actualización exitosa");</script>';
         }
         else
         {
            echo "No se pudo actualizar el registro. <br>";
         }
 
      }
    
    //if (mysqli_query($conexion_db, $sql)) {
        //echo '<script language="javascript">alert("Actualización exitosa");</script>';
        //echo 'actualizado'
    //} else {
     // echo "Error updating record: " . mysqli_error($conexion_db);
   // }

    mysqli_close($conexion_db);

?>

<script>
    window.location.replace("../index.php");
</script>

