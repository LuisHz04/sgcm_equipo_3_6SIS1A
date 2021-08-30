<?php

include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link href="CSS/estilo-consultarmedico.css" type="text/CSS" rel="stylesheet"/>
<title>Consultar medico</title>
</head>
<body>
	<header class="header">
		<div class="logo-header">
			<img src="L4.jpg">
		</div>
		<nav class="nav-menu">
			<ul>
				
				<li><a href="Principal.html">Cerrar Sesion</a></li>
			</ul>
		</nav>
	</header>
<div class="contenido">
<br>
<br>
<h1>Consultar medico</h1>
<br>
<center>
<table border = "1" >
    <tr>
        <td>Nombre </td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
		<td>Num Colegiado</td>
		<td>Especialidad</td>
		<td>inicio hora</td>
		<td>fin de hora</td>
		<td>Dia</td>    
    </tr>

    <?php
    $sql ="SELECT p.nombre_per,p.appat_per,p.apmat_per, m.num_colegiado, e.tipo_espe, h.inicio_hora, h.fin_hora,d.dia from mpersonal as p inner join mmedico as m ON(m.num_colegiado = p.MMedico_num_colegiado) inner join cespecialidad as e ON(e.id_espe = m.CEspecialidad_id_espe) inner join dhorariomedico as h ON(h.id_hora = m.DHorarioMedico_id_hora) inner join chorariodia as d ON(d.id_chd = h.CHorarioDia_id_chd) where CRol_id_rol = 2";
    $resultado =mysqli_query($con,$sql);

    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
    <tr>
        <td><?php echo $mostrar['nombre_per'] ?></td>
        <td><?php echo $mostrar['appat_per'] ?></td>
        <td><?php echo $mostrar['apmat_per'] ?></td>
		<td><?php echo $mostrar['num_colegiado'] ?></td>
		<td><?php echo $mostrar['tipo_espe'] ?></td>
		<td><?php echo $mostrar['inicio_hora'] ?></td>
		<td><?php echo $mostrar['fin_hora'] ?></td>
		<td><?php echo $mostrar['dia'] ?></td>
    </tr>
    <?php
    }

    ?>
</table>

<center>
</div>
</body>
</html>