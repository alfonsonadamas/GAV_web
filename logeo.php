<?php
    require 'conexion.php';
    session_start();
    $usuario = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    $query = "SELECT count(*) as contar FROM user WHERE correo = '$usuario' AND contrasena = '$password'";

    $consulta = mysqli_query($con, $query);

    $query2 = "SELECT * FROM user WHERE correo = '$usuario' AND contrasena = '$password'";

    $consulta2 = mysqli_query($con, $query2);

    $array = mysqli_fetch_array($consulta);
     

     if($array['contar'] > 0){

        while($row = mysqli_fetch_assoc($consulta2)){
            $_SESSION['username'] = $usuario;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = $row['nombre'];
            header('location:index.php');
            
        }
          
     }else{
         header('location:login.php?error=1');
     }

?>