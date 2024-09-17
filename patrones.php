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


    //Agregar nueva informacion de los patrones
    $sql = "SELECT * FROM tutorial";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>Patrones</title>
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
                font-size: 3rem; /* Ajusta este valor según lo necesites */
            }

            .deco_enca{
            left: 5%;
            }
        }

        @media screen and (max-width: 800px) {
            .texto-encabezado {
            font-size: 2.5rem; /* Ajusta este valor según lo necesites */
            }

            .deco_enca{
            left: 10%;
            }
        }      

        @media screen and (max-width: 600px) {
            .texto-encabezado {
                font-size: 2rem; /* Ajusta este valor según lo necesites */
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

        <div class="contenido-container">
            <!--ENCABEZADO CONTENEDOR-->
            <div class="encabezado-container">
                <div class="encabezado-title">
                    <img src="img/e2.png" class="img_enca" alt="" />
                    <div class="texto-encabezado">Patrones</div>
                    <img src="img/tijeras.gif" class="deco_enca">
                </div>
            </div>

            <div class="title">
                <h1>Descargables</h1>
            </div>


            <!--contenedor tutorial-->
            <div class="blog-box-container">

                <!--DISFRAZ CALABAZA-->
                <div class="blog-box">
                    <!--imagen-->
                    <div class="blog-box-img">
                        <img src="./img/tuto/t1.png" alt="imagen_tendencia">
                        <a href="http://127.0.0.1:5500/t1.html" class="blog-img-link">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                        <button onclick="window.location.href='<?php echo $row['id'] ?>' " class="btn-patrones">Descargar</button>
                    </div>
                    <!--texto-->
                    <div class="blog-box-text">
                        <strong>Patron</strong>
                        <a href="http://127.0.0.1:5500/t1.html"
                            class="titulo">DIY<br>Disfraz
                            de calabaza</a>
                        <button onclick="window.location.href='<?php echo $row['id'] ?>' " class="btn-patrones">Descargar</button>

                        <!--autores-->
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="img/nosotros.jpg" alt="">
                            </div>
                            <div class="blog-author-text">
                                <strong>Giovana Rodríguez</strong>
                                <span>12 Abril,2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--DISFRAZ ITACHI-->
                <div class="blog-box">
                    <!--imagen-->
                    <div class="blog-box-img">
                        <img src="./img/tuto/t2.png" alt="imagen_tendencia">
                        <a href="http://127.0.0.1:5500/t2.html" class="blog-img-link">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                    <!--texto-->
                    <div class="blog-box-text">
                        <strong>Patron</strong>
                        <a
                            href="http://127.0.0.1:5500/t2.html">DIY<br>Disfraz
                            de Akatsuki</a>
                        <button class="btn-patrones">Descargar</button>
                        <!--autores-->
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="img/nosotros.jpg" alt="">
                            </div>
                            <div class="blog-author-text">
                                <strong>Giovana Rodríguez</strong>
                                <span>12 Abril,2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--DISFRAZ MURCIELAGO-->
                <div class="blog-box">
                    <!--imagen-->
                    <div class="blog-box-img">
                        <img src="img/tuto/t3.png" alt="imagen_tendencia">
                        <a href="#" class="blog-img-link">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                    <!--texto-->
                    <div class="blog-box-text">
                        <strong>Patron</strong>
                        <a
                            href="https://www.de-gatos.net/accesorios-para-gatos/mejora-la-hidratacion-de-tu-gato-con-una-fuente-de-agua/">DIY<br>Disfraz
                            de murcielago</a>
                        <button class="btn-patrones">Descargar</button>
                        <!--autores-->
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="img/nosotros.jpg" alt="">
                            </div>
                            <div class="blog-author-text">
                                <strong>Giovana Rodríguez</strong>
                                <span>12 Abril,2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--DISFRAZ INDEPENDENCIA-->
                <div class="blog-box">
                    <!--imagen-->
                    <div class="blog-box-img">
                        <img src="img/tuto/t4.png" alt="imagen_tendencia">
                        <a href="#" class="blog-img-link">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                    <!--texto-->
                    <div class="blog-box-text">
                        <strong>Patron</strong>
                        <a
                            href="https://www.de-gatos.net/accesorios-para-gatos/mejora-la-hidratacion-de-tu-gato-con-una-fuente-de-agua/">DIY<br>Disfraz
                            Independencia</a>
                        <button class="btn-patrones">Descargar</button>

                        <!--autores-->
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="img/nosotros.jpg" alt="">
                            </div>
                            <div class="blog-author-text">
                                <strong>Giovana Rodríguez</strong>
                                <span>12 Abril,2024</span>
                            </div>
                        </div>
                    </div>
                </div>

            
            <!--PATRONES AGREGADOS-->
            <?php
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
                            <strong>Patron</strong>
                            <a href="./plantillaTuto.php?id=<?php echo $row['id']; ?>">DIY<br><?php echo $row['titulo'] ?></a>
                            <button onclick="window.location.href='<?php echo $row['linkPa'] ?>' " class="btn-patrones">Descargar</button>

                            <!--autores-->
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="img/nosotros.jpg" alt="">
                                </div>
                                <div class="blog-author-text">
                                    <strong><?php echo $row['usuario'] ?></strong>
                                    <span>12 Abril,2024</span>
                                </div>
                            </div>

                        </div>
                    </div>   
                    <?php
                        }
                    ?>


            </div>





          
        </div>
        <div class="content">
          
            <a name="1"></a>
            <h2>Tabla de tallas</h2>
            <p class="first_c">
                <b>¿Qué talla tiene mi mascota?</b><br>

                No existen unas tallas estándar en la ropa para perros o gatos, ni modelos diseñados exclusivamente para
                una raza en concreto, así que las medidas de cada talla, al igual que ocurre con la ropa para las
                personas, varian según el modelo y el fabricante.
                Por lo tanto a la hora de confeccionar nuestra ropa para perros lo haremos partiendo de esta tabla de
                tallas aproximada:
            </p>

            <div class="image_div">
                <img src="IMG/patrones/tallas.png" class="image_1" />
            </div>
            <p>
                Si las medidas de tu mascota no se corresponden exactamente con ninguna talla elige siempre la más
                grande y cuando vayas a coser la ropa hazle un dobladillo mas ancho. </p>

            <a name="2"></a>
            <h2>¿Cómo tomar las medidas del perro?</h2>

            <p>
                Primero coger la cinta metrica y medir todo el contomo del pecho por la parte mas ancha, asi evitaremos
                que se nos quede demasiado justo el traje Anotamos el numero en centimetros como contorno del pecho.
            </p>
            <p>
                De la misma forma medimos el contorno de cuello por la parte mas ancha que suele ser la parte más
                cercana a las patas delanteras y anotamos la cifra.
            </p>
            <p>
                Para acabar mediremos ellargo argo del del tomo, que es es la le distancia desde la nuca o collar hasta
                donde comienza la cola y anotamos lambién este numero.
            </p>
          
            <div class="image_div">
                <img src="IMG/patrones/medidas.png" class="image_1" />
            </div>


        </div>
      
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