<?php
    include ("conexion.php");
    $fecha = $_GET['fecha'];
    $cedula = $_GET['cedula'];
    $nombre_contrav = $_GET['nombre'];
    $placa = $_GET['placa'];

    $sentencia = "INSERT INTO det_rep_veh ( id_vehiculo, id_reporte, id_agente, fecha, pagado) SELECT v.id_veh, r.id_reportes, a.id_agente, '$fecha', 'N' FROM vehiculos v, reportes r, agentes a WHERE v.placa='$placa' AND r.nombre = '$nombre_contrav' AND a.cedula = '$cedula'";
    
    $resultados = mysqli_query($connection,$sentencia);
    if($resultados == true){
        echo "Insertado!";
    }else{
        echo "NO Insertado!";
    }
?>