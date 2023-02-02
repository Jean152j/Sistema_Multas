<?php
include ("conexion.php");
$user = $_GET['Usuario'];
$password = $_GET['Password'];

$sentencia_sql = "SELECT * FROM agentes WHERE cedula = '$user' AND contrasena= '$password'";
$resultados = mysqli_query($connection,$sentencia_sql);
if($filas = mysqli_fetch_row($resultados)){
    echo 'Conectado!';
    header ("Location: interfaz_agentes.html");
//echo $filas[0].'<br>'; echo $filas[1].'<br>';
}else{
    echo'<script type="text/javascript">
                alert("¡ Verifique que las credenciales sean válidas !");
                window.location.href="login_agentes.html";
                </script>';
}
?>