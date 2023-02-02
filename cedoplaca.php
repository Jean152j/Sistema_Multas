<!DOCTYPE html>
<html>
    <head>
        <link href="css/tabla-grande.css" rel="stylesheet">
        </link>
    </head>
    <body>
        <?php

include ('conexion.php');
    $select = $_GET['combo'];

    if($select == "Placa"){
        $valor= $_GET['valor'];
        $sentencia_sql = "SELECT d.id, c.cedula, CONCAT(c.nombre, ' ', c.apellido) AS Conductor, r.nombre, r.puntos, r.multa, d.fecha, d.pagado FROM conductores c, reportes r, det_rep_veh d, vehiculos v WHERE v.id_veh = d.id_vehiculo AND r.id_reportes = d.id_reporte AND c.id_conductor = v.id_conductor AND v.placa = '$valor'";
        $resultados = mysqli_query($connection,$sentencia_sql);
?>
        <div class="datagrid">
            <table>
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            CEDULA
                        </th>
                        <th>
                            NOMBRE DEL CONDUCTOR
                        </th>
                        <th>
                            NOMBRE DE REPORTE
                        </th>
                        <th>
                            PUNTOS
                        </th>
                        <th>
                            VALOR
                        </th>
                        <th>
                            FECHA
                        </th>
                        <th>
                            PAGADO
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
        while($filas = mysqli_fetch_row($resultados))
          {
            ?>
                    <tr class="alt">
                        <td>
                            <?php echo $filas[0] ?>
                        </td>
                        <td>
                            <?php echo $filas[1] ?>
                        </td>
                        <td>
                            <?php echo $filas[2] ?>
                        </td>
                        <td>
                            <?php echo $filas[3] ?>
                        </td>
                        <td>
                            <?php echo $filas[4] ?>
                        </td>
                        <td>
                            <?php echo $filas[5] ?>
                        </td>
                        <td>
                            <?php echo $filas[6] ?>
                        </td>
                        <td>
                            <?php echo $filas[7] ?>
                        </td>
                    </tr>
                    <?php
                     } 
                     ?>
                </tbody>
            </table>
        </div>
        
        <?php
    }else{
        $valor= $_GET['valor'];
        $sentencia_sql = "SELECT d.id, CONCAT(c.nombre, ' ', c.apellido) AS Conductor, r.nombre, r.puntos, r.multa, d.fecha, d.pagado FROM conductores c, reportes r, det_rep_con d WHERE d.id_conductor = c.id_conductor AND r.id_reportes = d.id_reporte AND c.cedula = '$valor'";
        $resultados = mysqli_query($connection,$sentencia_sql);
        ?>
        <div class="datagrid">
            <table>
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            NOMBRE DEL TITULAR
                        </th>
                        <th>
                            NOMBRE DE REPORTE
                        </th>
                        <th>
                            PUNTOS
                        </th>
                        <th>
                            VALOR
                        </th>
                        <th>
                            FECHA
                        </th>
                        <th>
                            PAGADO
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($filas = mysqli_fetch_row($resultados)){ ?>
                    <tr class="alt">
                        <td>
                            <?php echo $filas[0] ?>
                        </td>
                        <td>
                            <?php echo $filas[1] ?>
                        </td>
                        <td>
                            <?php echo $filas[2] ?>
                        </td>
                        <td>
                            <?php echo $filas[3] ?>
                        </td>
                        <td>
                            <?php echo $filas[4] ?>
                        </td>
                        <td>
                            <?php echo $filas[5] ?>
                        </td>
                        <td>
                            <?php echo $filas[6] ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php
    }
?>
    </body>
</html>