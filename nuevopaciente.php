<?php

include("conexion.php");

$nombre =$_POST['nombre_paci'];
$paterno =$_POST['appat_paci'];
$materno =$_POST['apmat_paci'];
$tel =$_POST['tel_paci'];
$naci =$_POST['fechanaci_paci'];
$curp =$_POST['curp_paci'];
$alta =$_POST['alta_paci'];
$user =$_POST['user_paci'];
$pass =$_POST['pass_paci'];
$ocu =$_POST['COcupacion_id_ocu'];
$civil =$_POST['CEstadoCivil_id_edocivil'];
$alergia =$_POST['CAlergia_id_alergia'];
$sangre =$_POST['CTipoSangre_id_sangre'];
$genero =$_POST['CGenero_id_gen'];

$query = mysqli_query($con,"INSERT INTO mpaciente(nombre_paci,appat_paci,apmat_paci,tel_paci,fechanaci_paci,curp_paci,alta_paci,user_paci,pass_paci,COcupacion_id_ocu,CEstadoCivil_id_edocivil,CAlergia_id_alergia,CTipoSangre_id_sangre,CGenero_id_gen)values('$nombre','$paterno','$materno','$tel','$naci','$curp','$alta','$user','$pass','$ocu','$civil','$alergia','$sangre','$genero')");


if($query){
    echo "Registro exitoso!";
    ?>
    <br>
    <a href="Principal.html">Pagina principal</a>
    <?php
} else {
    //echo "No ingreso";
    header("Location: registrarNuevaCuenta.html");

}
?>