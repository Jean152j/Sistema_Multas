<!DOCTYPE html>
<html>

<head>
    <title>Consulta Multas</title>
    <link rel="stylesheet" type="text/css" href="css/layouts.css">
</head>
<style>
    .frame {
        color: white;
        top: 50%;
        left: 50%;
        position: absolute;
        /* centrar el div*/
        transform: translate(-50%, -50%);
        /* para q no reseca el div*/
        box-sizing: border-box;
    }
</style>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index_consultas.html" target="frame"> Consultas</a></li>
                <li><a href="login_agentes.html" target="frame"> Agentes</a></li>

            </ul>
        </nav>
    </header>
    <div class="contenedor">
        <iframe class="frame" src="index_consultas.html" frameborder="0" name="frame" width="90%" height="720">

        </iframe>
    </div>

</body>

</html>
