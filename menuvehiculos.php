<!DOCTYPE html>
<html>
    <style>
        .cont {
            color: white;
            top: 70%;
            left: 50%;
            position: absolute;
            /* centrar el div*/
            transform: translate(-50%, -50%);
            /* para q no reseca el div*/
            box-sizing: border-box;
            height: 100%;

        }
    </style>
    <body>
        <header>
            <link href="css/layouts.css" rel="stylesheet" type="text/css">
                <nav>
                    <ul>
                        <li>
                            <a href="insertar_multa_veh.php" target="inner2">
                                Agregar
                            </a>
                        </li>
                        <li>
                            <a href="updatevehiculos.php" target="inner2">
                                Editar
                            </a>
                        </li>
                    </ul>
                </nav>
            </link>
        </header>
        <div class="cont">
            <iframe frameborder="0" height="400" name="inner2" scrolling="none" src="" width="1270">
            </iframe>
        </div>
    </body>
</html>