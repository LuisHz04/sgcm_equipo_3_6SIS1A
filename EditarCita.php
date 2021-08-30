<?php

include("conexion.php");
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Editar_Cita</title>
<link rel="stylesheet" href="CSS/estiloeditarcita.css">
</head>
<body>
<div id="editarcita">
<header>
<img alt="logo" src="C:\xampp\htdocs\GestionCitas\imagenes\L4.jpg" width="50" height="50">
<a href="inicioAdministrador.html"><input type="submit" value="Inicio" style=" float: right; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;"></a>
</header>

<h1>Editar Cita</h1>

<section>
    <form method="get">  
        <input type="text" name="nss" placeholder="NSS" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busqueda" value="buscar" style=" float: right; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
<table>
<?php
if(isset($_GET['busqueda'])){
    $buscar=$_GET['nss'];
    $sql = "SELECT nombre_paci,appat_paci,apmat_paci,tel_paci FROM mpaciente WHERE nss ='$buscar'";
    $resultado =mysqli_query($con,$sql);
    
    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
        <tr>
        <td><?php echo $mostrar['nombre_paci']  ?></td>
        <td><?php echo $mostrar['appat_paci']  ?></td>
        <td><?php echo $mostrar['apmat_paci']  ?></td>
        </tr>
        <tr>
        <td><?php echo $mostrar['tel_paci']  ?></td>
        </tr>
        <?php
    }

}
?>
</table>
<br>

<form method="get">  
        <input type="text" name="MMedico_num_colegiado" placeholder="Num Colegiado de Cabecera" style="width:200px; height:30px; left:100px; top:100px;">
        <input type="submit" name = "busquedas" value="buscar" style=" float: right; background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:20px; margin:10px;">
    </form>
    <table>
        <?php
        if(isset($_GET['busquedas'])){
            $buscar1=$_GET['MMedico_num_colegiado'];
            $sql1= "SELECT nombre_per,appat_per,apmat_per FROM mpersonal WHERE MMedico_num_colegiado = '$buscar1'";
            $resultado1 =mysqli_query($con,$sql1);
            
            while ($mostrar1=mysqli_fetch_array($resultado1)) {
                ?>
                <tr>
                <td><?php echo $mostrar1['nombre_per']  ?></td>
                <td><?php echo $mostrar1['appat_per']  ?></td>
                <td><?php echo $mostrar1['apmat_per']  ?></td>
                </tr>
                <?php
            }

        }
?>
</table>
<form action = "EditarC.php" method="post">
    <input type="number" name="id_cita" placeholder="id cita" style="width:400px; height:30px; left:100px; top:150px;">
    <br>
    <br>
    <input type="date" name="fecha_cita" placeholder="Fecha de la cita [AAAA/MM/DD]" style="width:400px; height:30px; left:100px; top:100px;">
    <br>
    <br>
    <input type="time" name="hora_cita" placeholder="Hora de la cita [HH:MM]" style="width:400px; height:30px; left:100px; top:150px;">
    <br><br><br>
    <input type="submit" value="Editar" style=" background-color:dodgerblue; border-color: dodgerblue; color:white; width:100px; height:30px; left:250px; top:650px;">
</form>

</section>
</div>
</body>
</html>