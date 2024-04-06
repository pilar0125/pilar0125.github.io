<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Tienda para mascotas</h1>
                <p>
                    Somos una tienda de mascotas online que te ofrece productos de las mejores marcasa del mercado,todo aquello que necesites en alimentacion , entretenimiento cuidado,limpieza,accesorios y mas para tus mascotas,lo tienes todo en un clic.Conoce cada categoria,escoge lo que mas te guste,elige la cantidad adecuada,compara precios, compra y recibe en la puerta de tu casa en el menor tiempo posible ¡No dejes de cuidar y consentir a aquellos que nos llenan de alegrias en cada momento

                </p>

                <a href="#" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="imagenes/—Pngtree—cats and dogs red dogs_2281529.png" alt="">
            </div>
        </div>

    </header>

    <section class="about container">

        <div class="about-img">
            <img src="imagenes/download.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Somos una tienda virtual que nacio hace 2 años con el objetivo de ayudar al cuidado de tu mascota con los mejores productos del mercado
            </p>
            <br>

        </div>

    </section>

    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-solid fa-shield-dog"></i>
                <h3>Accesorios</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-fish"></i>
                <h3>Alimentos</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bath"></i>></i>
                <h3>Higiene</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-gamepad"></i>></i>
                <h3>entretenimiento</h3>
            </div>


        </div>
    </main>


    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Mi cuenta</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="password" name="password" placeholder="contraseña">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <input type="submit" name="send" class="btn" onClick="myFunction()" >              
            </div>
        </form>
    </section>

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a>
                    <li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>


        </div>

    </footer>

    <?php
    include ("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href = "http://localhost/proyecto"
        }
    </script>
</body>

</html>