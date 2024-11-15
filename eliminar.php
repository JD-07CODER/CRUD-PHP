<?php

include_once('conexion.php');

if (isset($_GET['codigo'])) {

    $codigo = $_GET['codigo'];

    $sql = "DELETE FROM autos WHERE codigo = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([$codigo]);

    header('Location: index.php');

    exit;
    
}









