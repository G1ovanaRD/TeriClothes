<?php
//verificar si no hay una sesion activa

session_start();

if(isset($_SESSION['usuario'])){
    //sesion activa
    //guardar en una variable la informacion de la cuenta en sesion
    $usuario = $_SESSION['usuario'];//en $_SESSION esta guardada la informacion del usuario,que se gaurdo en sesion.php
    
}else{
    //no hay sesion activa
    //redireccionar al login 
    header("Location: http://localhost/proyecto/sesion.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Mi cuenta</title>
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

        /*ESTILOS CSS*/
        .profile-container {
            text-align: center;
            margin: 1rem;
            padding: 0;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height:auto;
            /*background-color: #efc8e8;*/
           
        }

        .profile-image {
            background-color: #eadeeb;
            width: 25%; /* Modifiqué esto */
            /*height: 100px; /* Modifiqué esto */
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px dotted mediumvioletred; /* Modifiqué esto */
        }
    
        .profile-image img {
            max-width: 100%;
            max-height: 100%;
        }

        .profile-name {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .logout-link {
            font-size: 1rem;
            color:rgb(29, 26, 29);
            text-decoration: none;
        }

        h4{
            border-radius:0.5rem;
            padding: 0.5rem;
            background-color: rgb(213, 253, 255);
            border-color: rgb(147, 117, 245);
            border-width: 0.17rem;
            border-style: dashed;
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


    <div class="profile-container">
            <div class="profile-image">
                <img src="img/x.gif" alt="Imagen de perfil">
            </div>
            <div class="profile-name"><h2>Bienvenido <?php echo $usuario ?></h2></div>
            <a href="./logica/logout.php" class="logout-link"><h4>Cerrar Sesión</h4></a>
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