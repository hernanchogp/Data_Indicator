<?php
    include("conexion.php");

    $query = "SELECT id, indicador, meta, cumplen, total, ans FROM $table;";
 
    $result = mysqli_query($conexion_db, $query); 
    
    if($_GET)
      {
         $querySelectByID = "SELECT id, cumplen, total FROM $table WHERE id = ".$_GET['id'].";";
 
         $resultSelectByID = mysqli_query($conexion_db, $querySelectByID); 
 
         $rowSelectByID = mysqli_fetch_array($resultSelectByID);
      }
    //$row = mysqli_fetch_array($result, MYSQLI_NUM);

    //while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
    //    printf("ID: %s Cumplen: %s Total: %s Ans: %s", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
    //    printf("<br>");
    //}

    mysqli_close($conexion_db);
?>