<?php

include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link href="CSS/estilo-editarperfilpaciente.css" type="text/CSS" rel="stylesheet"/>
<title>Editar perfil paciente</title>
</head>
<body>
	<header class="header">
	<div class="logo-header">
	<img alt="logo" src="L4.jpg" width="50" height="50">
	<a href="inicio_paciente.html"><input type="submit" value="Inicio" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;"></a>
	</div> 
	</header>
<br>
<br>
<h1>Editar perfil del paciente</h1>
<br>
<center>
<section>
    <form method="get">  
        <input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busquedadatospaciente" value="buscar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
<table>
<?php

if(isset($_GET['busquedadatospaciente'])){
    $buscar=$_GET['nss'];
    $sql = "SELECT nombre_paci,appat_paci,apmat_paci,user_paci,pass_paci,tel_paci,fechanaci_paci,curp_paci,alta_paci FROM mpaciente WHERE nss ='$buscar'";
    $resultado =mysqli_query($con,$sql);
    
    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
        <tr>
        <td><?php echo $mostrar['nombre_paci']  ?></td>
        <td><?php echo $mostrar['appat_paci']  ?></td>
        <td><?php echo $mostrar['apmat_paci']  ?></td>
        </tr>
        <tr>
        <td><?php echo $mostrar['user_paci']  ?></td>
        <td><?php echo $mostrar['pass_paci']  ?></td>
        <td><?php echo $mostrar['tel_paci']  ?></td>
        <td><?php echo $mostrar['fechanaci_paci']  ?></td>
        <td><?php echo $mostrar['curp_paci']  ?></td>
        <td><?php echo $mostrar['alta_paci']  ?></td>
        </tr>
        <?php
    }

}
?>
</table>
<br>

<form method="get">  
        <input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busquedapaciente" value="buscar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
<table>
<?php

if(isset($_GET['busquedapaciente'])){
    $buscar=$_GET['nss'];
    $sql = "SELECT tipo_ocu FROM cocupacion  inner join mpaciente as p ON(p.COcupacion_id_ocu = cocupacion.id_ocu) WHERE nss ='$buscar'";
    $resultado =mysqli_query($con,$sql);
    
    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
        <tr>
        <td><?php echo $mostrar['tipo_ocu']  ?></td>
        </tr>
        <?php
    }

}
?>
</table>
<br>

<form method="get">  
        <input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busquedaestado" value="buscar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
<table>
<?php

if(isset($_GET['busquedaestado'])){
    $buscar=$_GET['nss'];
    $sql = "SELECT tipo_edocivil FROM cestadocivil inner join mpaciente as p ON(p.CEstadoCivil_id_edocivil = cestadocivil.id_edocivil) WHERE nss ='$buscar'";
    $resultado =mysqli_query($con,$sql);
    
    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
        <tr>
        <td><?php echo $mostrar['tipo_edocivil']  ?></td>
        </tr>
        <?php
    }

}
?>
</table>
<br>

<form method="get">  
        <input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busqueddireccion" value="buscar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
<table>
<?php

if(isset($_GET['busquedadireccion'])){
    $buscar=$_GET['nss'];
    $sql = "SELECT id_dir,calle_dir,nint_dir,next_dir FROM ddireccion inner join mpaciente as p ON(p.DDireccion_id_dir = ddireccion.id_dir) WHERE nss ='$buscar'";
    $resultado =mysqli_query($con,$sql);
    
    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
        <tr>
        <td><?php echo $mostrar['id_dir']  ?></td>
        <td><?php echo $mostrar['calle_dir']  ?></td>
        <td><?php echo $mostrar['nint_dir']  ?></td>
        <td><?php echo $mostrar['next_dir']  ?></td>
        </tr>
        <?php
    }

}
?>
</table>
<br>

<form method="get">  
        <input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busquedagenero" value="buscar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
<table>
<?php

if(isset($_GET['busquedagenero'])){
    $buscar=$_GET['nss'];
    $sql = "SELECT tipo_gen FROM cgenero inner join mpaciente as p ON(p.CGenero_id_gen = cgenero.id_gen) WHERE nss ='$buscar'";
    $resultado =mysqli_query($con,$sql);
    
    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
        <tr>
        <td><?php echo $mostrar['tipo_gen']  ?></td>
        </tr>
        <?php
    }

}
?>
<center>
    
</table>
<br>

<form action = "editarpp.php" method="post">
    <input type="number" name="nss" placeholder="NSS" style="width:400px; height:30px; left:100px; top:150px;">
    <br>
    <br>
    <input type="text" name="user_paci" placeholder="Usuario" style="width:400px; height:30px; left:100px; top:150px;">
    <br>
    <br>
    <input type="password" name="pass_paci" placeholder="password" style="width:400px; height:30px; left:100px; top:100px;">
    <br>
    <br>
    <input type="number" name="tel_paci" placeholder="Telefono" style="width:400px; height:30px; left:100px; top:150px;">
    <br>
    <br>
    <input type="text" name="tipo_ocu" placeholder="Ocupacion" style="width:400px; height:30px; left:100px; top:150px;">
    <br>
    <br>
    <input type="text" name="tipo_edocivil" placeholder="Estado civil" style="width:400px; height:30px; left:100px; top:150px;">
    <br>
    <br>
    <input type="number" name="id_dir" placeholder="Direccion" style="width:400px; height:30px; left:100px; top:150px;">
    <br><br><br>
    <input type="submit"  value="Guardar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
	<a href="inicio_paciente.html"><input type="submit" value = "Cancelar"  style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
</a>
</form>
</section>
</body>
</html>