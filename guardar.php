<?php

include("index.php")

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    
    $consulta = "INSERT INTO Clientes(nombre, correo, telefono, mensaje) VALUES
    ('$nombre','$correo','$telefono','$mensaje')";

    if ($conexion->query($consulta) === TRUE){
        header("Location: contacto.html");
    } else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }

    $conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@400;700&family=Great+Vibes&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@400;700&family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,100..900&family=Charmonman:wght@400;700&family=Great+Vibes&family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon-brenda.png">

    <title>Pastelería Brenda</title>
</head>
<body>


<div class="section-us">
    <div class="cuadro">
        <div class="cuadro-section">
            <div class="titulo-us">
                <h1>Gracias</h1>
                <br>
                <a href="index.html" class="logo"><img src="images/logo brenda2.png" height="400" alt=""></a>
            </div>
        </div>
    </div>
</div>



</body>
</html>