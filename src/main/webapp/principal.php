<?php

include("conexion.php");

$user =$_POST['user_per'];
$pass =$_POST['pass_per'];

$query = mysqli_query($con,"SELECT user_per,pass_per FROM mpersonal WHERE user_per = '$user' AND pass_per = '$pass'");
$nr=mysqli_num_rows($query);

if($nr == 1){
    header("Location: inicioAdministrador.html");

} else if ($nr == 0){
    //echo "No ingreso";
    header("Location: iniciosesionAdministracion.html");

}

?>
