<?php

include("conexion.php");


$cita =$_POST['fecha_cita'];
$hora =$_POST['hora_cita'];


$query = mysqli_query($con,"INSERT INTO mcita(fecha_cita,hora_cita) values('$cita','$hora')");
if($query){
    echo "Registro exitoso!";
    ?>
    <br>
    <a href="Principal.html">Pagina principal</a>
    <?php
} else {
    //echo "No ingreso";
    header("Location: registrarNuevaCita.html");

}
?>