<?php
    
	include("conexion.php");
	session_start();

    
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="shortcut icon" href="img/Mi proyecto (1).png" type="image/x-icon">
    <title>Sitio Web Oficial de GAV Sneakers</title>
</head>
<body>
    <!-- <header>
        <div class="header">
            <div class="header_img">
                <a href=""><img src="img/Jumpman_logo.svg.png" alt=""></a>
                <a href=""><img src="img/Adidas_Logo.svg.png" alt=""></a>
                <a href=""><img src="img/puma-se-logo-ACC0F72575-seeklogo.com.png" alt=""></a>
            </div>
            <ul class="header_nav">
                <li><a href="">Ayuda</a></li>
                <li><a href="">Unete</a></li>
                <li><a href="">Iniciar Sesion</a></li>
            </ul>
        </div>
    </header> -->
    <nav>
       
        <img src="img/Mi proyecto (1).png" alt="">
        <ul class="nav">
            <li><a href="">Nuevos Lanzamientos</a></li>
            <li><a href="tenis.html">Hombre</a></li>
            <li><a href="">Mujer</a></li>
            <li><a href="">Niño</a></li>
            <a href=""><img src="img/bolsa-de-la-compra.png" alt=""></a>

            <?php
                if(isset($_SESSION['username'])){
                    
                
            ?>
                <a href="#" onclick="display();" ><img src="img/perfil.png" alt=""></a>

            <?php
                
                }else{

                
            ?>
                <a href="login.php?error=0"><img src="img/perfil.png" alt=""></a>

            <?php
                }
            ?>
            
        </ul>

        
    </nav>

    <body>
        <div class="user" id="display">
            <p>Bienvenido, <?php echo $_SESSION['name']; ?></p>
            <a href="miCuenta.php">Mi cuenta</a>
            <a href="">Favoritos</a>        
            <a href="cerrar_sesion.php">Cerrar Sesion</a>        
        </div>
        <div class="body_img">
            <div class="body_txt">
                <img src="img/Mi proyecto (1).png" alt="">
            </div>
        </div>
        
        <div class="texto">
            <h1>Bienvenidos a GAV Sneakers</h1>
            <p>Tienda de sneakers, ropa y accesorios</p>
        </div>
        
        <div class="video">
            <video src="img/OUR GARRA IS NEVER DONE _ Brazil National Team _ Nike.mp4" autoplay loop muted></video>
        </div>

       <h2>Nuevas Colecciones</h2>
        <div class="coleccion">
            <div class="coleccion_foto1">
                <div class="degradado">
                    <p><span>Coleccion 2022</span></p>
                    <p>Nuestra ambicion nunca para</p>
                    <a href="">Ver Mas</a>
                </div>
            </div>
            <div class="coleccion_foto2">
                <div class="degradado">
                    <p><span>Coleccion 2022</span></p>
                    <p>De jordan para el mundo</p>
                    <a href="">Ver Mas</a>
                </div>
            </div>
        </div>
        <h2>Destacados</h2>
        <section>
            <div class="container">
                <div class="carousel">
                    <input type="radio" name="slides" checked="checked" id="slide-1">
                    <input type="radio" name="slides" id="slide-2">
                    <input type="radio" name="slides" id="slide-3">
                    <input type="radio" name="slides" id="slide-4">
                    <input type="radio" name="slides" id="slide-5">
                    <input type="radio" name="slides" id="slide-6">
                    <ul class="carousel__slides">
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="img/odhlk8ksqmstmdcjjyn0.webp" alt="">
                                </div>
                                <figcaption>
                                    Air Force 1
                                    <span class="credit">$1999</span>
                                    
                                    <a href="">Comprar</a>
                                   
                                </figcaption>
                            </figure>
                        </li>
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="img/b805a450-6459-4b24-b4d2-8092c7fd8082.webp" alt="">
                                </div>
                                <figcaption>
                                    Jordan 1
                                    <span class="credit">$3999</span>
                                    <a href="">Comprar</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="img/2878666b05cf4e069fbeae980151bd90_9366.webp" alt="">
                                </div>
                                <figcaption>
                                    FORUM 84 HI
                                    <span class="credit">$3500</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="img/389b709e-5102-4e55-aa5d-07099b500831.webp" alt="">
                                </div>
                                <figcaption>
                                    Blazer Mid
                                    <span class="credit">$4999</span>
                                    <a href="">Comprar</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="img/calzado-air-force-1-07-lv8-gcKbrT.jpg" alt="">
                                </div>
                                <figcaption>
                                    Air Force 1 07 LV8
                                    <span class="credit">$2499</span>
                                    <a href="">Comprar</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="img/d59b0c32-03db-4ae2-b982-bf622b28d2fc.webp" alt="">
                                </div>
                                <figcaption>
                                    Lebron 19
                                    <span class="credit">$3600</span>
                                    <a href="">Comprar</a>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <ul class="carousel__thumbnails">
                        <li>
                            <label for="slide-1"><img src="img/odhlk8ksqmstmdcjjyn0.webp" alt=""></label>
                        </li>
                        <li>
                            <label for="slide-2"><img src="img/b805a450-6459-4b24-b4d2-8092c7fd8082.webp" alt=""></label>
                        </li>
                        <li>
                            <label for="slide-3"><img src="img/2878666b05cf4e069fbeae980151bd90_9366.webp" alt=""></label>
                        </li>
                        <li>
                            <label for="slide-4"><img src="img/389b709e-5102-4e55-aa5d-07099b500831.webp" alt=""></label>
                        </li>
                        <li>
                            <label for="slide-5"><img src="img/calzado-air-force-1-07-lv8-gcKbrT.jpg" alt=""></label>
                        </li>
                        <li>
                            <label for="slide-6"><img src="img/d59b0c32-03db-4ae2-b982-bf622b28d2fc.webp" alt=""></label>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        <div class="hero">
            <img src="img/best-sneakers-to-buy-without-raffles.jpg" alt="">
            <p>Conjuntos unicos</p>
            <h2>Lo quieres lo tienes</h2>
            <div class="hero_boton">
                <a href="">Comprar</a>
            </div>
        </div>

        <div class="fin">
            <img src="img/Mi proyecto (1).png" alt="">
            <div class="fin_texto">
                <h2>El lugar para los atletas</h2>
                <p>Las cosas son mejores cuando eres miembro de GAV. Obten noticias y contenido exclusivo a lo ultimo en estilo, innovacion, envios gratis, recompensas exclusivas y mas. Registrate, es gratis</p>
                <div class="fin_botones">
                    <a href="">Registrarse</a>
                    <a href="">Beneficios</a>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer_p">
                <div class="footer">
                    <div class="footer_links">
                        <p>GAV Sneakers</p>
                        <a href="">Acerca de Nosotros</a>
                        <a href="">Ayuda</a>
                    </div>
                    <div class="footer_links">
                        <p>Ayuda</p>
                        <a href="">Preguntas Frecuentes</a>
                        <a href="">Promociones</a>
                    </div>
                    <div class="footer_links">
                        <p>Servicio al cliente</p>
                        <a href="">Contacto</a>
                    </div>
                    
                </div>
    
                
            </div>

            <div class="avisos">
                <div class="priv">
                    <img src="img/Mi proyecto (1).png" alt="" height="100" width="100">
                    <a href="terminos.html">Terminos de Uso</a>
                    <a href="priv.html">Aviso de Privacidad</a>
                    <a href="cookies.html">Politica de Cookies</a>
                </div>
                <div class="pagos">
                    <img src="https://1000marcas.net/wp-content/uploads/2019/12/logo-Paypal.png" alt="" width="50" height="25">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Oxxo_Logo.svg/2560px-Oxxo_Logo.svg.png" alt="" width="50" height="25">
                    <img src="https://brand.mastercard.com/content/dam/mccom/brandcenter/brand-history/brandhistory_mc1996_100_2x.png" alt=""  width="50" height="25">
                </div>
            </div>
            
        </footer>


    </body>
</body>
<script src="js/index.js"></script>
</html>