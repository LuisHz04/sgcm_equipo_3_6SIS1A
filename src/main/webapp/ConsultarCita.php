<?php

include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Consultar_Cita</title>
<link rel="stylesheet" href="css/estiloconsultarcita.css">
</head>
<body>
<div id="consultarcita">
<header>
<img alt="logo" src="L4.jpg" width="50" height="50">
<a href="inicio_paciente.html"><input type="submit" value="Inicio" style=" float: right; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;"></a>
</header>

<h1>Consultar Cita</h1>
<br><br><br><br><br>
<center>
<table border = "1" >
    <tr>
        <td>ID Cita</td>
        <td>Consultorio</td>
        <td>Num Cita</td>
        <td>Num Colegiado</td>
        <td>Num Expediente</td>
        
    </tr>

    <?php
    $sql ="SELECT * from dcita";
    $resultado =mysqli_query($con,$sql);

    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
    <tr>
        <td><?php echo $mostrar['id_cita'] ?></td>
        <td><?php echo $mostrar['CConsultorio_id_cons'] ?></td>
        <td><?php echo $mostrar['MCita_id_cita'] ?></td>
        <td><?php echo $mostrar['MMedico_num_colegiado'] ?></td>
        <td><?php echo $mostrar['EExpedienteClinico_id_expclinico'] ?></td>
        
    </tr>
    <?php
    }

    ?>
    </table>

    <br><br><br><br><br>
<table border = "1" >
    <tr>
        <td>ID Cita</td>
        <td>Fecha</td>
        <td>Hora</td>
        
    </tr>

    <?php
    $sql ="SELECT * from mcita";
    $resultado =mysqli_query($con,$sql);

    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
    <tr>
        <td><?php echo $mostrar['id_cita'] ?></td>
        <td><?php echo $mostrar['fecha_cita'] ?></td>
        <td><?php echo $mostrar['hora_cita'] ?></td>
        
    </tr>
    <?php
    }

    ?>
    </table>

</center>
</div>
</body>
</html>