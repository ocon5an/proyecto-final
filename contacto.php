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
<link rel="shortcut icon" href="images/favicon-brenda.png">
    <title>Pastelería Brenda</title>
</head>
<body>

<!-- header section start here  -->
<header class="header">
    <div class="logoContent">
        <a href="index.html" class="logo"><img src="images/logo brenda2.png" alt=""></a>
        <h1 class="logoName">Pastelería Brenda </h1>
    </div>

    <nav class="navbar">
        <a href="index.html">Inicio</a>
        <a href="menu.html">Menú</a>
        <a href="eventos.html">Eventos</a>
        <a href="contacto.php">Contácto</a>
        <a href="nosotros.html">Nosotros</a>
    </nav>

    <div class="icon">
        <img src="images/nav.png" id="menu-bar">
    </div>
    <div class="cont-menu active" id="menu">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="menu.html">Menú</a></li>
            <li><a href="eventos.html">Eventos</a></li>
            <li><a href="contacto.php">Contácto</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
        </ul>
    </div>
</header>
<!-- header section end here  -->

<div class="section-for">
    <div class="cuadro-for">
        <div class="cuadro-section-for">
            <div class="titulo-for">
                <h1>Tu opinión importa</h1>
            </div>
            <div class="content-for">
                    <p>En "Pastelería Brenda", tu opinión es muy importante para nosotros. Nos encantaría saber qué te
                        pareció nuestro servicio y nuestros productos. ¿Disfrutaste de tu pastel? ¿Hay algo que podamos
                        mejorar? Si tuviste una buena experiencia, compártela con nosotros, y si tienes alguna queja,
                        por favor, háznosla saber. Estamos aquí para escucharte y mejorar continuamente. <br>
                        <br>
                        Para ponerte en contacto con nosotros, puedes enviarnos un mensaje a través de nuestras redes
                        sociales o responder el siguiente formulario. ¡Esperamos tus comentarios!<br>
                    <br></p>
            </div>
        </div>
        <form action="guardar.php" action="enviar.php" action="index.php" method="post">
            <h2>Contáctanos</h2>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="correo" placeholder="Correo" required>
            <input type="text" name="telefono" placeholder="Telefono" required>
            <textarea name="mensaje" placeholder="Escriba aquí su opinión, queja o experiencia" required></textarea>
            <input type="submit" value="ENVIAR" id="boton">
        </form>
    </div>   
</div>

<!-- pie de pagina -->
    <footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.facebook.com/profile.php?id=100065490189526"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/ocon5an/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://x.com/Ocon5an"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul><li><a href="index.html">Inicio</a></li>
                <li><a href="menu.html">Menú</a></li>
                <li><a href="eventos.html">Eventos</a></li>
                <li><a href="contacto.php">Contácto</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2024; Diseñado por <span class="designer">Bryan</span></p>
    </div>
</footer>

<script src="js/final.js"></script>
<script src="js/nav.js"></script>

</body>
</html>