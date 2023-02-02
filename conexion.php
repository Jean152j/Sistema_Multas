<?php
$server = 'sql5.freemysqlhosting.net';
$usuario='sql5388273';
$nombre = 'sql5388273';
$password= 'GPP2pAB7lZ';
$connection = mysqli_connect($server,$usuario,$password,$nombre);
if(mysqli_connect_errno()){
    echo 'No se puede conectar a la base';
}

?>
