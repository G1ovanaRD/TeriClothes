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

    $id = $_GET["id"];
    $sqlPost = "SELECT * FROM post WHERE id=$id";
    $queryPost = mysqli_query($conexion, $sqlPost);

    $sqlAns = "SELECT * FROM post WHERE id_resp=$id";
    $queryAns = mysqli_query($conexion, $sqlAns);

    /*
    $row1 = mysqli_fetch_array($query);
    $row2 = mysqli_fetch_array($query);
    */

    /*
    var_dump($row1);
    var_dump($row2);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="foro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Foro</title>

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

        .resp {
        background: #f9f9f9;
        padding: 20px;
        margin-bottom: 10px;
        margin-left: 3rem;
        margin-top:1.5rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        word-wrap: break-word;  /* Prevent text from overflowing */
        overflow-wrap: break-word;
    }

    .resp .post-meta {
    font-size: 0.9em;
    color: #666;
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

        <div class="container">
            <main>
                        <div class="title_foro">Comunidad Teri Clothes</div>
        <section id="posts">
                    <h2>Post</h2>
                    <div id="posts-container">
                        <?php

                             // Establecer la zona horaria
                        date_default_timezone_set("America/Argentina/Buenos_Aires");

                        // Obtener la fecha actual
                        $fecha = date("d/m/Y");

                            while($row = mysqli_fetch_array($queryPost)){
                        ?>
                            <div class="post">
                                <h3> <?php echo $row['titulo'] ?> </h3>
                                <div class="post-meta">
                                    Por: <?php echo $row['usuario'] ?><br>  Fecha:<?php echo $fecha;?>
                            </div>
                                <p> <?php echo $row['contenidoo'] ?> </p>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div id="posts-container">
                    <?php
                        while($row = mysqli_fetch_array($queryAns)){
                    ?>
                        
                        <div class="resp">
                            <h3> <?php echo $row['titulo'] ?> </h3>
                            <div class="post-meta">
                                Por: <?php echo $row['usuario'] ?> <br>  Fecha:<?php echo $fecha;?>
                        </div>
                            <p> <?php echo $row['contenidoo'] ?> </p>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </section>

                <section id="new-post">
                    <h2>Responde a la conversación</h2>
                    <form action="./logica/addPost.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_resp" VALUE="<?php echo $id; ?>">

                        <label for="post-title">Título:</label>
                        <input type="text" name="post-title" placeholder="Título del post" required>
                        
        
                        <label for="post-content">Contenido:</label>
                        <textarea name="post-content" placeholder="Escribe tu mensaje aquí..." required></textarea>
                        
                        <button type="submit">Publicar</button>
                    </form>
                </section>
                
            </main>
        </div>
        
        <!--<script>
          document.getElementById('post-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const title = document.getElementById('post-title').value.trim();
        const author = document.getElementById('post-author').value.trim();
        const content = document.getElementById('post-content').value.trim();
        
        if (title === '' || author === '' || content === '') {
            alert('Por favor, completa todos los campos.');
            return;
        }
        
        const post = document.createElement('div');
        post.className = 'post';
        
        const postTitle = document.createElement('h3');
        postTitle.textContent = title;
        
        const postMeta = document.createElement('div');
        postMeta.className = 'post-meta';
        const date = new Date().toLocaleDateString('es-ES');
        postMeta.textContent = `Por: ${author} | Fecha: ${date}`;
        
        const postContent = document.createElement('p');
        postContent.textContent = content;
        
        const postActions = document.createElement('div');
        postActions.className = 'post-actions';
        postActions.innerHTML = '<a href="#" >🌸Ir al post🌸</a>';
        
        post.appendChild(postTitle);
        post.appendChild(postMeta);
        post.appendChild(postContent);
        post.appendChild(postActions);
        
        document.getElementById('posts-container').appendChild(post);
        
        document.getElementById('post-form').reset();
    });
    
        </script>
-->


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