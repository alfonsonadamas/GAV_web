<?php

    include("conexion.php");
    $name = $_GET['name'];
    $last_name = $_GET['last_name'];
    $email = $_GET['email'];
    $password = $_GET['password'];


    $query1 = "INSERT INTO user(nombre, apellido, correo, contrasena) VALUES('$name','$last_name','$email','$password');";

    $query2 = "SELECT count(*) as contar FROM user WHERE correo = '$email'";

    $consulta = mysqli_query($con, $query2);

    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        header('location:registro.php?exist=1'); 
    }else{
        $insert = mysqli_query($con, $query1);

        if($insert){
            header("Location:login.php?error=0");
        }else{
            echo "error";
        }
    }
    
    
    







?>