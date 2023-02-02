<!DOCTYPE html>
<html>
    <head>
  <style>
      select{
	width: 100%;
	height: 40px;
	background-color: #E1EEf4;
	color: #00557F;font-size: large;
}input{
	width: 100%;
	margin-bottom:20px; 
}
input[type="text"],
input[type="password"]{
	background-color: #E1EEf4;
	color: #00557F;
	margin-bottom: 20px;
	width: 100%;
	padding: 10px;
	border: 1px solid rgb(0, 0, 0); 
	box-sizing: border-box;
	font-size: large;
}

input[type="submit"]{
	text-decoration: none;
	  padding: 10px;
	  font-weight: 600;
	  font-size: 20px;
	  color: #ffffff;
	  background-color: #1883ba;
	  border-radius: 6px;
	  border: 2px solid #0016b0;
}
input[type="submit"]:hover{
	color: #1883ba;
	  background-color: #ffffff;
	cursor:pointer; 
	font-size: 21px;
}
  </style>
    </head>
    <body>      
<div>
    <form action="insertar_multa_con_bd.php" method="get">
        <select name="nombre"  class="form-control">
            <?php
                include("conexion.php");
                $consulta = "SELECT id_reportes,nombre FROM reportes WHERE destinado='C'";
                $result = mysqli_query($connection,$consulta); 
               
                foreach($result as $opciones): ?>
                <option values="
                <?php echo $opciones['nombre'] ?>"> 
                <?php echo $opciones['nombre'] ?> </option>
                <?php endforeach ?>       
        </select>
        
            <p>  <input type="text" name="cedula" placeholder="Cédula del Agente"></p>
            <p>  <input type="text" name="fecha" placeholder="Fecha de Contravención"></p>
            <p>  <input type="text" name="placa" placeholder="Placa del Automotor"></p>
            <p>  <input type="submit" name="Agregar" value="Agregar"></p>

    </form>
</div>
      


    </body>

</html>