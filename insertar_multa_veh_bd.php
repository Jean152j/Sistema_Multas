<?php
    include ("conexion.php");
    $fecha = $_GET['fecha'];
    $cedulaa = $_GET['cedulaa'];
    $nombre_contrav = $_GET['nombre'];
    $cedulac = $_GET['cedulac'];


    $sentencia = "INSERT INTO det_rep_con(id_conductor,id_reporte,id_agente,fecha, pagado) SELECT c.id_conductor,r.id_reportes,a.id_agente,'25/01/1995','N' FROM conductores c, reportes r, agentes a WHERE c.cedula = '$cedulac' AND r.nombre = '$nombre_contrav' AND a.cedula = '$cedulaa'"; 
    
    $resultados = mysqli_query($connection,$sentencia);
    if($resultados == true){
        echo "Insertado!";
    }else{
        echo "NO Insertado!";
    }





?>