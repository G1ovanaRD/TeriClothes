<?php
    require './logica/conexion.php';

    session_start();

    if (isset($_SESSION["usuario"])){
        //sesión activa
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol'];  
    } else {
        //no existe ninguna sesión
        header("Location: http://localhost/proyecto/sesion.php");
    }


    //NUEVA PAGINA
    $id = $_GET["id"];
    $sql = "SELECT * FROM post WHERE id=$id";
    $query = mysqli_query($conexion, $sql);
    $row=mysqli_fetch_array($query);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="style.css">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">



</head>

<body>
    <header class="header">
        <nav class="navbar">
            <img src="img/teri2.png" class="logo-img">
            <label class="label_menu" for="menu_container">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="icon_nav"
                    viewBox="0 0 16 16">
                    <path
                        d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793zM1 9V6h14v3zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5m0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5m0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5" />
                </svg>
            </label>
            <input class="menu_container" type="checkbox" name="" id="menu_container">

            <ul class="menu_link">

                <li class="li_link">
                    <img src="/img/corazon.gif" class="icon_link" />
                    <a href="http://127.0.0.1:5500/principal.html" class="link">INICIO</a>
                    <img src="/img/corazon.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="/img/icon2.gif" class="icon_link" />
                    <a href="http://127.0.0.1:5500/tutorial.html#" class="link">TUTORIALES</a>
                    <img src="/img/icon2.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="/img/icon3.gif" class="icon_link" />
                    <a href="http://127.0.0.1:5500/patrones.html#" class="link">PATRONES</a>
                    <img src="/img/icon3.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="/img/icon4.gif" class="icon_link" />
                    <a href="#" class="link">FORO</a>
                    <img src="/img/icon4.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="/img/icon5.gif" class="icon_link" />
                    <a href="http://127.0.0.1:5500/nosotros.html#" class="link">NOSOTROS</a>
                    <img src="/img/icon5.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="/img/icon6.gif" class="icon_link" />
                    <a href="#" class="link">CUENTA</a>
                    <img src="/img/icon6.gif" class="icon_link" />
                </li>


            </ul>

        </nav>

    </header>
    <script src="script.js"></script>
    <div class="contenido-container">
        <!--ENCABEZADO CONTENEDOR-->
        <div class="encabezado-container">
            <div class="encabezado-title">
                <img src="img/e2.png" class="img_enca" alt="" />
                <div class="texto-encabezado">Patrones</div>
                <img src="img/tijeras.gif" class="deco_enca" >
            </div>
        </div>

    <div class="title">
        <h1><?php echo $row['titulo']?><br>Disfraz de calabaza</h1><!--tiutlo del post-->
    </div>

    <div class="title_img" style="background-image:url(/img/tuto/t1.jpg)"></div>
    <div class="content">
        <p class="map">
            Última Modificación: 05/05/21
            <br>
            Autora:<a href="#"> Giovana Rodríguez</a>
        </p>
     
        <h2>Paso 1:</h2>
            <p class="first_c">
                Primero coser la costura central de la capucha que va en dos piezas.<br> A
                continuación coser la capucha con la capa.</p>
            <div class="image_div">
                <img src="img/tuto/tu1_se1.png" class = "image_1"/>
            </div>

        <h2>Paso 2:</h2>
            <p>
                A parte, montar las hojas con el tronco verde y luego coser todo a la parte
                alta de la capucha Terminar cosiendo la cara de la calabaza: ojos, nariz y boca.</p>
            <div class="image_div">
                    <img src="img/tuto/tu1_se2.png" class = "image_1"/>
            </div>

        <h2>Paso 3:</h2>
            <p>
                Para sujetar la capa coser dos tiras con velcro o un lazo naranja a cada lado del cuello.</p>
            <div class="image_div">
                    <img src="img/tuto/tu1_se3.png" class = "image_1"/>
            </div>
           
    </div>

    <footer>
        <ul>
            <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
            <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a></li>
        </ul>
        <p>&copy; 2024 Teri Clothes. Todos los derechos reservados.</p>
    </footer>
   
</body>

</html>