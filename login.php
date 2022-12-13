<?php
    include("conexion.php");

    $error = $_GET['error'];


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
                <a href="index.php"><img src="img/Mi proyecto (1).png" alt=""></a>
                <h2>GAV Sneakers</h2>
                <form action="logeo.php" method="POST">
                    <input type="text" name="user" id="user" placeholder="Email">
                    <input type="password" name="password" id="paswword" placeholder="Password">

                    <button type="submit">Login</button>
                </form>

                <?php
                    if($error == 1){

                    

                ?>
                    <p class="error">Correo y/o contraseña incorrectos</p>
                <?php


                    }
                ?>
                

                
                
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="forw_pas.php?exist=0">Forgot your password?</a>
                <a href="registro.php?exist=0">Sign up</a>
            </div>
        </div>
    </div>

    

    
</body>

<script src="js/login.js"></script>
</html>