<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

$con = new SQLite3("base.db") or die("Problemas para conectar");




?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>credenciales</title>
</head>
<body>
   <div class="container">
<div class="row">
<div class="col-md-8 mx-auto my-5">
 <h1 class="bg-primary text-white p-3 rounded text-center" >lista</h1>
<table class="table text-center">
 <thead class="bg-primary text-white">
     <tr>
     <th>
            Id
        </th>
        <th>
            Matricula
        </th>
         <th>
             Nombre
         </th>
         <th >
             Apellido paterno
         </th>
         <th >
             apellido Materno
         </th>
         <th> 
             foto           
         </th>
     </tr>
 </thead>
 <tbody>
      <?php


$cs = $con -> query("SELECT * from nombresBlackDragons");
while ($resul = $cs -> fetchArray()) {

    $id = $resul['field1'];
    $matricula = $resul['field2'];
    $nombre = $resul['field5'];
    $apellidoPaterno = $resul['field3'];
    $apellidoMaterno = $resul['field4'];
    echo '
    <tr>
        <td>'.$id.'</td>
        <td>'.$nombre.'</td>
        <td>'.$matricula.'</td>
        <td>'.$apellidoPaterno.'</td>
        <td>'.$apellidoMaterno.'</td>
       
        <td> 
        <img src="img/'.$matricula.'.jpg" style="width: 100px;" > 
        </td>
    </tr>
    
    ';
}

$con -> close();
      
      
      ?>
         
 </tbody>
</table>

</div>
</div>
   </div> 
</body>
</html>

