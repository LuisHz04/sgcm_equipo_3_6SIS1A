<?php

include("conexion.php");

$user =$_POST['user_paci'];
$pass =$_POST['pass_paci'];

$query = mysqli_query($con,"SELECT user_paci,pass_paci FROM mpaciente WHERE user_paci = '$user' AND pass_paci = '$pass'");
$nr=mysqli_num_rows($query);

if($nr == 1){
    header("Location: inicio_paciente.html");

} else if ($nr == 0){
    //echo "No ingreso";
    header("Location: inicio_sesion_paciente.html");

}

?>