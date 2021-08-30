<?php

include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link href="CSS/estilo-perfilpaciente.css" type="text/CSS" rel="stylesheet"/>
<title>Perfil paciente</title>
</head>
<body>
<header class="header">
		<div class="logo-header">
			<img src="L4.jpg">
		</div>
		<nav class="nav-menu">
			<ul>
				<li><a href="editar_perfil_paciente.php">Editar Perfil</a></li>
				<li><a href="Principal.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
<br>
<br>
<h1>Perfil del Paciente</h1>
<br>
<br>
<img src="paciente.jpg" style= " whidt: 100px; height:50;  margin:20px;"> 
<center>
<form method="get">  
        <input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busquedapaciente" value="buscar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
	<br><br><br>
<table>
<?php

if(isset($_GET['busquedapaciente'])){
    $buscar=$_GET['nss'];
    $sql = "SELECT p.nombre_paci,p.appat_paci,p.apmat_paci,p.user_paci,p.pass_paci,p.tel_paci,p.fechanaci_paci,p.curp_paci,p.alta_paci,o.tipo_ocu,ec.tipo_edocivil,g.tipo_gen FROM mpaciente as p INNER JOIN cocupacion as o ON (o.id_ocu = p.COcupacion_id_ocu) INNER JOIN cestadocivil as ec ON (ec.id_edocivil = p.CEstadoCivil_id_edocivil) INNER JOIN cgenero as g ON (g.id_gen = p.CGenero_id_gen) WHERE nss ='$buscar'";
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
			</tr>
		<tr>
        	<td><?php echo $mostrar['tel_paci']  ?></td>
			</tr>
		<tr>
    		<td><?php echo $mostrar['fechanaci_paci']  ?></td>
			</tr>
		<tr>
        	<td><?php echo $mostrar['curp_paci']  ?></td>
			</tr>
		<tr>
        	<td><?php echo $mostrar['alta_paci']  ?></td>
			</tr>
		<tr>
        	<td><?php echo $mostrar['tipo_ocu']  ?></td>
			</tr>
		<tr>
        	<td><?php echo $mostrar['tipo_edocivil']  ?></td>
			</tr>
		<tr>
			<td><?php echo $mostrar['tipo_gen']  ?></td>	        	
        </tr>
        <?php
    }
}
?>
</table>
</center>
</body>
</html>