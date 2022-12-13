<?php
    
    $exist = $_GET['exist'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Mi proyecto (1).png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Sitio Web Oficial de GAV Sneakers</title>
</head>
<body>
    
    
    
    <div class="video_prueba">
        <div class="video">
        
            <video src="img/JORDAN 1 MILAN UNBOXING _ SNEAKER B-ROLL _ FUJIFILM X100V.mp4" autoplay loop muted></video>
        </div>

        <div class="login">

            
            
            <div class="login_input">
                <div class="regresar">
                    <a id="reg" href="login.php?error=0"> < | Login</a>
                </div>
                <a href="index.php"><img src="img/Mi proyecto (1).png" alt=""></a>
                <h2>GAV Sneakers</h2>
                <form action="fwP.php">
                    <p>Ingrese su correo electronico para recuperar su contraseña</p>
                    <input type="text" name="email" id="usuario" placeholder="Email">
                    <button type="submit">Send</button>
                </form>
                
                <?php
                    if($exist == 1){
                        
                    

                ?>

                <p class="enviado">Se ha enviado un correo con instrucciones para recuperar su contraseña </p>

                <?php

                    }

                    if($exist == 2){

                    
                ?>
                <p class="error">El correo introducido no existe </p>


                <?php

                    }
                ?>

                
                
            </div>
        </div>
    </div>

    

    
</body>

<script src="js/login.js"></script>
</html>