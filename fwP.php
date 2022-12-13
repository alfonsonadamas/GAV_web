<?php

    include("conexion.php");
    $email = $_GET['email'];
    $query2 = "SELECT count(*) as contar FROM user WHERE correo = '$email'";

    $consulta = mysqli_query($con, $query2);

    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        mail($email, 'Mi título', "Hola desde php");
        header('location:forw_pas.php?exist=1'); 
    }else{
        header('location:forw_pas.php?exist=2'); 
    }
    
    
    







?>