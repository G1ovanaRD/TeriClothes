<?php
    require './logica/conexion.php';

        if(!isset($_GET['id'])){

            header("Location: http://localhost/proyecto/principal.php?error=No se encontro el elemento a editar");
    
            return;
        }
    
        
        $id=$_GET['id'];
        $sql="SELECT * from tendencia WHERE id=".$id;
        $query=mysqli_query($conexion,$sql);
        $row = mysqli_fetch_array($query);

        


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
                    <a href="http://127.0.0.1:5500/nosotros.html#" class="link">NOSOTROS</a>
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

    <div class="contenido-container">
        <!--ENCABEZADO CONTENEDOR-->
        <div class="encabezado-container">
            <div class="encabezado-title">
                <img src="img/e2.png" class="img_enca" alt="" />
                <div class="texto-encabezado">Tendencias</div>
                <img src="img/tijeras.gif" class="deco_enca">
            </div>
        </div>

        <section id="new-tendencia">
                    <h2>Editar tendencia</h2>

                    <form action="./logica/updateTen.php" method="POST" enctype="multipart/form-data">

                        <!-- Campo oculto para el id -->
                        <input type="hidden" name="id" VALUE="<?php echo $row['id'] ?>">

                        <!-- Encabezado -->
                        <label for="title">Título:</label>
                        <input type="text" VALUE="<?php echo $row['titulo']?>" name="title" placeholder="Maximo 20 caracteres" required >

                        <label for="tipo">Tema:</label>
                        <input type="text" name="tipo" VALUE="<?php echo $row['tipo']?>" placeholder="Maximo 20 caracteres.  Ejemplo(Moda,Salud,Cuidados,etc)" required>

                        <label for="intro">Descrición:</label>
                        <input type="text" name="intro" VALUE="<?php echo $row['intro']?>" placeholder="Breve descripción de la tendencia" required>
                    
                        <label for="imagen">Imagen Principal</label>
                        <input type="file" name="imagen">
                        
                        <!--Link de la pagina con mas informacion-->
                        <label for="linkTe">Adjunta link donde se encuentre más informacion de la tendencia:</label>
                        <input type="url" name="linkTe" VALUE="<?php echo $row['linkTe']?>">

                        <button type="submit">Actualizar</button>

                    </form>
        </section>
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