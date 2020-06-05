<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incrustar Php en html</title>
</head>
<body>
<!--/*
EL protocolo http es un protocolo de solicitud y respuesta para un cliente y un servidor
define un conjunto de metodos(https verbs -> $_GET, $_POST, $_REQUEST)
$_GET -> Es obtener informacion, traer datos que están en el sv. Los parámetros permanecen en el historial del navegador pq son partes de la URL, NO DEBE UTILIZARSE PARA CONTRASEÑAS O INFORMACION SENSIBLE
$_POST -> Es enviar información desde el cliente al servidor. Los parámetros no se guardan en el historial del navegador. SE USA PARA ENVIO DE INFORMACIÓN SENSIBLE
$_REQUEST -> Nos permite obtener variables enviadas por el metodo get y post, es como una combinación de los dos.
*/-->

<!--Este formulario viajará por el metodo post a hacia el form.php-->
<form action="form.php" method="post">
    <table>
        <?php //abre el php
        $array = ['name' => 'Nombre', 'last_name' => 'Apellido', 'address' => 'Dirección', 'phone' => 'Teléfono'];

        foreach ($array as $key => $value):
            // cierre de php
            ?>

            <tr>
                <td>
                    <?php echo $value ?>
                </td>
                <td>
                    <input type="text" name="<?php echo $key ?>">
                </td>
            </tr>
        <?php endforeach; //cierro el foreach ?>

        <!--
            <tr>
                <td>
                    Nombre
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>

            <tr>
                <td>
                    Apellido
                </td>
                <td>
                    <input type="text" name="last_name">
                </td>
            </tr>

            <tr>
                <td>
                    Dirección
                </td>
                <td>
                    <input type="text" name="adress">
                </td>
            </tr>

            <tr>
                <td>
                    Teléfono
                </td>
                <td>
                    <input type="text" name="telephone">
                </td>
            </tr>
        -->
        <tr>
            <td>
                Sexo
            </td>
            <td>
                <input type="radio" name="sex" value="mujer"> Mujer
                <input type="radio" name="sex" value="hombre">Hombre
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Guardar">
            </td>
        </tr>
    </table>
</form>

</body>
</html>