<?php
    require './logica/conexion.php';

    session_start();

    if (isset($_SESSION["usuario"])){
        //sesión activa
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol'];  
    }else{
        $rol="invitado";
    }/* else {
        //no existe ninguna sesión
        header("Location: http://localhost/proyecto/sesion.php");
    }*/

    $sql = "SELECT * FROM tutorial";
    $query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="style1.css">-->
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="allStyles.css">-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>TUTORIALES</title>

    <style>
        .header {
            
            background-image: url("./img/m1.png");
            height: auto;
        }

        @media screen and (width <=1000px) {
    
            .menu_link {
                background-image: url('./img/m2.png');
            }
        }


        .deco_enca{
            left: 13%;
        }

        @media screen and (max-width: 1000px) {
            .texto-encabezado {
                font-size: 3rem; 
            }

            .deco_enca{
            left: 5%;
            }
        }

        @media screen and (max-width: 800px) {
            .texto-encabezado {
            font-size: 2.5rem; 
            }

            .deco_enca{
            left: 10%;
            }
        }      

        @media screen and (max-width: 600px) {
            .texto-encabezado {
                font-size: 2rem;
            }

            .deco_enca{
           left:5%;
            }
        }

        footer {
            background-color: #dc8bf0;
            bottom: 0;
            width: 100%;
            height: auto;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 20px 0;
        }

        footer a {
            color: #a606fc;
            text-decoration: none;
            margin: 0 10px;
            font-size: 24px; /* Ajustar el tamaño de los íconos según sea necesario */
        }

        footer a:hover {
            color: white;
        }

        footer ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        footer ul li {
            display: inline;
            margin: 0 10px;
        }
    </style>
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
                    <img src="./img/corazon.gif" class="icon_link" />
                    <a href="http://localhost/proyecto/principal.php" class="link">INICIO</a>
                    <img src="./img/corazon.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="./img/icon2.gif" class="icon_link" />
                    <a href="http://localhost/proyecto/tutorial.php" class="link">TUTORIALES</a>
                    <img src="./img/icon2.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="./img/icon3.gif" class="icon_link" />
                    <a href="http://localhost/proyecto/patrones.php" class="link">PATRONES</a>
                    <img src="./img/icon3.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="./img/icon4.gif" class="icon_link" />
                    <a href="http://localhost/proyecto/foro.php" class="link">FORO</a>
                    <img src="./img/icon4.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="./img/icon5.gif" class="icon_link" />
                    <a href="http://localhost/proyecto/nosotros.php" class="link">NOSOTROS</a>
                    <img src="./img/icon5.gif" class="icon_link" />
                </li>

                <li class="li_link">
                    <img src="./img/icon6.gif" class="icon_link" />
                    <a href="http://localhost/proyecto/cuenta.php" class="link">CUENTA</a>
                    <img src="./img/icon6.gif" class="icon_link" />
                </li>


            </ul>

        </nav>

    </header>
    <script src="script.js"></script>

    <main>

        <!--CONTENEDOR TUTORIAL-->

        <div class="contenido-container">
            <!--ENCABEZADO CONTENEDOR-->
            <div class="encabezado-container">
                <div class="encabezado-title">
                    <img src="img/e2.png" class="img_enca" alt="" />
                    <div class="texto-encabezado">Tutoriales</div>
                    <img src="img/tijeras.gif" class="deco_enca">
                </div>
            </div>


            <!--contenedor tutorial-->
            <div class="blog-box-container">


                <!--DISFRACES AGREGADOS-->
                <?php

                        // Establecer la zona horaria
                        date_default_timezone_set("America/Argentina/Buenos_Aires");

                        // Obtener la fecha actual
                        $fecha = date("d/m/Y");

                        // Mostrar la fecha
                       
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <div class="blog-box">
                            <!--imagen-->
                        <div class="blog-box-img">
                            <img src="./img/tuto/<?php echo $row['imagen'] ?>" alt="imagen_tendencia">
                            <a href="./plantillaTuto.php?id=<?php echo $row['id']; ?>" class="blog-img-link">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>

                        <!--texto-->
                        <div class="blog-box-text">
                            <strong>Tutorial</strong>
                            <a href="./plantillaTuto.php?id=<?php echo $row['id']; ?>">DIY<br><?php echo $row['titulo'] ?></a>
                            <p><?php echo $row['intro'] ?></p>

                            <!--autores-->
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="img/nosotros.jpg" alt="">
                                </div>
                                <div class="blog-author-text">
                                    <strong><?php echo $row['usuario']; ?></strong>
                                    <span><?php echo $fecha;?></span>
                                </div>
                            </div>

                        </div>
                        <!--administrar -->
                        <?php
                            if($rol=="admin"){
                                echo '<div class="blog-editar">';
                                echo '<button onclick="window.location.href=\'./updateTuto.php?id=' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '\'">Editar</button>';

                                echo '<button onclick="window.location.href=\'./logica/deleteTutorial.php?id=' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '\'">Eliminar</button>';
                                echo '</div>';
                            }
                        ?>
                    
                    </div>   
                    <?php
                        }
                    ?>
            </div>


        <?php
            if($rol=="admin"){
                echo '

            <section id="new-post">
                <h2>Agregar Tutorial</h2>

                <form action="./logica/addTutorial.php" method="POST" enctype="multipart/form-data">
                   
                    <!-- Encabezado -->
                    <label for="title">Título:</label>
                    <input type="text" name="title" placeholder="Maximo 20 caracteres" required>

                    <label for="intro">Descrición:</label>
                    <input type="text" name="intro" placeholder="Breve descripción" required>
                
                    <label for="imagen">Imagen Principal</label>
                    <input type="file" name="imagen">
                    
                    <!-- Paso 1 -->
                    <label for="con1">Contenido Paso 1:</label>
                    <textarea name="con1" placeholder="Agrega informacion...." required></textarea>
                    <label for="imagen1">Imagen Paso 1</label>
                    <input type="file" name="imagen1">

                    <!-- Paso 2 -->
                    <label for="con2">Contenido Paso 2:</label>
                    <textarea name="con2" placeholder="Agrega informacion...." required></textarea>
                    <label for="imagen2">Imagen Paso 2</label>
                    <input type="file" name="imagen2"> 

                    <!-- Paso 3 -->
                    
                    <label for="con3">Contenido Paso 3:</label>
                    <textarea name="con3" placeholder="Agrega informacion...." required></textarea>
                    <label for="imagen3">Imagen Paso 3</label>
                    <input type="file" name="imagen3">
                    
                    <!--Link del descarga del patron-->
                    <label for="linkPa">Adjunta link de descarga del patron:</label>
                    <input type="url" name="linkPa">

                    <button type="submit">Publicar</button>

                </form>
            </section>';
            }
        ?>
          
    </main>

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