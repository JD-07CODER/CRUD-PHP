<?php

include_once('conexion.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nombre = $_POST['modelo'];

        $correo = $_POST['marca'];

        $edad = $_POST['color'];
    
        $sql = "INSERT INTO autos (modelo, marca, color) VALUES (?, ?, ?)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$nombre, $correo, $edad]);
    
        header('Location: index.php');

        exit;

    }

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

<div class="row">

<h2>Ingreso de Datos de Autos</h2>

<div class="col align-self-center">

<form method="post" class="col-sm-6 col-sm-offset-3">

    <p>
    <div class="form-group">
        <label for="modelo" >Modelo de Auto</label>
        <input id="modelo" type="text" name="modelo" class="form-control">
       </div>
    </p>
    <p>
        <label for="marca">Marca de Auto</label>
        <input id="autor" type="text" name="marca" class="form-control">
    </p>
    <p>
    <label for="color">Color de Auto</label>
    <input id="color" type="text" name="color" class="form-control">    
    </p>
    <p>
        <input type="submit" value="Ingresar" class="btn-primary">
    </p>
    
</form>

</div>

</div>

</div>





  

</body>