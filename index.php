<?php

include_once('conexion.php');

$sql = "SELECT * FROM autos";

$stmt = $pdo->query($sql);

$Consulta = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>CRUD PHP DE AUTOS</title>
</head>
<body>
<br>
<div class="container">

<h1>CRUD PHP DE AUTOS</h1>

<br><br>

    <p><a class="btn btn-primary" href="ingresar.php">Crear</a></p>

    <div class="row">
        
<div class="col-8">

    <table class="table align-middle " >
 
    <thead class="table-dark">
     
    <tr>
            <th>Código</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Color</th>
            <td></td>
            <td></td>
        </tr>
  
    </thead>
  
    <tbody>
 
    <?php foreach ($Consulta as $clave => $valor): ?> 
        <tr>
           <td><?= 00 . $valor['codigo']; ?></td>
           <td><?= $valor['modelo']; ?></td>
           <td><?= $valor['marca']; ?></td>
           <td><?= $valor['color']; ?></td>
           <td><a class="button" href="modificar.php?codigo=<?= $valor['codigo'] ?>">Modificar</a></td>
           <td><a class="button" href="eliminar.php?codigo=<?= $valor['codigo'] ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?> 

  </tbody>

</table>

</div>

</div>
    
</div>

</body>
</html>
