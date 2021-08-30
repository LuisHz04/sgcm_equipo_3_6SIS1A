<?php

include("conexion.php");

    $cita =$_POST['id_cita'];
    $fecha =$_POST['fecha_cita'];
    $hora =$_POST['hora_cita'];
    $query = mysqli_query($con,"UPDATE mcita SET fecha_cita ='$cita' WHERE id_cita ='$cita'");
    $query1 = mysqli_query($con,"UPDATE mcita SET hora_cita ='$hora' WHERE id_cita ='$cita'");
    if($query && $query1){
        echo "Edicion exitosa!";
        ?>
        <br>
        <a href="Principal.html">Pagina principal</a>
        <?php
    } else {
        //echo "No ingreso";
        header("Location: EditarCita.php");
    
    }
?>