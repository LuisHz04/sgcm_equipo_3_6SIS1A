<?php


include("conexion.php");

    $nss =$_POST['nss'];
    $usuario =$_POST['user_paci'];
    $password =$_POST['pass_paci'];
    $telefono =$_POST['tel_paci'];
    $ocupacion =$_POST['tipo_ocu'];
    $estado =$_POST['tipo_edocivil'];
    $direccion =$_POST['id_dir'];

    $query = mysqli_query($con,"UPDATE mpaciente SET user_paci ='$usuario' WHERE user_paci ='$nss'");
    $query1 = mysqli_query($con,"UPDATE mpaciente SET pass_paci ='$password' WHERE pass_paci ='$nss'");
    $query2 = mysqli_query($con,"UPDATE mpaciente SET tel_paci ='$telefono' WHERE tel_paci ='$nss'");
    $query3 = mysqli_query($con,"UPDATE mpaciente SET tipo_ocu ='$ocupacion' WHERE tipo_ocu ='$nss'");
    $query4 = mysqli_query($con,"UPDATE mpaciente SET tipo_edocivil ='$estado' WHERE tipo_edocivil ='$nss'");
    $query5 = mysqli_query($con,"UPDATE mpaciente SET id_dir ='$direccion' WHERE id_dir ='$nss'");


    if($query || $query1 || $query2 ||$query3 || $query4 || $query5){
        echo "Edicion exitosa!";
        ?>
        <br>
        <a href="inicio_paciente.html">Pagina principal</a>
        <?php
    } else {
        //echo "No ingreso";
        header("Location: editar_perfil_paciente.php");
    
    }
?>