<?php

include_once('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];

    $sql = "UPDATE autos SET modelo = ?, marca = ?, color = ? WHERE codigo = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$modelo, $marca, $color, $codigo]);

    header('Location: index.php');

    exit;
}

$codigo = $_GET['codigo'];
$sql = "SELECT * FROM autos WHERE codigo = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$codigo]);
$Consulta = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
</head>

<body>

<div class="container">
 <br>
<h2>Edicion de Registros</h2>
<br><br>
<form method="POST" action="" class="col-sm-6 col-sm-offset-3">

<input type="hidden" name="codigo" value="<?php echo $Consulta['codigo']; ?>">

<p>
    <div class="form-group">
    <label for="modelo" >Modelo de Auto</label>
    <input id="modelo" type="text" name="modelo" class="form-control" value="<?php echo $Consulta['modelo']; ?>">
   </div>
</p>
<p>
    <label for="marca">Marca de Auto</label>
    <input id="autor" type="text" name="marca" class="form-control" value="<?php echo $Consulta['marca']; ?>">
</p>
<p>
<label for="color">Color de Auto</label>
<input id="color" type="text" name="color" class="form-control" value="<?php echo $Consulta['color']; ?>">    
</p>
<p>
    <input type="submit" value="Actualizar" class="btn-primary">
</p>
</form>
</div>

</body>
</html>
