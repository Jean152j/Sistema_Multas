<!DOCTYPE html>
<html>
    <head>
        <link href="css/tabla-peq.css" rel="stylesheet">
            <link href="css/eslog.css" rel="stylesheet">
                <style>
                    .pp{
        color: white;
        top: 80%;
        left: 85%;
        position: absolute;
        /* centrar el div*/
        transform: translate(-50%, -50%);
        /* para q no reseca el div*/
        padding: 5px 5px;
        border:1px solid black;
    }
                </style>
            </link>
        </link>
    </head>
    <body>
        <div>
            <form action="" method="get">
                <input name="cedulac" placeholder="Cédula Conductor" type="text">
                    <input type="submit" value="Consulta">
                    </input>
                </input>
            </form>
        </div>
        <?php
include ('conexion.php');

if (isset($_GET['cedulac'])) {

     $valor= $_GET['cedulac'];
        $sentencia_sql = "SELECT d.id, c.cedula, CONCAT(c.nombre, ' ', c.apellido) AS Conductor, r.nombre, d.fecha, d.pagado FROM conductores c, reportes r, det_rep_con d WHERE r.id_reportes = d.id_reporte AND c.id_conductor=d.id_conductor AND c.cedula = '$valor'";
        $resultados = mysqli_query($connection,$sentencia_sql);
        
    
            
        
        ?>
        <br>
            <br>
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
                                    FECHA
                                </th>
                                <th>
                                    PAGADO
                                </th>
                            </tr>
                        </thead>
                        <?php while($filas = mysqli_fetch_row($resultados)){ ?>
                        <tbody>
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
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br>
                    <br>
                        <br>
                            <div>
                                <form action="" method="get">
                                    <label for="label1">
                                    Id de la Multa a Pagar:
                                    </label>
                                    <input name="editar" type="text">
                                        <p>
                                            <input type="submit" value="Editar"/>
                                        </p>
                                    </input>
                                </form>
                            </div>
                        </br>
                    </br>
                </br>
            </br>
        </br>
    </body>
    <?php }
if (isset($_GET['editar'])) {
    include ('conexion.php');
    $id = $_GET['editar'];
    $sentencia_update="UPDATE det_rep_con SET pagado='S' WHERE id='$id'";
    $resultados = mysqli_query($connection,$sentencia_update);
    if($resultados == false){
        echo "<p class='pp'>
    No se pudo actualizar
</html>
";
    }
}
?>
