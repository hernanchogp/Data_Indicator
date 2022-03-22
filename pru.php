<html> 
      <head>
         <title>Ejemplo de actualización de datos en base de datos MySQL</title>
      </head> 
 
      <body>
 
      <?php
 
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "user_inform";
 
      // Contraseña del usuario
      $contrasena = "hmt123";
 
      // Nombre de la base de datos
      $baseDeDatos ="informes";
 
      // Nombre de la tabla a trabajar
      $tabla = "ansp";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
      $link = Conectarse();
 
      if($_POST)
      {
         $queryUpdate = "UPDATE $tabla SET cumplen = '".$_POST['cumplenForm']."',
                        total = '".$_POST['totalForm']."'
                        WHERE id = ".$_POST['idForm'].";";
 
         $resultUpdate = mysqli_query($link, $queryUpdate); 
 
         if($resultUpdate)
         {
            echo "<strong>El registro ID ".$_POST['idForm']." con exito</strong>. <br>";
         }
         else
         {
            echo "No se pudo actualizar el registro. <br>";
         }
 
      }
 
      $query = "SELECT id, indicador, meta, cumplen, total, ans FROM $tabla;";
 
      $result = mysqli_query($link, $query); 
 
      ?>
 
      <table>
         <tr>
            <td>id</td>
            <td>indicador</td>
            <td>meta</td>
            <td>cumplen</td>
            <td>total</td>
            <td>ans</td>
         <tr>
 
      <?php
 
      while($row = mysqli_fetch_array($result))
      { 
         echo "<tr>";
         echo "<td>";
         echo $row["id"];
         echo "</td>";
         echo "<td>";
         echo $row["indicador"];
         echo "</td>";
         echo "<td>";
         echo $row["meta"];
         echo "</td>";
         echo "<td>";
         echo $row["cumplen"];
         echo "</td>";
         echo "<td>";
         echo $row["total"];
         echo "</td>";
         echo "<td>";
         echo $row["ans"];
         echo "</td>";
         echo "<td>";
         echo "<a href=\"?id=".$row["id"]."\">Actualizar</a>";
         echo "</td>";
         echo "</tr>";
 
      } 
 
      mysqli_free_result($result); 
 
      ?>
 
      </table>
      <hr>
 
      <?php
      if($_GET)
      {
         $querySelectByID = "SELECT id, cumplen, total FROM $tabla WHERE id = ".$_GET['id'].";";
 
         $resultSelectByID = mysqli_query($link, $querySelectByID); 
 
         $rowSelectByID = mysqli_fetch_array($resultSelectByID);
      ?>
 
      <form action="" method="post">
         <input type="hidden" value="<?=$rowSelectByID['id'];?>" name="idForm">
         cumplen: <input type="number" name="cumplenForm" value="<?=$rowSelectByID['cumplen'];?>"> <br> <br>
         total: <input type="number" name="totalForm" value="<?=$rowSelectByID['total'];?>"> <br> <br>
         <input type="submit" value="Guardar">
      </form>
 
      <?php
      }
      mysqli_close($link);
      ?>
      </body> 
      </html>