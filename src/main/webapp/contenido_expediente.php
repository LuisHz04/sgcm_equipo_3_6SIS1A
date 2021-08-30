<?php

include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link href="CSS/estilo-contec.css" type="text/CSS" rel="stylesheet"/>
<title>Expediente clinico</title>
</head>
<body>
	<header class="header">
		<div class="logo-header">
			<img alt= "logo" src="logo.jpg"/>
		</div>
		<nav class="nav-menu">
			<ul>
				<li><a href="inicio_paciente.html">Inicio</a></li>
			</ul>
		</nav>
	</header>
	<div>
		<h1>Expediente clinico</h1>
		<br>
		<center>
		<h2>Datos personales</h2>
		<br>
		<form method="get">  
        	<input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        	<input type="submit" name = "busquedaexpediente" value="buscar" style=" float: center; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    	</form>
	<table>
	<?php

		if(isset($_GET['busquedaexpediente'])){
   		 $buscar=$_GET['nss'];
    		$sql = "SELECT p.nombre_paci,p.appat_paci,p.apmat_paci,p.tel_paci,p.fechanaci_paci,p.curp_paci,p.alta_paci,ts.tipo_sangre,g.tipo_gen,de.pregunta1,de.pregunta2,de.pregunta3,de.preguntan,a.tipo_alergia,dp.talla_dpaci,dp.peso_paci,dp.tempe_paci,dp.fecha_dpaci,m.num_colegiado,per.nombre_per,per.appat_per,per.apmat_per,es.tipo_espe,eec.id_expclinico,diag.nota,trata.nota FROM mpaciente as p INNER JOIN ctipoSangre as ts ON (ts.id_sangre = p.CTipoSangre_id_sangre) INNER JOIN cgenero as g ON (g.id_gen = p.CGenero_id_gen) INNER JOIN despedienteClinico as de ON (de.id_dexpcli = eec.DEspedienteClinico_id_dexpcli) INNER JOIN CAlergia as a ON (a.id_alergia = p.CAlergia_id_alergia) INNER JOIN dpaciente as dp (dp.id_dpaci = p.DPaciente_id_paci) INNER JOIN mtratamiento as trata ON (trata.id_trata = diag.MTratamiento_id_trata) INNER JOIN mfichadiagnostico as diag ON (diag.id_diag = eec.MFichaDiagnostico_id_diag) INNER JOIN eexpedienteclinico as eec ON (eec.id_expclinico = p.EExpedienteClinico.id_expclinico) INNER JOIN mmedico as m ON (m.num_colegiado = per.MMedico_num_colegiado) INNER JOIN cespecialidad as es ON (es.id_espe = m.CEspecialidad_id_espe) WHERE nss ='$buscar'";
    		
    		$resultado =mysqli_query($con,$sql);
    
			while ($mostrar=mysqli_fetch_array($resultado)) {
				 ?>

        <tr>
        	<h3>Datos Personales</h3>

        	<td><?php echo $mostrar['nombre_paci']  ?></td>
        	<td><?php echo $mostrar['appat_paci']  ?></td>
        	<td><?php echo $mostrar['apmat_paci']  ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $mostrar['tel_paci']  ?></td>
    		<td><?php echo $mostrar['fechanaci_paci']  ?></td>
    		<td><?php echo $mostrar['curp_paci']  ?></td>
    		<td><?php echo $mostrar['alta_paci']  ?></td>
    		<td><?php echo $mostrar['tipo_gen']  ?></td>
        </tr>
        <tr>
        	<h3>Interrogatorio</h3>
        	<td><?php echo $mostrar['tipo_sangre']  ?></td>
        	<td><?php echo $mostrar['pregunta1']  ?></td>
        	<td><?php echo $mostrar['pregunta2']  ?></td>
        	<td><?php echo $mostrar['pregunta3']  ?></td>
        	<td><?php echo $mostrar['preguntan']  ?></td>
        	<td><?php echo $mostrar['tipo_alergia']  ?></td>
        </tr>
        <tr>
        	<h3>Fecha Diagnostico</h3>
        	<td><?php echo $mostrar['talla_dpaci']  ?></td>
        	<td><?php echo $mostrar['peso_dpaci']  ?></td>
        	<td><?php echo $mostrar['tempe_paci']  ?></td>
        	<td><?php echo $mostrar['fecha_dpaci']  ?></td>
        </tr>
        <tr>
        	<h3>Diagnostico y Tratamiento</h3>
        	<h4>Datos del medico</h4>
        	<td><?php echo $mostrar['num_colegiado']  ?></td>
        	<td><?php echo $mostrar['nombre_per']  ?></td>
        	<td><?php echo $mostrar['appat_per']  ?></td>
        	<td><?php echo $mostrar['apmat_per']  ?></td>
    	</tr>
    	<tr>
    		<td><?php echo $mostrar['tipo_espe']  ?></td>
    		
    		<td><?php echo $mostrar['id_expclinico']  ?></td>
    	</tr>
        <tr>
        	<td><?php echo $mostrar['nota']  ?></td>
        	<td><?php echo $mostrar['nota']  ?></td>
    	</tr>
        <?php
    }
}
?>
</table>
</center>
</body>
</html>