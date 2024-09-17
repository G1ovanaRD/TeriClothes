<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="styleNosotros.css">-->
    <!--<link rel="stylesheet" href="allStyles.css">-->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Nosotros</title>

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
    <script src="script.js"></script>

    <div class="contenido-container">
        <!--ENCABEZADO CONTENEDOR-->
        <div class="encabezado-container">
            <div class="encabezado-title">
                <img src="img/e2.png" class="img_enca" alt="" />
                <div class="texto-encabezado">Nosotros</div>
                <img src="img/tijeras.gif" class="deco_enca" >
            </div>
        </div>
        <div class="title">
            <h1>¡¡¡ Bienvenido a <br>Teri Clothes !!!</h1>
            <h3>-Giovana Rodríguez</h3>
        </div>

        <div class="title_img" style="background-image:url(img/nosotros.jpg)"></div>
        <div class="content">
            <a name="1"></a>
            <h2>¿Qué encontraras en Teri Clothes?</h2>
            <p class="first_c">
                Bienvenido a Teri Clothes, un blog dedicado a la ropa para tu mascota,en donde encontrarás tutoriales,
                trucos y consejos para aprender a coser a tu ritmo, de manera fácil y sencilla. </p>
            <p>
                Desde fuera, coser puede parecer algo complejo y aparatoso. Patrones con mil piezas o costuras imposibles
                pueden abrumar a la modista más predispuesta. En Teri Clothes encontrarás ejercicios prácticos, tutoriales,
                materiales de descarga y explicaciones detalladas con las que podrás aprender a coser y hacerte tu propia
                ropa. Tanto si estás empezando a coser como si ya tienes un poco de experiencia, o simplemente pasabas por
                aquí, seguramente encuentres alguna información útil y ¿quién sabe? en la próxima fiesta deslumbres con una
                prenda hecha por ti.
            </p>

            <a name="2"></a>
            <h2>¿Quién es Tereso?</h2>
            <p>
                Tereso es el gato de Giovana Rodríguez, programadora y diseñadora en su tiempo libre. Desde San Luis Potosí,
                publica este blog para mostrar una costura real y fácil mediante ejercicios sencillos y explicaciones paso a
                paso.

            </p>
            <p>
                ¡Feliz costura!
            </p>
        

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